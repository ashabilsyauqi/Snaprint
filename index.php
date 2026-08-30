<?php
/**
 * The main template file
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
        <span>Blog & Artikel</span>
      </div>
      <div class="page-banner-content">
        <h1><?php esc_html_e( 'Informasi & Berita Terbaru', 'snaprint' ); ?></h1>
        <p><?php esc_html_e( 'Tips desain grafis, panduan percetakan, dan perkembangan teknologi digital printing.', 'snaprint' ); ?></p>
      </div>
    </div>
  </section>

  <!-- Blog / Post Index Section -->
  <section class="section">
    <div class="container">
      <?php if ( have_posts() ) : ?>
        <div class="grid-3">
          <?php
          while ( have_posts() ) :
              the_post();
              ?>
              <div class="product-card">
                <?php if ( has_post_thumbnail() ) : ?>
                  <div class="product-img-wrapper">
                    <?php the_post_thumbnail( 'medium_large' ); ?>
                  </div>
                <?php endif; ?>
                <div class="product-body">
                  <span class="product-category-tag"><?php echo get_the_date(); ?></span>
                  <h3 class="product-title" style="margin-top:0.5rem;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <p class="product-desc"><?php echo wp_trim_words( get_the_excerpt(), 18 ); ?></p>
                  <a href="<?php the_permalink(); ?>" class="service-link" style="margin-top:1rem; display:inline-block;">
                    <?php esc_html_e( 'Baca Selengkapnya', 'snaprint' ); ?> <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
              <?php
          endwhile;
          ?>
        </div>

        <div style="margin-top:2.5rem; text-align:center;">
          <?php the_posts_pagination(); ?>
        </div>
      <?php else : ?>
        <p style="text-align:center; color:var(--text-muted); font-size:1.1rem;">
          <?php esc_html_e( 'Belum ada artikel yang dipublikasikan.', 'snaprint' ); ?>
        </p>
      <?php endif; ?>
    </div>
  </section>

<?php
get_footer();
