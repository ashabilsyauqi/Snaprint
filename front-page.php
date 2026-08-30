<?php
/**
 * Template Name: Front Page (Beranda)
 *
 * @package Snaprint
 * @version 1.0.0
 */

get_header();
?>

  <!-- Hero Section - Dominant Royal Blue Brand Canvas -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content scroll-reveal-left">
          <div class="badge-pill friendly">
            <i class="fa-solid fa-wand-magic-sparkles"></i> Friendly Price • High Precision Quality
          </div>
          <h1 class="hero-title">
            Cetak Media Bisnis <span class="blue-gradient">Cepat, Terjangkau & Presisi</span>
          </h1>
          <p class="hero-subtitle">
            <em>"Dari Desain Sampai Cetak, Semua Bisa Online!"</em> Snaprint Bekasi melayani cetak spanduk, stiker custom, kartu nama, lanyard, hingga souvenir untuk UMKM, perusahaan, event, dan umum dengan hasil warna tajam & ramah di kantong.
          </p>

          <div class="hero-badges">
            <div class="hero-badge-item">
              <span style="color:#00D2FF;"><i class="fa-solid fa-bolt"></i></span> Cetak Ekspres 1 Hari
            </div>
            <div class="hero-badge-item">
              <span style="color:#00D2FF;"><i class="fa-solid fa-palette"></i></span> Gratis Cek Resolusi File
            </div>
            <div class="hero-badge-item">
              <span style="color:var(--friendly-emerald);"><i class="fa-solid fa-briefcase"></i></span> Peluang Franchise & Kemitraan
            </div>
          </div>

          <div class="hero-buttons">
            <a href="<?php echo esc_url( home_url( '/kalkulator' ) ); ?>" class="btn btn-primary btn-lg">
              <i class="fa-solid fa-calculator"></i> Kalkulator Cetak Online
            </a>
            <a href="<?php echo esc_url( home_url( '/franchise' ) ); ?>" class="btn btn-hero-outline btn-lg">
              <i class="fa-solid fa-briefcase"></i> Info Franchise Bisnis
            </a>
          </div>
        </div>

        <div class="hero-visual scroll-reveal-right">
          <div class="store-main-card">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" alt="Fasad Toko Snaprint Digital Printing Bekasi">
            <div class="store-card-overlay">
              <h4>Snaprint Digital Printing Outlet</h4>
              <p><i class="fa-solid fa-location-dot"></i> Jl. Mustika Jaya, Lambang Sari, Tambun Selatan, Bekasi</p>
            </div>
          </div>

          <div class="floating-card-1 floating-anim">
            <div class="floating-icon"><i class="fa-solid fa-print"></i></div>
            <div>
              <strong style="font-size:0.9rem; display:block;">Mesin High-Resolution</strong>
              <small style="color:#94A3B8;">Akurasi Warna High Precision</small>
            </div>
          </div>

          <div class="floating-card-2 floating-anim" style="animation-delay: 2s;">
            <div class="floating-icon"><i class="fa-solid fa-handshake"></i></div>
            <div>
              <strong style="font-size:0.9rem; display:block;">Peluang Franchise</strong>
              <small style="color:#94A3B8;">WA CS: 0877-8104-7453</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust Stats Bar -->
  <section class="stats-bar scroll-reveal">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item scroll-reveal-zoom delay-1">
          <h3>10.000+</h3>
          <p>Pesanan Cetak Selesai</p>
        </div>
        <div class="stat-item scroll-reveal-zoom delay-2">
          <h3>500+</h3>
          <p>Mitra Bisnis & UMKM</p>
        </div>
        <div class="stat-item scroll-reveal-zoom delay-3">
          <h3>100%</h3>
          <p>Garansi Hasil Warna</p>
        </div>
        <div class="stat-item scroll-reveal-zoom delay-4">
          <h3>&lt; 24 Jam</h3>
          <p>Pengerjaan Ekspres Available</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Layanan Utama Highlight Section -->
  <section class="section">
    <div class="container">
      <div class="section-header scroll-reveal">
        <div class="badge-pill">Layanan Unggulan</div>
        <h2 class="section-title">Solusi Media Cetak <span class="blue-gradient">Lengkap</span></h2>
        <p class="section-desc">Pilihan cetakan terlengkap untuk kebutuhan promosi outdoor, stasioneri kantor, branding produk, hingga souvenir event.</p>
      </div>

      <div class="grid-3">
        <div class="service-feature-card scroll-reveal-zoom delay-1">
          <div class="service-icon"><i class="fa-solid fa-palette"></i></div>
          <h3>Banner & Display Promosi</h3>
          <p>Cetak Spanduk Flexi outdoor/indoor, X-Banner, Roll-Up Banner pameran dengan bahan tahan cuaca & warna anti pudar.</p>
          <a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="service-link">Lihat Detail Banner <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="service-feature-card scroll-reveal-zoom delay-2">
          <div class="service-icon"><i class="fa-solid fa-tag"></i></div>
          <h3>Stiker Custom & Label Product</h3>
          <p>Stiker Vinyl waterproof & Chromo label kemasan makanan/bebas cut (Kiss-Cut & Die-Cut) daya rekat kuat.</p>
          <a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="service-link">Lihat Detail Stiker <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="service-feature-card scroll-reveal-zoom delay-3">
          <div class="service-icon"><i class="fa-solid fa-id-card"></i></div>
          <h3>Stationeries & Lanyard Office</h3>
          <p>Kartu nama eksklusif, Lanyard ID card 2 sisi, stempel flash otomatis, brosur bisnis, & nota/faktur custom.</p>
          <a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="service-link">Lihat Detail Stationeries <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div style="text-align:center; margin-top:2.5rem;" class="scroll-reveal">
        <a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="btn btn-primary btn-lg">Lihat Semua 9+ Produk Media Cetak <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- Franchise Hook Banner Section -->
  <section class="section" style="background:linear-gradient(135deg, #040914 0%, #0A192F 40%, #0F52BA 100%); color:#FFFFFF; border-y:2px solid rgba(0, 210, 255, 0.25);">
    <div class="container">
      <div class="grid-2" style="align-items:center;">
        <div class="scroll-reveal-left">
          <div class="badge-pill friendly" style="background:rgba(0, 210, 255, 0.2); color:#00D2FF; border-color:rgba(0, 210, 255, 0.4);">
            <i class="fa-solid fa-handshake"></i> Opportunities & Franchise
          </div>
          <h2 style="color:#FFFFFF; font-size:2.5rem; font-family:var(--font-heading); margin-bottom:1rem;">
            Ingin Punya Bisnis Percetakan Sendiri Di Kota Anda?
          </h2>
          <p style="color:#CBD5E1; font-size:1.1rem; margin-bottom:1.5rem; line-height:1.65;">
            Bergabunglah menjadi bagian dari jaringan <strong>Franchise Snaprint Digital Printing</strong>. Dapatkan lisensi platform cetak online, pasokan mesin presisi, training SDM, & proyeksi ROI cepat (12–18 Bulan).
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <button type="button" class="btn btn-azure btn-lg trigger-franchise-popup">
              <i class="fa-solid fa-paper-plane"></i> Minta Proposal Franchise WA
            </button>
            <a href="<?php echo esc_url( home_url( '/franchise' ) ); ?>" class="btn btn-hero-outline btn-lg">
              <i class="fa-solid fa-list-check"></i> Detail Paket Kemitraan
            </a>
          </div>
        </div>

        <div class="scroll-reveal-right" style="background:rgba(255, 255, 255, 0.06); backdrop-filter:blur(12px); border:1.5px solid rgba(0, 210, 255, 0.3); border-radius:var(--radius-lg); padding:2.25rem;">
          <h3 style="color:#FFFFFF; font-size:1.4rem; margin-bottom:1rem;">Keuntungan Menjadi Mitra Snaprint:</h3>
          <ul style="list-style:none; display:flex; flex-direction:column; gap:0.75rem; color:#E2E8F0; font-size:0.95rem;">
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <span style="color:#00D2FF; font-weight:bold;"><i class="fa-solid fa-check"></i></span> Lisensi Sistem Order Online & Server WA 24 Jam
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <span style="color:#00D2FF; font-weight:bold;"><i class="fa-solid fa-check"></i></span> Pasokan Bahan Baku Harga Direct Distributor
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <span style="color:#00D2FF; font-weight:bold;"><i class="fa-solid fa-check"></i></span> Garansi Perawatan Mesin & Pelatihan SDM Operasional
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <span style="color:#00D2FF; font-weight:bold;"><i class="fa-solid fa-check"></i></span> Strategi Marketing Pemasaran Digital Regional
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Mini Calculator Preview Section -->
  <section class="section" style="background:var(--bg-secondary);">
    <div class="container">
      <div class="grid-2" style="align-items:center;">
        <div class="scroll-reveal-left">
          <div class="badge-pill azure">Kalkulator Cetak Instan</div>
          <h2 class="section-title">Hitung Biaya Cetak Tanpa Ribet <span class="blue-gradient">Dalam 10 Detik</span></h2>
          <p style="color:var(--text-muted); font-size:1.05rem; margin-bottom:1.25rem;">
            Tidak perlu menunggu balasan admin lama! Sistem kalkulator otomatis Snaprint memungkinkan Anda memilih produk, menentukan ukuran, memilih bahan, dan melihat estimasi total harga secara instan.
          </p>
          <ul style="list-style:none; margin-bottom:1.75rem; display:flex; flex-direction:column; gap:0.65rem;">
            <li style="display:flex; align-items:center; gap:0.6rem; font-weight:600;">
              <span style="color:var(--friendly-emerald); font-size:1.1rem;"><i class="fa-solid fa-circle-check"></i></span> Perhitungan berdasarkan ukuran m² atau jumlah Qty
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem; font-weight:600;">
              <span style="color:var(--friendly-emerald); font-size:1.1rem;"><i class="fa-solid fa-circle-check"></i></span> Otomatis memotong diskon grosir hingga 15%
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem; font-weight:600;">
              <span style="color:var(--friendly-emerald); font-size:1.1rem;"><i class="fa-solid fa-circle-check"></i></span> Kirim Rincian Order Langsung ke WhatsApp 0813-1193-3172
            </li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/kalkulator' ) ); ?>" class="btn btn-azure btn-lg"><i class="fa-solid fa-calculator"></i> Buka Kalkulator Cetak Lengkap</a>
        </div>

        <div class="scroll-reveal-right" style="background:var(--bg-card); border-radius:var(--radius-lg); padding:2.25rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow-hover);">
          <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1.25rem; border-b:1px solid var(--border-color); padding-bottom:0.85rem;">
            <h3 style="font-size:1.2rem;">Simulasi Cetak Banner Flexi</h3>
            <span style="background:var(--primary-blue-light); color:var(--primary-blue); padding:0.18rem 0.6rem; border-radius:var(--radius-sm); font-size:0.78rem; font-weight:700;">PROMO</span>
          </div>

          <div style="display:flex; flex-direction:column; gap:0.85rem; margin-bottom:1.25rem;">
            <div style="display:flex; justify-content:space-between; font-size:0.9rem;">
              <span>Ukuran Standard:</span>
              <strong>2m x 1m (2 m²)</strong>
            </div>
            <div style="display:flex; justify-content:space-between; font-size:0.9rem;">
              <span>Bahan Pilihan:</span>
              <strong>Flexi Korchin High-Res 440g</strong>
            </div>
            <div style="display:flex; justify-content:space-between; font-size:0.9rem;">
              <span>Finishing:</span>
              <strong>Mata Ayam 4 Sudut</strong>
            </div>
            <div style="display:flex; justify-content:space-between; font-size:0.9rem; color:var(--friendly-emerald);">
              <span>Layanan File:</span>
              <strong>Gratis Cek Resolusi File</strong>
            </div>
          </div>

          <div style="background:var(--navy-dark); color:#FFFFFF; border-radius:var(--radius-md); padding:1.1rem; text-align:center; margin-bottom:1.1rem; border:1px solid rgba(0, 210, 255, 0.25);">
            <span style="font-size:0.75rem; color:#94A3B8; text-transform:uppercase; letter-spacing:0.1em;">Estimasi Biaya</span>
            <div style="font-size:2.1rem; font-weight:800; color:var(--electric-azure); font-family:var(--font-heading);">Rp 48.000</div>
          </div>

          <a href="<?php echo esc_url( home_url( '/kalkulator' ) ); ?>" class="btn btn-whatsapp" style="width:100%;"><i class="fa-solid fa-calculator"></i> Coba Kalkulator Cetak Sekarang</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Showcase Toko Fisik & Mesin Digital Printing -->
  <section class="section">
    <div class="container">
      <div class="section-header scroll-reveal">
        <div class="badge-pill azure">Fasilitas Workshop</div>
        <h2 class="section-title">Mesin Canggih & <span class="blue-gradient">Outlet Fisik Bekasi</span></h2>
        <p class="section-desc">Kunjungi lokasi toko kami untuk konsultasi langsung, memilih sampel bahan, atau pantau proses cetak pesanan Anda.</p>
      </div>

      <div class="grid-3">
        <div class="gallery-item scroll-reveal-zoom delay-1" data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" data-title="Tampak Depan Outlet Snaprint Bekasi">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" alt="Fasad Snaprint Bekasi">
          <div class="gallery-overlay">
            <div>
              <strong style="font-size:1.05rem; display:block;">Fasad Toko Snaprint</strong>
              <small>Jl. Mustika Jaya, Lambang Sari, Tambun Selatan</small>
            </div>
          </div>
        </div>

        <div class="gallery-item scroll-reveal-zoom delay-2" data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-facade.png' ); ?>" data-title="Spanduk Layanan Digital Printing Lengkap">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-facade.png' ); ?>" alt="Area Depan Snaprint">
          <div class="gallery-overlay">
            <div>
              <strong style="font-size:1.05rem; display:block;">Outlet Tambun Selatan</strong>
              <small>Rekomendasi Digital Printing Terbaik di Bekasi</small>
            </div>
          </div>
        </div>

        <div class="gallery-item scroll-reveal-zoom delay-3" data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-interior.png' ); ?>" data-title="Ruang Pelayanan Kasir & Mesin Digital Printing">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-interior.png' ); ?>" alt="Interior Snaprint Counter">
          <div class="gallery-overlay">
            <div>
              <strong style="font-size:1.05rem; display:block;">Counter Kasir & Area Mesin</strong>
              <small>Ruangan Ber-AC, Pelayanan Cepat & Ramah</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
