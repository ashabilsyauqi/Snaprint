<?php
/**
 * The template for displaying all single posts
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
        <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">Blog</a>
        <span class="breadcrumb-separator">/</span>
        <span><?php the_title(); ?></span>
      </div>
      <div class="page-banner-content">
        <h1><?php the_title(); ?></h1>
        <p><i class="fa-solid fa-calendar"></i> <?php echo get_the_date(); ?> • <i class="fa-solid fa-user"></i> <?php the_author(); ?></p>
      </div>
    </div>
  </section>

  <!-- Post Content Section -->
  <section class="section">
    <div class="container" style="max-width:850px;">
      <article style="background:var(--bg-card); border-radius:var(--radius-lg); padding:2.5rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow); line-height:1.8;">
        <?php if ( has_post_thumbnail() ) : ?>
          <div style="margin-bottom:2rem; border-radius:var(--radius-md); overflow:hidden;">
            <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; height:auto;' ) ); ?>
          </div>
        <?php endif; ?>

        <div class="entry-content">
          <?php
          while ( have_posts() ) :
              the_post();
              the_content();
          endwhile;
          ?>
        </div>
      </article>
    </div>
  </section>

<?php
get_footer();
