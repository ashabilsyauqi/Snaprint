<?php
/**
 * Template Name: Layanan & Produk
 *
 * @package Snaprint
 * @version 1.0.0
 */

get_header();
?>

  <!-- Page Banner -->
  <section class="page-banner">
    <div class="container">
      <div class="breadcrumb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a>
        <span class="breadcrumb-separator">/</span>
        <span>Layanan & Produk</span>
      </div>
      <div class="page-banner-content scroll-reveal-left">
        <h1>Katalog Layanan Media Cetak</h1>
        <p>Solusi percetakan segala media berkualitas tinggi untuk menunjang promosi, branding, dan aktivitas bisnis harian Anda.</p>
      </div>
    </div>
  </section>

  <!-- Filter & Catalog Grid -->
  <section class="section">
    <div class="container">
      <!-- Filter Category Buttons -->
      <div class="catalog-filters scroll-reveal" id="catalog-filters">
        <button class="catalog-filter-btn active" data-filter="all">Semua Media (9)</button>
        <button class="catalog-filter-btn" data-filter="promosi">Promosi & Display</button>
        <button class="catalog-filter-btn" data-filter="branding">Branding & Stationeries</button>
        <button class="catalog-filter-btn" data-filter="merchandise">Merchandise & Custom</button>
        <button class="catalog-filter-btn" data-filter="dokumen">Dokumen & Digital</button>
      </div>

      <!-- Catalog Grid rendered dynamically via JS -->
      <div class="grid-3 scroll-reveal-zoom" id="catalog-grid">
        <!-- Rendered dynamically via js/app.js -->
      </div>
    </div>
  </section>

  <!-- CTA Banner to Calculator -->
  <section class="section" style="background:var(--bg-secondary); padding:3.5rem 0;">
    <div class="container" style="text-align:center;">
      <div class="scroll-reveal-zoom" style="background:linear-gradient(135deg, var(--navy-dark) 0%, var(--primary-blue) 100%); border-radius:var(--radius-lg); padding:3rem 2rem; color:#FFFFFF; box-shadow:var(--card-shadow-hover); border:1px solid rgba(0, 210, 255, 0.25);">
        <h2 style="color:#FFFFFF; font-size:2rem; margin-bottom:0.6rem;">Ingin Menghitung Biaya Cetak Kustom?</h2>
        <p style="opacity:0.9; max-width:620px; margin:0 auto 1.75rem auto; font-size:1.05rem;">
          Gunakan Kalkulator Cetak Interaktif Snaprint untuk mengatur ukuran (meter/cm), memilih spesifikasi bahan, dan memotong diskon pemesanan secara instan!
        </p>
        <a href="<?php echo esc_url( home_url( '/kalkulator' ) ); ?>" class="btn btn-azure btn-lg">
          <i class="fa-solid fa-calculator"></i> Buka Kalkulator Cetak Online
        </a>
      </div>
    </div>
  </section>

<?php
get_footer();
