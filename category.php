<?php
/**
 * The template for displaying Category Archive pages
 *
 * @package Snaprint
 * @version 1.0.0
 */

get_header();
$current_cat = get_queried_object();
?>

  <!-- Page Banner with Yoast SEO Breadcrumbs -->
  <section class="page-banner">
    <div class="container">
      <div class="breadcrumb">
        <?php snaprint_breadcrumbs(); ?>
      </div>
      <div class="page-banner-content" style="text-align:center; max-width:850px; margin:0 auto;">
        <div class="badge-pill azure" style="margin-bottom:0.8rem;">Kategori Artikel</div>
        <h1 style="font-size:clamp(1.8rem, 3.5vw, 2.5rem);"><?php single_cat_title(); ?></h1>
        <?php if ( category_description() ) : ?>
          <div class="archive-description" style="font-size:1.05rem; color:var(--text-muted); margin-top:0.75rem;">
            <?php echo category_description(); ?>
          </div>
        <?php else : ?>
          <p style="font-size:1.05rem; color:var(--text-muted); margin-top:0.75rem;">
            Kumpulan artikel dan panduan cetak khusus seputar <?php single_cat_title(); ?>.
          </p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- Categories Filter Bar -->
  <div style="background:var(--bg-card); border-bottom:1px solid var(--border-color); padding:1rem 0;">
    <div class="container" style="display:flex; align-items:center; justify-content:center; flex-wrap:wrap; gap:0.6rem;">
      <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn-filter">
        Semua Topik
      </a>
      <?php
      $categories = get_categories( array(
          'orderby' => 'count',
          'order'   => 'DESC',
          'number'  => 6,
      ) );
      foreach ( $categories as $cat ) {
          $is_active = ( $current_cat && $current_cat->term_id == $cat->term_id ) ? 'active' : '';
          echo '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '" class="btn-filter ' . $is_active . '">' . esc_html( $cat->name ) . '</a>';
      }
      ?>
    </div>
  </div>

  <!-- Content Section -->
  <section class="section">
    <div class="container">
      <?php if ( have_posts() ) : ?>
        <div class="grid-3">
          <?php
          while ( have_posts() ) :
              the_post();
              $categories = get_the_category();
              $cat_name = ! empty( $categories ) ? $categories[0]->name : 'Percetakan';
              $reading_time = snaprint_reading_time( get_the_ID() );
              ?>
              <article class="product-card scroll-reveal-up" style="display:flex; flex-direction:column; height:100%;">
                <div class="product-img-wrapper" style="height:210px; overflow:hidden; position:relative; background:var(--navy-dark);">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium_large', array( 'style' => 'width:100%; height:100%; object-fit:cover; transition:transform 0.4s ease;' ) ); ?>
                  <?php else : ?>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" alt="<?php the_title_attribute(); ?>" style="width:100%; height:100%; object-fit:cover;">
                  <?php endif; ?>
                  <span class="product-badge" style="position:absolute; top:12px; left:12px; margin:0;"><?php echo esc_html( $cat_name ); ?></span>
                </div>

                <div class="product-body" style="display:flex; flex-direction:column; flex:1; padding:1.5rem;">
                  <div style="display:flex; align-items:center; gap:0.75rem; font-size:0.82rem; color:var(--text-muted); margin-bottom:0.75rem;">
                    <span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?></span>
                    <span>•</span>
                    <span><i class="fa-regular fa-clock"></i> <?php echo esc_html( $reading_time ); ?> mnt baca</span>
                  </div>

                  <h3 class="product-title" style="font-size:1.15rem; line-height:1.4; margin-bottom:0.75rem; flex-shrink:0;">
                    <a href="<?php the_permalink(); ?>" style="color:inherit; text-decoration:none; transition:color 0.2s;"><?php the_title(); ?></a>
                  </h3>

                  <p class="product-desc" style="font-size:0.9rem; line-height:1.6; color:var(--text-muted); margin-bottom:1.25rem; flex-grow:1;">
                    <?php echo wp_trim_words( get_the_excerpt(), 18 ); ?>
                  </p>

                  <div class="card-action-bar">
                    <a href="<?php the_permalink(); ?>" class="btn-read-more">
                      Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </article>
              <?php
          endwhile;
          ?>
        </div>

        <div class="posts-pagination" style="margin-top:3.5rem; text-align:center;">
          <?php
          the_posts_pagination( array(
              'mid_size'  => 2,
              'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
              'next_text' => '<i class="fa-solid fa-chevron-right"></i>',
          ) );
          ?>
        </div>
      <?php else : ?>
        <div style="text-align:center; padding:4rem 1rem;">
          <i class="fa-regular fa-folder-open" style="font-size:3.5rem; color:var(--primary-blue); opacity:0.6; margin-bottom:1rem;"></i>
          <h3 style="font-size:1.35rem; margin-bottom:0.5rem;"><?php esc_html_e( 'Belum Ada Artikel dalam Kategori Ini', 'snaprint' ); ?></h3>
          <p style="color:var(--text-muted); max-width:480px; margin:0 auto 1.5rem auto;">
            <?php esc_html_e( 'Silakan jelajahi kategori lainnya atau kembali ke beranda blog.', 'snaprint' ); ?>
          </p>
          <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-primary">Lihat Semua Artikel</a>
        </div>
      <?php endif; ?>
    </div>
  </section>

<?php
get_footer();
