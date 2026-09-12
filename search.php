<?php
/**
 * The template for displaying search results pages
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
        <div class="badge-pill azure" style="margin-bottom:0.8rem;">Hasil Pencarian</div>
        <h1 style="font-size:clamp(1.8rem, 3.5vw, 2.5rem);">
          <?php printf( esc_html__( 'Pencarian: "%s"', 'snaprint' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?>
        </h1>
        <p style="font-size:1.05rem; color:var(--text-muted); margin-top:0.75rem;">
          Ditemukan <?php echo (int) $wp_query->found_posts; ?> artikel yang sesuai dengan kata kunci Anda.
        </p>

        <!-- Search Bar -->
        <div style="max-width:550px; margin:1.75rem auto 0 auto;">
          <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display:flex; gap:0.5rem; background:var(--bg-card); padding:0.4rem; border-radius:var(--radius-full); border:1px solid var(--border-color); box-shadow:var(--card-shadow);">
            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Cari topik cetak lain...', 'placeholder', 'snaprint' ); ?>" value="<?php echo get_search_query(); ?>" name="s" style="flex:1; border:none; background:transparent; padding:0.6rem 1.25rem; font-size:0.95rem; color:var(--text-color); outline:none;" />
            <button type="submit" class="btn btn-primary btn-sm" style="border-radius:var(--radius-full); padding:0.6rem 1.4rem;">
              <i class="fa-solid fa-magnifying-glass"></i> Cari
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Search Results Section -->
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

                  <div style="margin-top:auto; padding-top:0.75rem; border-top:1px solid var(--border-color);">
                    <a href="<?php the_permalink(); ?>" class="service-link" style="font-weight:700; color:var(--primary-blue); display:inline-flex; align-items:center; gap:0.4rem;">
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
          <i class="fa-solid fa-magnifying-glass" style="font-size:3.5rem; color:var(--primary-blue); opacity:0.6; margin-bottom:1rem;"></i>
          <h3 style="font-size:1.35rem; margin-bottom:0.5rem;"><?php esc_html_e( 'Tidak Ada Artikel yang Ditemukan', 'snaprint' ); ?></h3>
          <p style="color:var(--text-muted); max-width:480px; margin:0 auto 1.5rem auto;">
            <?php esc_html_e( 'Maaf, tidak ada artikel yang cocok dengan kata kunci tersebut. Coba gunakan kata kunci umum seperti "banner", "stiker", atau "kartu nama".', 'snaprint' ); ?>
          </p>
          <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-primary">Lihat Semua Artikel</a>
        </div>
      <?php endif; ?>
    </div>
  </section>

<?php
get_footer();
