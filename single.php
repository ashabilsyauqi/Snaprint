<?php
/**
 * The template for displaying all single posts
 *
 * @package Snaprint
 * @version 1.0.0
 */

get_header();

while ( have_posts() ) :
    the_post();
    $categories = get_the_category();
    $primary_cat = ! empty( $categories ) ? $categories[0] : null;
    $reading_time = snaprint_reading_time( get_the_ID() );
    $author_id = get_the_author_meta( 'ID' );
    $author_name = get_the_author();
    $author_desc = get_the_author_meta( 'description' );
    if ( empty( $author_desc ) ) {
        $author_desc = 'Tim percetakan dan spesialis desain grafis di Snaprint Digital Printing Bekasi.';
    }
    $post_url = urlencode( get_permalink() );
    $post_title = urlencode( get_the_title() );
    ?>

  <!-- Page Banner with Yoast SEO Breadcrumbs -->
  <section class="page-banner">
    <div class="container">
      <div class="breadcrumb">
        <?php snaprint_breadcrumbs(); ?>
      </div>
      <div class="page-banner-content" style="max-width:900px; margin:0 auto; text-align:center;">
        <?php if ( $primary_cat ) : ?>
          <a href="<?php echo esc_url( get_category_link( $primary_cat->term_id ) ); ?>" class="product-badge" style="display:inline-block; margin-bottom:1rem; text-decoration:none;">
            <?php echo esc_html( $primary_cat->name ); ?>
          </a>
        <?php endif; ?>
        <h1 style="font-size: clamp(1.75rem, 3.5vw, 2.5rem); line-height: 1.3; text-wrap: balance; margin-bottom:1rem;">
          <?php the_title(); ?>
        </h1>
        <div class="post-meta-header" style="display:flex; align-items:center; justify-content:center; flex-wrap:wrap; gap:1rem; font-size:0.9rem; color:var(--text-muted);">
          <span><i class="fa-solid fa-user-pen"></i> <?php echo esc_html( $author_name ); ?></span>
          <span>•</span>
          <span><i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?></span>
          <?php if ( get_the_modified_time( 'U' ) > get_the_time( 'U' ) + 86400 ) : ?>
            <span>•</span>
            <span><i class="fa-solid fa-arrows-rotate"></i> Diperbarui: <?php echo get_the_modified_date(); ?></span>
          <?php endif; ?>
          <span>•</span>
          <span><i class="fa-regular fa-clock"></i> <?php echo esc_html( $reading_time ); ?> menit baca</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Post Main Content Section -->
  <section class="section">
    <div class="container" style="max-width:880px;">
      <article id="post-<?php the_ID(); ?>" <?php post_class( 'single-article-card' ); ?> style="background:var(--bg-card); border-radius:var(--radius-lg); padding:2.5rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow);">
        
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-featured-image" style="margin-bottom:2.25rem; border-radius:var(--radius-md); overflow:hidden; box-shadow:0 4px 14px rgba(0,0,0,0.06);">
            <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; height:auto; display:block; object-fit:cover;' ) ); ?>
            <?php if ( get_the_post_thumbnail_caption() ) : ?>
              <p class="featured-img-caption" style="font-size:0.85rem; color:var(--text-muted); text-align:center; padding:0.6rem 1rem; background:rgba(0,0,0,0.02); margin:0;">
                <?php the_post_thumbnail_caption(); ?>
              </p>
            <?php endif; ?>
          </div>
        <?php endif; ?>

        <!-- Content Body -->
        <div class="entry-content typography-article">
          <?php
          the_content();

          wp_link_pages( array(
              'before' => '<div class="page-links" style="margin-top:2rem; padding:1rem 0; border-top:1px solid var(--border-color); font-weight:600;">' . esc_html__( 'Halaman:', 'snaprint' ),
              'after'  => '</div>',
          ) );
          ?>
        </div>

        <!-- In-Article WhatsApp CTA Box -->
        <div class="article-wa-cta" style="margin-top:2.5rem; margin-bottom:2rem; padding:1.75rem; border-radius:var(--radius-md); background:linear-gradient(135deg, rgba(15, 23, 42, 0.03) 0%, rgba(0, 114, 255, 0.06) 100%); border:1px solid var(--primary-blue-light); display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:1.25rem;">
          <div>
            <h4 style="margin:0 0 0.4rem 0; font-size:1.15rem; color:var(--navy-dark);"><i class="fa-brands fa-whatsapp" style="color:var(--friendly-emerald);"></i> Butuh Konsultasi File atau Estimasi Biaya Cetak?</h4>
            <p style="margin:0; font-size:0.9rem; color:var(--text-muted);">Kirim file desain Anda ke WhatsApp Snaprint untuk pengecekan resolusi & layout gratis!</p>
          </div>
          <a href="https://wa.me/6281311933172?text=Halo%20Snaprint,%20saya%20baca%20artikel%20tentang%20<?php echo $post_title; ?>%20dan%20mau%20konsultasi%20cetak." target="_blank" class="btn btn-whatsapp" style="white-space:nowrap;">
            <i class="fa-brands fa-whatsapp"></i> Chat WhatsApp CS
          </a>
        </div>

        <!-- Post Tags & Share Buttons -->
        <div class="post-footer-meta" style="margin-top:2.5rem; padding-top:1.5rem; border-top:1px solid var(--border-color); display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:1.25rem;">
          <div class="post-tags" style="display:flex; align-items:center; flex-wrap:wrap; gap:0.5rem;">
            <span style="font-size:0.9rem; font-weight:700; color:var(--text-muted);"><i class="fa-solid fa-tags"></i> Tag:</span>
            <?php
            $tags = get_the_tags();
            if ( $tags ) :
                foreach ( $tags as $tag ) :
                    echo '<a href="' . esc_url( get_tag_link( $tag->term_id ) ) . '" class="tag-pill">' . esc_html( $tag->name ) . '</a>';
                endforeach;
            else :
                echo '<span style="font-size:0.85rem; color:var(--text-muted);">Percetakan Digital, Snaprint</span>';
            endif;
            ?>
          </div>

          <!-- Social Share -->
          <div class="post-share-buttons" style="display:flex; align-items:center; gap:0.6rem;">
            <span style="font-size:0.88rem; font-weight:600; color:var(--text-muted);">Bagikan:</span>
            <a href="https://api.whatsapp.com/send?text=<?php echo $post_title . '%20' . $post_url; ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-wa" title="Bagikan ke WhatsApp">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-fb" title="Bagikan ke Facebook">
              <i class="fa-brands fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/intent/tweet?text=<?php echo $post_title; ?>&url=<?php echo $post_url; ?>" target="_blank" rel="noopener noreferrer" class="btn-share btn-share-tw" title="Bagikan ke X/Twitter">
              <i class="fa-brands fa-x-twitter"></i>
            </a>
            <button type="button" class="btn-share btn-share-copy" onclick="navigator.clipboard.writeText(window.location.href); alert('Tautan artikel berhasil disalin!');" title="Salin Tautan">
              <i class="fa-solid fa-link"></i>
            </button>
          </div>
        </div>

        <!-- Author Bio Box (E-E-A-T Google Standard) -->
        <div class="author-bio-box" style="margin-top:2.5rem; padding:1.75rem; border-radius:var(--radius-md); background:var(--bg-card); border:1px solid var(--border-color); display:flex; gap:1.25rem; align-items:flex-start;">
          <div class="author-avatar" style="flex-shrink:0;">
            <?php echo get_avatar( $author_id, 72, '', $author_name, array( 'style' => 'border-radius:50%; display:block;' ) ); ?>
          </div>
          <div class="author-details">
            <span style="font-size:0.75rem; text-transform:uppercase; letter-spacing:0.08em; font-weight:700; color:var(--primary-blue);">Ditulis Oleh</span>
            <h4 style="margin:0.2rem 0 0.5rem 0; font-size:1.15rem; color:var(--navy-dark);"><?php echo esc_html( $author_name ); ?></h4>
            <p style="margin:0; font-size:0.9rem; line-height:1.6; color:var(--text-muted);"><?php echo esc_html( $author_desc ); ?></p>
          </div>
        </div>

        <!-- Prev / Next Post Navigation -->
        <nav class="post-prev-next-nav" style="margin-top:2.5rem; padding-top:1.5rem; border-top:1px solid var(--border-color); display:grid; grid-template-columns:repeat(auto-fit, minmax(240px, 1fr)); gap:1.25rem;">
          <?php
          $prev_post = get_previous_post();
          $next_post = get_next_post();
          ?>
          <div class="nav-prev-card" style="<?php echo empty( $prev_post ) ? 'visibility:hidden;' : ''; ?>">
            <?php if ( ! empty( $prev_post ) ) : ?>
              <a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" style="text-decoration:none; display:block; padding:1rem; border-radius:var(--radius-md); border:1px solid var(--border-color); background:var(--bg-card); transition:all 0.2s;">
                <span style="font-size:0.8rem; color:var(--text-muted); display:flex; align-items:center; gap:0.4rem;"><i class="fa-solid fa-arrow-left"></i> Artikel Sebelumnya</span>
                <strong style="display:block; margin-top:0.3rem; font-size:0.95rem; color:var(--navy-dark); line-height:1.4;"><?php echo esc_html( wp_trim_words( $prev_post->post_title, 8 ) ); ?></strong>
              </a>
            <?php endif; ?>
          </div>
          <div class="nav-next-card" style="text-align:right; <?php echo empty( $next_post ) ? 'visibility:hidden;' : ''; ?>">
            <?php if ( ! empty( $next_post ) ) : ?>
              <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" style="text-decoration:none; display:block; padding:1rem; border-radius:var(--radius-md); border:1px solid var(--border-color); background:var(--bg-card); transition:all 0.2s;">
                <span style="font-size:0.8rem; color:var(--text-muted); display:flex; align-items:center; justify-content:flex-end; gap:0.4rem;">Artikel Selanjutnya <i class="fa-solid fa-arrow-right"></i></span>
                <strong style="display:block; margin-top:0.3rem; font-size:0.95rem; color:var(--navy-dark); line-height:1.4;"><?php echo esc_html( wp_trim_words( $next_post->post_title, 8 ) ); ?></strong>
              </a>
            <?php endif; ?>
          </div>
        </nav>

      </article>

      <!-- Related Posts Section (SEO Internal Linking) -->
      <?php
      $related_args = array(
          'posts_per_page'      => 3,
          'post__not_in'        => array( get_the_ID() ),
          'ignore_sticky_posts' => 1,
      );
      if ( $primary_cat ) {
          $related_args['cat'] = $primary_cat->term_id;
      }
      $related_query = new WP_Query( $related_args );

      if ( $related_query->have_posts() ) :
          ?>
          <div class="related-posts-section" style="margin-top:3.5rem;">
            <h3 style="font-size:1.4rem; margin-bottom:1.5rem; display:flex; align-items:center; gap:0.5rem;">
              <span class="blue-gradient">Artikel Terkait</span> Pilihan
            </h3>
            <div class="grid-3">
              <?php
              while ( $related_query->have_posts() ) :
                  $related_query->the_post();
                  ?>
                  <div class="product-card" style="display:flex; flex-direction:column; height:100%;">
                    <div class="product-img-wrapper" style="height:170px; overflow:hidden; position:relative;">
                      <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'medium', array( 'style' => 'width:100%; height:100%; object-fit:cover;' ) ); ?>
                      <?php else : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-facade.png' ); ?>" alt="<?php the_title_attribute(); ?>" style="width:100%; height:100%; object-fit:cover;">
                      <?php endif; ?>
                    </div>
                    <div class="product-body" style="padding:1.25rem; display:flex; flex-direction:column; flex:1;">
                      <span class="product-category-tag" style="font-size:0.75rem;"><?php echo get_the_date(); ?></span>
                      <h4 class="product-title" style="font-size:1rem; line-height:1.4; margin:0.4rem 0 0.8rem 0; flex-grow:1;">
                        <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 9 ); ?></a>
                      </h4>
                      <div class="card-action-bar">
                        <a href="<?php the_permalink(); ?>" class="btn-read-more">
                          Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                  <?php
              endwhile;
              wp_reset_postdata();
              ?>
            </div>
          </div>
      <?php endif; ?>

      <!-- Comments Section -->
      <?php
      if ( comments_open() || get_comments_number() ) :
          comments_template();
      endif;
      ?>

    </div>
  </section>

<?php
endwhile;

get_footer();
