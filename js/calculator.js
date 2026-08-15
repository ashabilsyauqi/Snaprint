/* ==========================================================================
   SNAPRINT DIGITAL PRINTING - INTERACTIVE PRINT CALCULATOR ENGINE
   Real-Time Price Calculation & Instant WhatsApp Order Generator
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  const calcTabsContainer = document.getElementById('calc-tabs');
  const calcFormContainer = document.getElementById('calc-form-container');
  const totalAmountEl = document.getElementById('calc-total-amount');
  const summaryProductEl = document.getElementById('calc-summary-product');
  const summarySpecEl = document.getElementById('calc-summary-spec');
  const summaryQtyEl = document.getElementById('calc-summary-qty');
  const summaryDiscountEl = document.getElementById('calc-summary-discount');
  const btnOrderWa = document.getElementById('btn-order-wa');
  const fileDropZone = document.getElementById('file-drop-zone');
  const fileInputHidden = document.getElementById('file-input-hidden');
  const fileStatusText = document.getElementById('file-status-text');

  if (!window.SNAP_PRODUCTS || !calcTabsContainer) return;

  let currentProductId = window.SNAP_PRODUCTS[0].id;
  let currentFile = null;

  // Render Product Selector Tabs
  function renderCalculatorTabs() {
    calcTabsContainer.innerHTML = window.SNAP_PRODUCTS.map((p, idx) => `
      <button type="button" class="calc-tab-btn ${idx === 0 ? 'active' : ''}" data-id="${p.id}">
        <i class="lucide-printer"></i> ${p.name.split(' ')[0]} ${p.name.split(' ')[1] || ''}
      </button>
    `).join('');

    calcTabsContainer.querySelectorAll('.calc-tab-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        calcTabsContainer.querySelectorAll('.calc-tab-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        currentProductId = btn.dataset.id;
        renderCalculatorForm(currentProductId);
      });
    });
  }

  // Render Dynamic Inputs Form based on selected product
  function renderCalculatorForm(productId) {
    const product = window.SNAP_PRODUCTS.find(p => p.id === productId);
    if (!product) return;

    let formHTML = '';

    // If Area-based (e.g. Banner)
    if (product.calcType === 'area') {
      formHTML += `
        <div class="calc-form-group">
          <label class="calc-label">Ukuran Banner (Panjang x Lebar dalam Meter)</label>
          <div class="calc-dimen-grid">
            <div>
              <span class="calc-label" style="font-size:0.8rem; color:var(--text-muted);">Panjang (m)</span>
              <input type="number" id="calc-width" class="calc-input" value="2" min="0.5" step="0.5">
            </div>
            <div>
              <span class="calc-label" style="font-size:0.8rem; color:var(--text-muted);">Lebar (m)</span>
              <input type="number" id="calc-height" class="calc-input" value="1" min="0.5" step="0.5">
            </div>
          </div>
        </div>
      `;
    }

    // Material Selector
    formHTML += `
      <div class="calc-form-group">
        <label class="calc-label" for="calc-material">Pilihan Bahan / Kertas</label>
        <select id="calc-material" class="calc-select">
          ${product.materials.map((m, i) => `<option value="${i}">${m}</option>`).join('')}
        </select>
      </div>
    `;

    // Finishing Selector
    if (product.finishings && product.finishings.length > 0) {
      formHTML += `
        <div class="calc-form-group">
          <label class="calc-label" for="calc-finishing">Pilihan Finishing / Pemotongan</label>
          <select id="calc-finishing" class="calc-select">
            ${product.finishings.map((f, i) => `<option value="${i}">${f}</option>`).join('')}
          </select>
        </div>
      `;
    }

    // Quantity Input
    formHTML += `
      <div class="calc-form-group">
        <label class="calc-label" for="calc-qty">Jumlah Pesanan (${product.unit})</label>
        <input type="number" id="calc-qty" class="calc-input" value="${product.minOrder}" min="${product.minOrder}" step="1">
      </div>
    `;

    // Design Help Radio
    formHTML += `
      <div class="calc-form-group">
        <label class="calc-label">Bantuan Desain Grafis</label>
        <div style="display:flex; gap:1.5rem; margin-top:0.3rem;">
          <label style="display:flex; align-items:center; gap:0.5rem; cursor:pointer; font-size:0.9rem;">
            <input type="radio" name="calc-design" value="ready" checked> File Desain Sudah Ada
          </label>
          <label style="display:flex; align-items:center; gap:0.5rem; cursor:pointer; font-size:0.9rem;">
            <input type="radio" name="calc-design" value="help"> Perlu Bantuan Desain (+Rp 25.000)
          </label>
        </div>
      </div>
    `;

    calcFormContainer.innerHTML = formHTML;

    // Attach Change Listeners for Instant Calculation
    calcFormContainer.querySelectorAll('input, select').forEach(el => {
      el.addEventListener('input', calculatePrice);
      el.addEventListener('change', calculatePrice);
    });

    calculatePrice();
  }

  // Calculation Logic Engine
  function calculatePrice() {
    const product = window.SNAP_PRODUCTS.find(p => p.id === currentProductId);
    if (!product) return;

    let qty = parseInt(document.getElementById('calc-qty')?.value || product.minOrder, 10);
    if (isNaN(qty) || qty < 1) qty = 1;

    const materialIdx = parseInt(document.getElementById('calc-material')?.value || 0, 10);
    const finishingIdx = parseInt(document.getElementById('calc-finishing')?.value || 0, 10);
    const designRadio = document.querySelector('input[name="calc-design"]:checked')?.value || 'ready';

    let unitBase = product.priceStarting;
    // Add material modifier
    unitBase += materialIdx * (unitBase * 0.15);
    // Add finishing modifier
    unitBase += finishingIdx * 2000;

    let subtotal = 0;
    let specText = `${product.materials[materialIdx] || ''}`;

    if (product.calcType === 'area') {
      const width = parseFloat(document.getElementById('calc-width')?.value || 1);
      const height = parseFloat(document.getElementById('calc-height')?.value || 1);
      const area = Math.max(0.5, width * height);
      subtotal = area * unitBase * qty;
      specText += ` (${width}m x ${height}m = ${area.toFixed(1)}m²)`;
    } else {
      subtotal = unitBase * qty;
    }

    if (designRadio === 'help') {
      subtotal += 25000;
    }

    // Bulk Discount
    let discountPercent = 0;
    if (qty >= 100) discountPercent = 0.15;
    else if (qty >= 50) discountPercent = 0.10;
    else if (qty >= 20) discountPercent = 0.05;

    const discountAmount = subtotal * discountPercent;
    const finalTotal = Math.round(subtotal - discountAmount);

    // Format Rupiah
    const formatIDR = (num) => 'Rp ' + num.toLocaleString('id-ID');

    totalAmountEl.textContent = formatIDR(finalTotal);
    summaryProductEl.textContent = product.name;
    summarySpecEl.textContent = specText;
    summaryQtyEl.textContent = `${qty} ${product.unit}`;
    summaryDiscountEl.textContent = discountPercent > 0 ? `${discountPercent * 100}% Grosir` : 'Tidak Ada';

    // Store order payload for WA Button
    btnOrderWa.onclick = () => sendOrderToWhatsApp(product, qty, specText, finalTotal, designRadio);
  }

  // Drag & Drop File Simulator
  if (fileDropZone && fileInputHidden) {
    fileDropZone.addEventListener('click', () => fileInputHidden.click());

    fileDropZone.addEventListener('dragover', (e) => {
      e.preventDefault();
      fileDropZone.classList.add('dragover');
    });

    fileDropZone.addEventListener('dragleave', () => fileDropZone.classList.remove('dragover'));

    fileDropZone.addEventListener('drop', (e) => {
      e.preventDefault();
      fileDropZone.classList.remove('dragover');
      if (e.dataTransfer.files.length) {
        handleFileSelection(e.dataTransfer.files[0]);
      }
    });

    fileInputHidden.addEventListener('change', (e) => {
      if (e.target.files.length) {
        handleFileSelection(e.target.files[0]);
      }
    });
  }

  function handleFileSelection(file) {
    currentFile = file;
    const fileSizeMB = (file.size / (1024 * 1024)).toFixed(2);
    fileStatusText.innerHTML = `
      <strong style="color:var(--primary-blue)">📄 ${file.name}</strong> (${fileSizeMB} MB)
      <br><span class="file-status-badge">✓ Format Valid & Resolusi Siap Cetak!</span>
    `;
  }

  // Format & Redirect WhatsApp Message
  function sendOrderToWhatsApp(product, qty, specText, total, designRadio) {
    const waNumber = '6281311933172';
    const designText = designRadio === 'help' ? 'Butuh Bantuan Desain (+Rp 25rb)' : 'File Siap Cetak (Sudah Ada)';
    const fileInfo = currentFile ? `\n- File Lampiran: ${currentFile.name}` : '';

    const message = `Halo Snaprint Digital Printing Bekasi! 👋
Saya mau pesan cetak online melalui Website Snaprint:

📋 *DETAIL PESANAN:*
• Produk: *${product.name}*
• Spesifikasi: ${specText}
• Jumlah: *${qty} ${product.unit}*
• Bantuan Desain: ${designText}${fileInfo}
• *Estimasi Total: Rp ${total.toLocaleString('id-ID')}*

Mohon konfirmasi ketersediaan dan petunjuk pembayaran/proses cetak selanjutnya ya. Terima kasih!`;

    const encodedMsg = encodeURIComponent(message);
    window.open(`https://wa.me/${waNumber}?text=${encodedMsg}`, '_blank');
  }

  // Initialize
  renderCalculatorTabs();
  renderCalculatorForm(currentProductId);
});
