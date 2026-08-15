/* ==========================================================================
   SNAPRINT DIGITAL PRINTING - MAIN APPLICATION CONTROLLER
   Navigation, Catalog Filtering, Gallery Modal & Theme Switcher
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Theme Switcher (Dark / Light Mode)
  const themeToggleBtn = document.getElementById('theme-toggle');
  const themeIcon = document.getElementById('theme-icon');
  
  const savedTheme = localStorage.getItem('snaprint-theme') || 'light';
  applyTheme(savedTheme);

  if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', () => {
      const newTheme = document.body.getAttribute('data-theme') === 'dark' ? 'light' : 'dark';
      applyTheme(newTheme);
    });
  }

  function applyTheme(theme) {
    document.body.setAttribute('data-theme', theme);
    localStorage.setItem('snaprint-theme', theme);
    if (themeIcon) {
      themeIcon.className = theme === 'dark' ? 'lucide-sun' : 'lucide-moon';
    }
  }

  // 2. Mobile Navigation Toggle
  const mobileToggleBtn = document.getElementById('mobile-toggle');
  const navMenu = document.getElementById('nav-menu');

  if (mobileToggleBtn && navMenu) {
    mobileToggleBtn.addEventListener('click', () => {
      navMenu.classList.toggle('mobile-open');
    });

    // Close menu when clicking nav links
    navMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => navMenu.classList.remove('mobile-open'));
    });
  }

  // 3. Render & Filter Product Catalog
  const catalogGrid = document.getElementById('catalog-grid');
  const catalogFilterContainer = document.getElementById('catalog-filters');

  if (catalogGrid && window.SNAP_PRODUCTS) {
    renderCatalog('all');

    if (catalogFilterContainer) {
      catalogFilterContainer.querySelectorAll('.catalog-filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          catalogFilterContainer.querySelectorAll('.catalog-filter-btn').forEach(b => b.classList.remove('active'));
          btn.classList.add('active');
          const filterCategory = btn.dataset.filter;
          renderCatalog(filterCategory);
        });
      });
    }
  }

  function renderCatalog(filter) {
    const filteredProducts = filter === 'all' 
      ? window.SNAP_PRODUCTS 
      : window.SNAP_PRODUCTS.filter(p => p.category === filter);

    catalogGrid.innerHTML = filteredProducts.map(p => `
      <div class="product-card">
        <div class="product-img-wrapper">
          <img src="${p.image}" alt="${p.name}" loading="lazy">
          <span class="product-category-tag">${p.categoryName}</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">${p.name}</h3>
          <p class="product-desc">${p.description}</p>
          <div style="margin-bottom: 1rem; font-size: 0.85rem; color: var(--text-muted);">
            <strong>Pilihan Bahan:</strong> ${p.materials.slice(0, 2).join(', ')}...
          </div>
          <div class="product-meta">
            <div>
              <span style="font-size:0.75rem; color:var(--text-muted); display:block;">Mulai Dari</span>
              <span class="product-price">Rp ${p.priceStarting.toLocaleString('id-ID')} <small style="font-size:0.75rem; font-weight:normal;">/${p.unit}</small></span>
            </div>
            <button class="btn btn-primary btn-sm order-catalog-btn" data-id="${p.id}">
              Hitung Cetak 🧮
            </button>
          </div>
        </div>
      </div>
    `).join('');

    // Attach Order Event to Product Buttons
    catalogGrid.querySelectorAll('.order-catalog-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        const prodId = btn.dataset.id;
        const calcSection = document.getElementById('kalkulator');
        if (calcSection) {
          calcSection.scrollIntoView({ behavior: 'smooth' });
          // Trigger click on calculator tab if exists
          const targetTab = document.querySelector(`.calc-tab-btn[data-id="${prodId}"]`);
          if (targetTab) targetTab.click();
        }
      });
    });
  }

  // 4. Gallery Lightbox Modal
  const galleryItems = document.querySelectorAll('.gallery-item');
  const galleryModal = document.getElementById('gallery-modal');
  const modalImg = document.getElementById('modal-img');
  const modalCaption = document.getElementById('modal-caption');
  const modalClose = document.getElementById('modal-close');

  if (galleryItems && galleryModal) {
    galleryItems.forEach(item => {
      item.addEventListener('click', () => {
        const imgSrc = item.getAttribute('data-src') || item.querySelector('img').src;
        const title = item.getAttribute('data-title') || 'Toko Snaprint Bekas';
        modalImg.src = imgSrc;
        modalCaption.textContent = title;
        galleryModal.classList.add('active');
      });
    });

    if (modalClose) {
      modalClose.addEventListener('click', () => galleryModal.classList.remove('active'));
    }
    galleryModal.addEventListener('click', (e) => {
      if (e.target === galleryModal) galleryModal.classList.remove('active');
    });
  }

  // 5. FAQ Accordion
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    question.addEventListener('click', () => {
      const isOpen = item.classList.contains('active');
      faqItems.forEach(i => i.classList.remove('active'));
      if (!isOpen) item.classList.add('active');
    });
  });
});
