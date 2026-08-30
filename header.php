<?php
/**
 * The header for Snaprint Digital Printing Theme
 *
 * @package Snaprint
 * @version 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Top Announcement Ticker Bar -->
  <div class="announcement-bar">
    <div class="announcement-content">
      <span class="announcement-tag"><?php esc_html_e( 'PELUANG KEMITRAAN', 'snaprint' ); ?></span>
      <span>
        <i class="fa-solid fa-briefcase"></i> 
        <?php esc_html_e( 'Buka Franchise Digital Printing Snaprint di Kota Anda! Dapatkan ROI Cepat & Konsultasi Gratis via WA: ', 'snaprint' ); ?>
        <strong>0877-8104-7453</strong>
      </span>
    </div>
  </div>

  <!-- Main Multi-Page Header Navbar -->
  <header class="navbar">
    <div class="container">
      <?php if ( has_custom_logo() ) : ?>
        <div class="custom-logo-wrap"><?php the_custom_logo(); ?></div>
      <?php else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
          <div class="logo-badge">S</div>
          <div class="logo-text">
            <span class="logo-main">SNAPRINT</span>
            <span class="logo-sub">DIGITAL PRINTING</span>
          </div>
        </a>
      <?php endif; ?>

      <nav>
        <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-menu',
                'menu_id'        => 'nav-menu',
                'fallback_cb'    => 'snaprint_fallback_menu',
                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ) );
        } else {
            snaprint_fallback_menu();
        }
        ?>
      </nav>

      <div class="nav-actions">
        <a href="https://wa.me/6281311933172?text=Halo%20Snaprint!%20Saya%20mau%20tanya%20jasa%20cetak" target="_blank" class="btn btn-whatsapp btn-sm">
          <i class="fa-brands fa-whatsapp"></i> Chat WA
        </a>
        <button type="button" class="mobile-nav-toggle" id="mobile-toggle" aria-label="<?php esc_attr_e( 'Menu Mobile', 'snaprint' ); ?>">☰</button>
      </div>
    </div>
  </header>
