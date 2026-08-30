<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Snaprint
 * @version 1.0.0
 */

get_header();
?>

  <!-- 404 Error Section -->
  <section class="section" style="min-height:60vh; display:flex; align-items:center; text-align:center;">
    <div class="container" style="max-width:650px;">
      <div style="background:var(--bg-card); border-radius:var(--radius-lg); padding:3.5rem 2rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow);">
        <div style="font-size:4.5rem; font-weight:900; color:var(--primary-blue); font-family:var(--font-heading); line-height:1; margin-bottom:1rem;">404</div>
        <h2 style="font-size:1.85rem; margin-bottom:0.75rem;">Halaman Tidak Ditemukan</h2>
        <p style="color:var(--text-muted); font-size:1rem; margin-bottom:2rem;">
          Mohon maaf, tautan yang Anda tuju tidak tersedia atau telah dipindahkan. Silakan kembali ke beranda atau gunakan kalkulator cetak kami.
        </p>
        <div style="display:flex; justify-content:center; gap:1rem; flex-wrap:wrap;">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary btn-lg">
            <i class="fa-solid fa-house"></i> Kembali ke Beranda
          </a>
          <a href="<?php echo esc_url( home_url( '/kalkulator' ) ); ?>" class="btn btn-azure btn-lg">
            <i class="fa-solid fa-calculator"></i> Kalkulator Cetak
          </a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
