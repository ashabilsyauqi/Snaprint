/* ==========================================================================
   SNAPRINT DIGITAL PRINTING - MULTI-PAGE APPLICATION CONTROLLER
   Active Route Detection, Mobile Nav, Theme Manager, Modals & Franchise Popup Hook
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Highlight Active Nav Item based on current Page URL
  const currentPath = window.location.pathname.split('/').pop() || 'index.html';
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPath || (currentPath === '' && href === 'index.html')) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });

  // 2. Theme Manager (Dark / Light Mode)
  const themeToggleBtn = document.getElementById('theme-toggle');
  const themeIcon = document.getElementById('theme-icon');
  
  const savedTheme = localStorage.getItem('snaprint-theme') || 'light';
  applyTheme(savedTheme);

  if (themeToggleBtn) {
    themeToggleBtn.addEventListener('click', () => {
      const currentTheme = document.body.getAttribute('data-theme') || 'light';
      const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
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

  // 3. Mobile Navigation Drawer
  const mobileToggleBtn = document.getElementById('mobile-toggle');
  const navMenu = document.getElementById('nav-menu');

  if (mobileToggleBtn && navMenu) {
    mobileToggleBtn.addEventListener('click', () => {
      navMenu.classList.toggle('mobile-open');
    });

    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && !mobileToggleBtn.contains(e.target)) {
        navMenu.classList.remove('mobile-open');
      }
    });
  }

  // 4. Contact Form Handler (on kontak.html)
  const contactForm = document.getElementById('contact-form');
  const contactAlert = document.getElementById('contact-alert');

  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('contact-name')?.value;
      const phone = document.getElementById('contact-phone')?.value;
      const message = document.getElementById('contact-message')?.value;

      if (contactAlert) {
        contactAlert.style.display = 'block';
        contactAlert.className = 'alert alert-success';
        contactAlert.innerHTML = `✅ Terima kasih <strong>${name}</strong>! Pesan Anda telah terkirim. Membuka WhatsApp CS Snaprint...`;
      }

      setTimeout(() => {
        const waText = `Halo Snaprint Bekasi! Saya ${name} (${phone}). Saya bermaksud konsultasi:\n${message}`;
        window.open(`https://wa.me/6281311933172?text=${encodeURIComponent(waText)}`, '_blank');
      }, 1000);
    });
  }

  // 5. Lightbox Modal Viewer
  const galleryItems = document.querySelectorAll('.gallery-item');
  const galleryModal = document.getElementById('gallery-modal');
  const modalImg = document.getElementById('modal-img');
  const modalCaption = document.getElementById('modal-caption');
  const modalClose = document.getElementById('modal-close');

  if (galleryItems.length > 0 && galleryModal) {
    galleryItems.forEach(item => {
      item.addEventListener('click', () => {
        const imgSrc = item.getAttribute('data-src') || item.querySelector('img').src;
        const title = item.getAttribute('data-title') || 'Showcase Snaprint Digital Printing Bekasi';
        if (modalImg) modalImg.src = imgSrc;
        if (modalCaption) modalCaption.textContent = title;
        galleryModal.classList.add('active');
      });
    });

    if (modalClose) modalClose.addEventListener('click', () => galleryModal.classList.remove('active'));
    galleryModal.addEventListener('click', (e) => {
      if (e.target === galleryModal) galleryModal.classList.remove('active');
    });
  }

  // 6. FAQ Accordion Toggle
  const faqQuestions = document.querySelectorAll('.faq-question');
  faqQuestions.forEach(q => {
    q.addEventListener('click', () => {
      const parent = q.parentElement;
      const isOpen = parent.classList.contains('active');
      document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
      if (!isOpen) parent.classList.add('active');
    });
  });

  // 7. On-Scroll IntersectionObserver Reveal Engine
  const revealElements = document.querySelectorAll('.scroll-reveal, .scroll-reveal-left, .scroll-reveal-right, .scroll-reveal-zoom');
  
  if (revealElements.length > 0) {
    const observerOptions = {
      root: null,
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    revealElements.forEach(el => revealObserver.observe(el));
  }

  // 8. Franchise Lead Hook Popup Modal Controller (Franchise CS WA: +62 877-8104-7453 / 6287781047453)
  const franchisePopupModal = document.getElementById('franchise-popup-modal');
  const franchisePopupClose = document.getElementById('franchise-popup-close');
  const openFranchiseBtns = document.querySelectorAll('#btn-open-franchise-popup, .trigger-franchise-popup');
  const franchisePopupForm = document.getElementById('franchise-popup-form');

  if (franchisePopupModal) {
    // Show automatically after 5s on homepage if not shown in current session
    const hasSeenPopup = sessionStorage.getItem('snaprint-franchise-popup-seen');
    if (!hasSeenPopup && (currentPath === 'index.html' || currentPath === '')) {
      setTimeout(() => {
        franchisePopupModal.classList.add('active');
        sessionStorage.setItem('snaprint-franchise-popup-seen', 'true');
      }, 5000);
    }

    // Trigger on Navbar button or manual click
    openFranchiseBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        franchisePopupModal.classList.add('active');
      });
    });

    if (franchisePopupClose) {
      franchisePopupClose.addEventListener('click', () => franchisePopupModal.classList.remove('active'));
    }

    franchisePopupModal.addEventListener('click', (e) => {
      if (e.target === franchisePopupModal) franchisePopupModal.classList.remove('active');
    });

    if (franchisePopupForm) {
      franchisePopupForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = document.getElementById('pop-name')?.value;
        const phone = document.getElementById('pop-phone')?.value;
        const city = document.getElementById('pop-city')?.value;
        const budget = document.getElementById('pop-budget')?.value;

        const waText = `Halo Snaprint Franchise Center! 👋
Saya bermaksud meminta Proposal Kemitraan Franchise Snaprint:

• Nama: *${name}*
• WA/HP: *${phone}*
• Kota Usaha: *${city}*
• Estimasi Modal: *${budget}*

Mohon rincian paket kemitraan & analisis ROI dikirimkan ya. Terima kasih!`;

        franchisePopupModal.classList.remove('active');
        // Franchise specific WA number: +62 877-8104-7453
        window.open(`https://wa.me/6287781047453?text=${encodeURIComponent(waText)}`, '_blank');
      });
    }
  }
});
