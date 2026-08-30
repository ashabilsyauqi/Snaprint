<?php
/**
 * Template Name: Galeri Toko
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
        <span>Galeri Toko</span>
      </div>
      <div class="page-banner-content">
        <h1>Galeri Outlet & Workshop Snaprint</h1>
        <p>Lihat secara nyata fasad outlet fisik kami, kebersihan area workshop, serta kelengkapan armada mesin digital printing presisi kami di Bekasi.</p>
      </div>
    </div>
  </section>

  <!-- Photo Gallery Grid with Modal Zoom -->
  <section class="section">
    <div class="container">
      <div class="grid-3">
        <div class="gallery-item" data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" data-title="Tampak Depan Outlet Snaprint Tambun Selatan Bekasi">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" alt="Fasad Snaprint Bekasi">
          <div class="gallery-overlay">
            <div>
              <strong style="font-size:1.05rem; display:block;">Fasad Toko Depan</strong>
              <small><i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk Memperbesar Gambar</small>
            </div>
          </div>
        </div>

        <div class="gallery-item" data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-facade.png' ); ?>" data-title="Spanduk Banner Layanan Percetakan Snaprint">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-facade.png' ); ?>" alt="Spanduk Depan Snaprint">
          <div class="gallery-overlay">
            <div>
              <strong style="font-size:1.05rem; display:block;">Spanduk & Banner Outlet</strong>
              <small><i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk Memperbesar Gambar</small>
            </div>
          </div>
        </div>

        <div class="gallery-item" data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-interior.png' ); ?>" data-title="Area Counter Kasir & Ruang Mesin Cetak Digital Offset">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-interior.png' ); ?>" alt="Interior Toko Snaprint">
          <div class="gallery-overlay">
            <div>
              <strong style="font-size:1.05rem; display:block;">Interior & Area Kasir</strong>
              <small><i class="fa-solid fa-magnifying-glass-plus"></i> Klik untuk Memperbesar Gambar</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
