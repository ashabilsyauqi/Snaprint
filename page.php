<?php
/**
 * The template for displaying all pages
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
        <span><?php the_title(); ?></span>
      </div>
      <div class="page-banner-content">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </section>

  <!-- Default Page Content -->
  <section class="section">
    <div class="container" style="max-width:900px;">
      <div style="background:var(--bg-card); border-radius:var(--radius-lg); padding:2.5rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow); line-height:1.8;">
        <?php
        while ( have_posts() ) :
            the_post();
            the_content();
        endwhile;
        ?>
      </div>
    </div>
  </section>

<?php
get_footer();
