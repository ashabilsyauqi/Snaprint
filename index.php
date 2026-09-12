<?php
/**
 * The main template file (Blog Archive)
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
        <?php snaprint_breadcrumbs(); ?>
      </div>
      <div class="page-banner-content" style="text-align:center; max-width:850px; margin:0 auto;">
        <div class="badge-pill azure" style="margin-bottom:0.8rem;">Wawasan Percetakan</div>
        <h1 style="font-size:clamp(1.8rem, 3.5vw, 2.5rem);"><?php esc_html_e( 'Tips, Berita & Panduan Cetak', 'snaprint' ); ?></h1>
        <p style="font-size:1.05rem; color:var(--text-muted); margin-bottom:1.75rem;">
          <?php esc_html_e( 'Temukan panduan pemilihan bahan, tips desain siap cetak, dan strategi branding visual untuk bisnis Anda.', 'snaprint' ); ?>
        </p>

        <!-- Search Bar in Hero -->
        <div style="max-width:550px; margin:0 auto;">
          <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:flex; gap:0.5rem; background:var(--bg-card); padding:0.4rem; border-radius:var(--radius-full); border:1px solid var(--border-color); box-shadow:var(--card-shadow);">
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Cari topik cetak, misal: banner, stiker...', 'placeholder', 'snaprint' ); ?>" value="<?php echo get_search_query(); ?>" name="s" style="flex:1; border:none; background:transparent; padding:0.6rem 1.25rem; font-size:0.95rem; color:var(--text-color); outline:none;" />
            <button type="submit" class="btn btn-primary btn-sm" style="border-radius:var(--radius-full); padding:0.6rem 1.4rem;">
              <i class="fa-solid fa-magnifying-glass"></i> Cari
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Blog Categories Filter Bar -->
  <div style="background:var(--bg-card); border-bottom:1px solid var(--border-color); padding:1rem 0;">
    <div class="container" style="display:flex; align-items:center; justify-content:center; flex-wrap:wrap; gap:0.6rem;">
      <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn-filter <?php echo ( ! is_category() ) ? 'active' : ''; ?>">
        Semua Topik
      </a>
      <?php
      $categories = get_categories( array(
          'orderby' => 'count',
          'order'   => 'DESC',
          'number'  => 6,
      ) );
      foreach ( $categories as $cat ) {
          $is_active = is_category( $cat->term_id ) ? 'active' : '';
          echo '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '" class="btn-filter ' . $is_active . '">' . esc_html( $cat->name ) . '</a>';
      }
      ?>
    </div>
  </div>

  <!-- Blog / Post Index Section -->
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
          <i class="fa-regular fa-newspaper" style="font-size:3.5rem; color:var(--primary-blue); opacity:0.6; margin-bottom:1rem;"></i>
          <h3 style="font-size:1.35rem; margin-bottom:0.5rem;"><?php esc_html_e( 'Belum Ada Artikel yang Dipublikasikan', 'snaprint' ); ?></h3>
          <p style="color:var(--text-muted); max-width:480px; margin:0 auto 1.5rem auto;">
            <?php esc_html_e( 'Kunjungi kami kembali dalam waktu dekat untuk update panduan dan berita terbaru percetakan.', 'snaprint' ); ?>
          </p>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Kembali ke Beranda</a>
        </div>
      <?php endif; ?>
    </div>
  </section>

<?php
get_footer();

