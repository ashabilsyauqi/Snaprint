/* ==========================================================================
   SNAPRINT DIGITAL PRINTING - INTERACTIVE CALCULATOR ENGINE
   Area/Qty Price Math, Dynamic Spec Selectors, Bulk Discounts & WA Generator
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  if (typeof SNAP_PRODUCTS === 'undefined') return;

  let currentProductId = 'banner-flexi';
  let selectedMaterialIndex = 0;
  let selectedFinishingIndex = 0;
  let inputWidth = 2; // meters
  let inputHeight = 1; // meters
  let inputQty = 1;
  let uploadedFileName = '';

  // DOM Elements
  const tabsContainer = document.getElementById('calc-tabs');
  const formContainer = document.getElementById('calc-form-container');
  const summaryProduct = document.getElementById('calc-summary-product');
  const summarySpec = document.getElementById('calc-summary-spec');
  const summaryQty = document.getElementById('calc-summary-qty');
  const summaryDiscount = document.getElementById('calc-summary-discount');
  const totalAmount = document.getElementById('calc-total-amount');
  const btnOrderWA = document.getElementById('btn-order-wa');
  const fileDropZone = document.getElementById('file-drop-zone');
  const fileInputHidden = document.getElementById('file-input-hidden');
  const fileStatusText = document.getElementById('file-status-text');

  // FontAwesome Icon Mapping for Products
  const productIcons = {
    'banner-flexi': 'fa-solid fa-scroll',
    'stiker-vinyl': 'fa-solid fa-tag',
    'kartu-nama': 'fa-solid fa-id-card',
    'print-a3': 'fa-solid fa-file-lines',
    'lanyard-id': 'fa-solid fa-id-badge',
    'plakat-akrilik': 'fa-solid fa-trophy',
    'stempel-flash': 'fa-solid fa-stamp',
    'mug-custom': 'fa-solid fa-mug-hot',
    'rollup-banner': 'fa-solid fa-image'
  };

  // URL Parameter Pre-selection
  const urlParams = new URLSearchParams(window.location.search);
  const paramProd = urlParams.get('product');
  if (paramProd && SNAP_PRODUCTS.some(p => p.id === paramProd)) {
    currentProductId = paramProd;
  }

  // 1. Render Product Selector Tabs
  function renderTabs() {
    if (!tabsContainer) return;
    tabsContainer.innerHTML = SNAP_PRODUCTS.map(p => {
      const activeClass = p.id === currentProductId ? 'active' : '';
      const iconClass = productIcons[p.id] || 'fa-solid fa-print';
      return `
        <button class="calc-tab-btn ${activeClass}" data-id="${p.id}">
          <i class="${iconClass}"></i> ${p.name}
        </button>
      `;
    }).join('');

    const tabBtns = tabsContainer.querySelectorAll('.calc-tab-btn');
    tabBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        currentProductId = btn.dataset.id;
        selectedMaterialIndex = 0;
        selectedFinishingIndex = 0;
        renderTabs();
        renderForm();
        calculatePrice();
      });
    });
  }

  // 2. Render Form Inputs for Selected Product
  function renderForm() {
    if (!formContainer) return;
    const prod = SNAP_PRODUCTS.find(p => p.id === currentProductId);
    if (!prod) return;

    let html = ``;

    // Material Dropdown
    html += `
      <div class="calc-form-group">
        <label class="calc-label">Pilihan Bahan / Kertas</label>
        <select id="calc-material-select" class="calc-select">
          ${prod.materials.map((m, idx) => `<option value="${idx}">${m}</option>`).join('')}
        </select>
      </div>
    `;

    // Dimension vs Quantity Inputs
    if (prod.calcType === 'area') {
      html += `
        <div class="grid-2">
          <div class="calc-form-group">
            <label class="calc-label">Panjang (Meter)</label>
            <input type="number" id="calc-input-width" class="calc-input" value="${inputWidth}" min="0.5" step="0.1">
          </div>
          <div class="calc-form-group">
            <label class="calc-label">Lebar (Meter)</label>
            <input type="number" id="calc-input-height" class="calc-input" value="${inputHeight}" min="0.5" step="0.1">
          </div>
        </div>
        <div class="calc-form-group">
          <label class="calc-label">Jumlah Cetak (Pcs/Lembar)</label>
          <input type="number" id="calc-input-qty" class="calc-input" value="${inputQty}" min="1">
        </div>
      `;
    } else {
      html += `
        <div class="calc-form-group">
          <label class="calc-label">Jumlah Order (${prod.unit})</label>
          <input type="number" id="calc-input-qty" class="calc-input" value="${inputQty}" min="1">
        </div>
      `;
    }

    // Finishing Options
    if (prod.finishing && prod.finishing.length > 0) {
      html += `
        <div class="calc-form-group">
          <label class="calc-label">Finishing Tambahan</label>
          <select id="calc-finishing-select" class="calc-select">
            ${prod.finishing.map((f, idx) => `<option value="${idx}">${f}</option>`).join('')}
          </select>
        </div>
      `;
    }

    formContainer.innerHTML = html;

    // Attach Event Listeners
    const matSelect = document.getElementById('calc-material-select');
    if (matSelect) {
      matSelect.addEventListener('change', (e) => {
        selectedMaterialIndex = parseInt(e.target.value);
        calculatePrice();
      });
    }

    const finSelect = document.getElementById('calc-finishing-select');
    if (finSelect) {
      finSelect.addEventListener('change', (e) => {
        selectedFinishingIndex = parseInt(e.target.value);
        calculatePrice();
      });
    }

    const widthInp = document.getElementById('calc-input-width');
    if (widthInp) {
      widthInp.addEventListener('input', (e) => {
        inputWidth = parseFloat(e.target.value) || 0;
        calculatePrice();
      });
    }

    const heightInp = document.getElementById('calc-input-height');
    if (heightInp) {
      heightInp.addEventListener('input', (e) => {
        inputHeight = parseFloat(e.target.value) || 0;
        calculatePrice();
      });
    }

    const qtyInp = document.getElementById('calc-input-qty');
    if (qtyInp) {
      qtyInp.addEventListener('input', (e) => {
        inputQty = parseInt(e.target.value) || 1;
        calculatePrice();
      });
    }
  }

  // 3. Price Math Engine
  function calculatePrice() {
    const prod = SNAP_PRODUCTS.find(p => p.id === currentProductId);
    if (!prod) return;

    let subtotal = 0;
    let qtyUnitText = '';
    let specText = prod.materials[selectedMaterialIndex] || '';

    if (prod.finishing && prod.finishing[selectedFinishingIndex]) {
      specText += ` + ${prod.finishing[selectedFinishingIndex]}`;
    }

    if (prod.calcType === 'area') {
      const areaPerUnit = Math.max(0.5, inputWidth * inputHeight); // min 0.5m2
      const totalArea = areaPerUnit * inputQty;
      subtotal = totalArea * prod.priceStarting;
      qtyUnitText = `${inputQty} Pcs (${inputWidth}m x ${inputHeight}m = ${totalArea.toFixed(1)} m²)`;
    } else {
      subtotal = inputQty * prod.priceStarting;
      qtyUnitText = `${inputQty} ${prod.unit}`;
    }

    // Bulk Discount Logic
    let discountPct = 0;
    if (inputQty >= 50) discountPct = 15;
    else if (inputQty >= 20) discountPct = 10;
    else if (inputQty >= 10) discountPct = 5;

    const discountAmount = subtotal * (discountPct / 100);
    const finalTotal = Math.max(0, subtotal - discountAmount);

    // Update Summary UI
    if (summaryProduct) summaryProduct.textContent = prod.name;
    if (summarySpec) summarySpec.textContent = specText;
    if (summaryQty) summaryQty.textContent = qtyUnitText;
    if (summaryDiscount) {
      summaryDiscount.textContent = discountPct > 0 ? `Hemat ${discountPct}% (-Rp ${discountAmount.toLocaleString('id-ID')})` : 'Harga Reguler';
    }
    if (totalAmount) totalAmount.textContent = `Rp ${finalTotal.toLocaleString('id-ID')}`;

    // Update WA Button Link
    if (btnOrderWA) {
      btnOrderWA.onclick = () => {
        const fileInfo = uploadedFileName ? `\n• File Desain: *${uploadedFileName}*` : '';
        const msg = `Halo Snaprint Bekasi! 👋
Saya bermaksud order cetak melalui website:

📌 *RINCIAN ORDER:*
• Produk: *${prod.name}*
• Bahan & Spec: *${specText}*
• Jumlah Order: *${qtyUnitText}*
• Estimasi Biaya: *Rp ${finalTotal.toLocaleString('id-ID')}*${fileInfo}

Mohon diproses ya admin. Terima kasih!`;

        window.open(`https://wa.me/6281311933172?text=${encodeURIComponent(msg)}`, '_blank');
      };
    }
  }

  // 4. Drag & Drop File Upload Handler
  if (fileDropZone && fileInputHidden) {
    fileDropZone.addEventListener('click', () => fileInputHidden.click());
    
    fileDropZone.addEventListener('dragover', (e) => {
      e.preventDefault();
      fileDropZone.style.borderColor = 'var(--primary-blue)';
    });

    fileDropZone.addEventListener('dragleave', () => {
      fileDropZone.style.borderColor = 'var(--border-color)';
    });

    fileDropZone.addEventListener('drop', (e) => {
      e.preventDefault();
      fileDropZone.style.borderColor = 'var(--border-color)';
      if (e.dataTransfer.files.length > 0) {
        handleFileSelect(e.dataTransfer.files[0]);
      }
    });

    fileInputHidden.addEventListener('change', (e) => {
      if (e.target.files.length > 0) {
        handleFileSelect(e.target.files[0]);
      }
    });
  }

  function handleFileSelect(file) {
    uploadedFileName = file.name;
    if (fileStatusText) {
      fileStatusText.innerHTML = `
        <div style="color:var(--friendly-emerald); font-weight:700; margin-top:0.5rem;">
          <i class="fa-solid fa-circle-check"></i> File Terpilih: ${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)
        </div>
      `;
    }
    calculatePrice();
  }

  // Initial Run
  renderTabs();
  renderForm();
  calculatePrice();
});
