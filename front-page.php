<?php
/**
 * Template Name: Front Page (Beranda)
 *
 * @package Snaprint
 * @version 1.0.0
 */

get_header();
?>

  <!-- Hero Section - Dominant Royal Blue Brand Canvas -->
  <section class="hero-section">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content scroll-reveal-left">
          <div class="badge-pill friendly">
            <i class="fa-solid fa-wand-magic-sparkles"></i> Friendly Price • High Precision Quality
          </div>
          <h1 class="hero-title">
            Cetak Media Bisnis <span class="blue-gradient">Cepat, Terjangkau & Presisi</span>
          </h1>
          <p class="hero-subtitle">
            <em>"Dari Desain Sampai Cetak, Semua Bisa Online!"</em> Snaprint Bekasi melayani cetak spanduk, stiker custom, kartu nama, lanyard, hingga souvenir untuk UMKM, perusahaan, event, dan umum dengan hasil warna tajam & ramah di kantong.
          </p>

          <div class="hero-badges">
            <div class="hero-badge-item">
              <span style="color:#00D2FF;"><i class="fa-solid fa-bolt"></i></span> Cetak Ekspres 1 Hari
            </div>
            <div class="hero-badge-item">
              <span style="color:#00D2FF;"><i class="fa-solid fa-palette"></i></span> Gratis Cek Resolusi File
            </div>
            <div class="hero-badge-item">
              <span style="color:var(--friendly-emerald);"><i class="fa-solid fa-briefcase"></i></span> Peluang Franchise & Kemitraan
            </div>
          </div>

          <div class="hero-buttons">
            <a href="<?php echo esc_url( home_url( '/kalkulator' ) ); ?>" class="btn btn-primary btn-lg">
              <i class="fa-solid fa-calculator"></i> Kalkulator Cetak Online
            </a>
            <a href="<?php echo esc_url( home_url( '/franchise' ) ); ?>" class="btn btn-hero-outline btn-lg">
              <i class="fa-solid fa-briefcase"></i> Info Franchise Bisnis
            </a>
          </div>
        </div>

        <div class="hero-visual scroll-reveal-right">
          <div class="store-main-card">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" alt="Fasad Toko Snaprint Digital Printing Bekasi">
            <div class="store-card-overlay">
              <h4>Snaprint Digital Printing Outlet</h4>
              <p><i class="fa-solid fa-location-dot"></i> Jl. Mustika Jaya, Lambang Sari, Tambun Selatan, Bekasi</p>
            </div>
          </div>

          <div class="floating-card-1 floating-anim">
            <div class="floating-icon"><i class="fa-solid fa-print"></i></div>
            <div>
              <strong style="font-size:0.9rem; display:block;">Mesin High-Resolution</strong>
              <small style="color:#94A3B8;">Akurasi Warna High Precision</small>
            </div>
          </div>

          <div class="floating-card-2 floating-anim" style="animation-delay: 2s;">
            <div class="floating-icon"><i class="fa-solid fa-handshake"></i></div>
            <div>
              <strong style="font-size:0.9rem; display:block;">Peluang Franchise</strong>
              <small style="color:#94A3B8;">WA CS: 0877-8104-7453</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust Stats Bar -->
  <section class="stats-bar scroll-reveal">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item scroll-reveal-zoom delay-1">
          <h3>10.000+</h3>
          <p>Pesanan Cetak Selesai</p>
        </div>
        <div class="stat-item scroll-reveal-zoom delay-2">
          <h3>500+</h3>
          <p>Mitra Bisnis & UMKM</p>
        </div>
        <div class="stat-item scroll-reveal-zoom delay-3">
          <h3>100%</h3>
          <p>Garansi Hasil Warna</p>
        </div>
        <div class="stat-item scroll-reveal-zoom delay-4">
          <h3>&lt; 24 Jam</h3>
          <p>Pengerjaan Ekspres Available</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Layanan Utama Highlight Section -->
  <section class="section">
    <div class="container">
      <div class="section-header scroll-reveal">
        <div class="badge-pill">Layanan Unggulan</div>
        <h2 class="section-title">Solusi Media Cetak <span class="blue-gradient">Lengkap</span></h2>
        <p class="section-desc">Pilihan cetakan terlengkap untuk kebutuhan promosi outdoor, stasioneri kantor, branding produk, hingga souvenir event.</p>
      </div>

      <div class="grid-3">
        <div class="service-feature-card scroll-reveal-zoom delay-1">
          <div class="service-icon"><i class="fa-solid fa-palette"></i></div>
          <h3>Banner & Display Promosi</h3>
          <p>Cetak Spanduk Flexi outdoor/indoor, X-Banner, Roll-Up Banner pameran dengan bahan tahan cuaca & warna anti pudar.</p>
          <a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="service-link">Lihat Detail Banner <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="service-feature-card scroll-reveal-zoom delay-2">
          <div class="service-icon"><i class="fa-solid fa-tag"></i></div>
          <h3>Stiker Custom & Label Product</h3>
          <p>Stiker Vinyl waterproof & Chromo label kemasan makanan/bebas cut (Kiss-Cut & Die-Cut) daya rekat kuat.</p>
          <a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="service-link">Lihat Detail Stiker <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="service-feature-card scroll-reveal-zoom delay-3">
          <div class="service-icon"><i class="fa-solid fa-id-card"></i></div>
          <h3>Stationeries & Lanyard Office</h3>
          <p>Kartu nama eksklusif, Lanyard ID card 2 sisi, stempel flash otomatis, brosur bisnis, & nota/faktur custom.</p>
          <a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="service-link">Lihat Detail Stationeries <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>

      <div style="text-align:center; margin-top:2.5rem;" class="scroll-reveal">
        <a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="btn btn-primary btn-lg">Lihat Semua 9+ Produk Media Cetak <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- Franchise Hook Banner Section -->
  <section class="section" style="background:linear-gradient(135deg, #040914 0%, #0A192F 40%, #0F52BA 100%); color:#FFFFFF; border-y:2px solid rgba(0, 210, 255, 0.25);">
    <div class="container">
      <div class="grid-2" style="align-items:center;">
        <div class="scroll-reveal-left">
          <div class="badge-pill friendly" style="background:rgba(0, 210, 255, 0.2); color:#00D2FF; border-color:rgba(0, 210, 255, 0.4);">
            <i class="fa-solid fa-handshake"></i> Opportunities & Franchise
          </div>
          <h2 style="color:#FFFFFF; font-size:2.5rem; font-family:var(--font-heading); margin-bottom:1rem;">
            Ingin Punya Bisnis Percetakan Sendiri Di Kota Anda?
          </h2>
          <p style="color:#CBD5E1; font-size:1.1rem; margin-bottom:1.5rem; line-height:1.65;">
            Bergabunglah menjadi bagian dari jaringan <strong>Franchise Snaprint Digital Printing</strong>. Dapatkan lisensi platform cetak online, pasokan mesin presisi, training SDM, & proyeksi ROI cepat (12–18 Bulan).
          </p>
          <div style="display:flex; gap:1rem; flex-wrap:wrap;">
            <button type="button" class="btn btn-azure btn-lg trigger-franchise-popup">
              <i class="fa-solid fa-paper-plane"></i> Minta Proposal Franchise WA
            </button>
            <a href="<?php echo esc_url( home_url( '/franchise' ) ); ?>" class="btn btn-hero-outline btn-lg">
              <i class="fa-solid fa-list-check"></i> Detail Paket Kemitraan
            </a>
          </div>
        </div>

        <div class="scroll-reveal-right" style="background:rgba(255, 255, 255, 0.06); backdrop-filter:blur(12px); border:1.5px solid rgba(0, 210, 255, 0.3); border-radius:var(--radius-lg); padding:2.25rem;">
          <h3 style="color:#FFFFFF; font-size:1.4rem; margin-bottom:1rem;">Keuntungan Menjadi Mitra Snaprint:</h3>
          <ul style="list-style:none; display:flex; flex-direction:column; gap:0.75rem; color:#E2E8F0; font-size:0.95rem;">
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <span style="color:#00D2FF; font-weight:bold;"><i class="fa-solid fa-check"></i></span> Lisensi Sistem Order Online & Server WA 24 Jam
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <span style="color:#00D2FF; font-weight:bold;"><i class="fa-solid fa-check"></i></span> Pasokan Bahan Baku Harga Direct Distributor
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <span style="color:#00D2FF; font-weight:bold;"><i class="fa-solid fa-check"></i></span> Garansi Perawatan Mesin & Pelatihan SDM Operasional
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem;">
              <span style="color:#00D2FF; font-weight:bold;"><i class="fa-solid fa-check"></i></span> Strategi Marketing Pemasaran Digital Regional
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Mini Calculator Preview Section -->
  <section class="section" style="background:var(--bg-secondary);">
    <div class="container">
      <div class="grid-2" style="align-items:center;">
        <div class="scroll-reveal-left">
          <div class="badge-pill azure">Kalkulator Cetak Instan</div>
          <h2 class="section-title">Hitung Biaya Cetak Tanpa Ribet <span class="blue-gradient">Dalam 10 Detik</span></h2>
          <p style="color:var(--text-muted); font-size:1.05rem; margin-bottom:1.25rem;">
            Tidak perlu menunggu balasan admin lama! Sistem kalkulator otomatis Snaprint memungkinkan Anda memilih produk, menentukan ukuran, memilih bahan, dan melihat estimasi total harga secara instan.
          </p>
          <ul style="list-style:none; margin-bottom:1.75rem; display:flex; flex-direction:column; gap:0.65rem;">
            <li style="display:flex; align-items:center; gap:0.6rem; font-weight:600;">
              <span style="color:var(--friendly-emerald); font-size:1.1rem;"><i class="fa-solid fa-circle-check"></i></span> Perhitungan berdasarkan ukuran m² atau jumlah Qty
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem; font-weight:600;">
              <span style="color:var(--friendly-emerald); font-size:1.1rem;"><i class="fa-solid fa-circle-check"></i></span> Otomatis memotong diskon grosir hingga 15%
            </li>
            <li style="display:flex; align-items:center; gap:0.6rem; font-weight:600;">
              <span style="color:var(--friendly-emerald); font-size:1.1rem;"><i class="fa-solid fa-circle-check"></i></span> Kirim Rincian Order Langsung ke WhatsApp 0813-1193-3172
            </li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/kalkulator' ) ); ?>" class="btn btn-azure btn-lg"><i class="fa-solid fa-calculator"></i> Buka Kalkulator Cetak Lengkap</a>
        </div>

        <div class="scroll-reveal-right" style="background:var(--bg-card); border-radius:var(--radius-lg); padding:2.25rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow-hover);">
          <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1.25rem; border-b:1px solid var(--border-color); padding-bottom:0.85rem;">
            <h3 style="font-size:1.2rem;">Simulasi Cetak Banner Flexi</h3>
            <span style="background:var(--primary-blue-light); color:var(--primary-blue); padding:0.18rem 0.6rem; border-radius:var(--radius-sm); font-size:0.78rem; font-weight:700;">PROMO</span>
          </div>

          <div style="display:flex; flex-direction:column; gap:0.85rem; margin-bottom:1.25rem;">
            <div style="display:flex; justify-content:space-between; font-size:0.9rem;">
              <span>Ukuran Standard:</span>
              <strong>2m x 1m (2 m²)</strong>
            </div>
            <div style="display:flex; justify-content:space-between; font-size:0.9rem;">
              <span>Bahan Pilihan:</span>
              <strong>Flexi Korchin High-Res 440g</strong>
            </div>
            <div style="display:flex; justify-content:space-between; font-size:0.9rem;">
              <span>Finishing:</span>
              <strong>Mata Ayam 4 Sudut</strong>
            </div>
            <div style="display:flex; justify-content:space-between; font-size:0.9rem; color:var(--friendly-emerald);">
              <span>Layanan File:</span>
              <strong>Gratis Cek Resolusi File</strong>
            </div>
          </div>

          <div style="background:var(--navy-dark); color:#FFFFFF; border-radius:var(--radius-md); padding:1.1rem; text-align:center; margin-bottom:1.1rem; border:1px solid rgba(0, 210, 255, 0.25);">
            <span style="font-size:0.75rem; color:#94A3B8; text-transform:uppercase; letter-spacing:0.1em;">Estimasi Biaya</span>
            <div style="font-size:2.1rem; font-weight:800; color:var(--electric-azure); font-family:var(--font-heading);">Rp 48.000</div>
          </div>

          <a href="<?php echo esc_url( home_url( '/kalkulator' ) ); ?>" class="btn btn-whatsapp" style="width:100%;"><i class="fa-solid fa-calculator"></i> Coba Kalkulator Cetak Sekarang</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Showcase Toko Fisik & Mesin Digital Printing -->
  <section class="section">
    <div class="container">
      <div class="section-header scroll-reveal">
        <div class="badge-pill azure">Fasilitas Workshop</div>
        <h2 class="section-title">Mesin Canggih & <span class="blue-gradient">Outlet Fisik Bekasi</span></h2>
        <p class="section-desc">Kunjungi lokasi toko kami untuk konsultasi langsung, memilih sampel bahan, atau pantau proses cetak pesanan Anda.</p>
      </div>

      <div class="grid-3">
        <div class="gallery-item scroll-reveal-zoom delay-1" data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" data-title="Tampak Depan Outlet Snaprint Bekasi">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" alt="Fasad Snaprint Bekasi">
          <div class="gallery-overlay">
            <div>
              <strong style="font-size:1.05rem; display:block;">Fasad Toko Snaprint</strong>
              <small>Jl. Mustika Jaya, Lambang Sari, Tambun Selatan</small>
            </div>
          </div>
        </div>

        <div class="gallery-item scroll-reveal-zoom delay-2" data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-facade.png' ); ?>" data-title="Spanduk Layanan Digital Printing Lengkap">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-facade.png' ); ?>" alt="Area Depan Snaprint">
          <div class="gallery-overlay">
            <div>
              <strong style="font-size:1.05rem; display:block;">Outlet Tambun Selatan</strong>
              <small>Rekomendasi Digital Printing Terbaik di Bekasi</small>
            </div>
          </div>
        </div>

        <div class="gallery-item scroll-reveal-zoom delay-3" data-src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-interior.png' ); ?>" data-title="Ruang Pelayanan Kasir & Mesin Digital Printing">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-interior.png' ); ?>" alt="Interior Snaprint Counter">
          <div class="gallery-overlay">
            <div>
              <strong style="font-size:1.05rem; display:block;">Counter Kasir & Area Mesin</strong>
              <small>Ruangan Ber-AC, Pelayanan Cepat & Ramah</small>
            </div>
          </div>
        </div>
      </div>
  <!-- Section: Tips & Artikel Percetakan Terbaru (SEO Blog) -->
  <section class="section" style="background:var(--bg-card); border-top:1px solid var(--border-color); border-bottom:1px solid var(--border-color);">
    <div class="container">
      <div class="section-header scroll-reveal">
        <div class="badge-pill azure">Blog & Wawasan Cetak</div>
        <h2 class="section-title">Tips & Panduan <span class="blue-gradient">Percetakan Digital</span></h2>
        <p class="section-desc">Pelajari tips memilih bahan, standarisasi warna CMYK, dan strategi branding visual untuk bisnis dan UMKM Anda.</p>
      </div>

      <div class="grid-3">
        <?php
        $latest_posts = new WP_Query( array(
            'posts_per_page'      => 3,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => 1,
        ) );

        if ( $latest_posts->have_posts() ) :
            while ( $latest_posts->have_posts() ) :
                $latest_posts->the_post();
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
                      <?php echo wp_trim_words( get_the_excerpt(), 16 ); ?>
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
            wp_reset_postdata();
        else :
            ?>
            <!-- Fallback Mock Cards if no posts published yet -->
            <article class="product-card scroll-reveal-up" style="display:flex; flex-direction:column; height:100%;">
              <div class="product-img-wrapper" style="height:210px; overflow:hidden; position:relative;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" alt="Bahan Flexi" style="width:100%; height:100%; object-fit:cover;">
                <span class="product-badge" style="position:absolute; top:12px; left:12px; margin:0;">Bahan Spanduk</span>
              </div>
              <div class="product-body" style="display:flex; flex-direction:column; flex:1; padding:1.5rem;">
                <div style="display:flex; align-items:center; gap:0.75rem; font-size:0.82rem; color:var(--text-muted); margin-bottom:0.75rem;">
                  <span><i class="fa-regular fa-calendar"></i> <?php echo date( 'd M Y' ); ?></span>
                  <span>•</span>
                  <span><i class="fa-regular fa-clock"></i> 4 mnt baca</span>
                </div>
                <h3 class="product-title" style="font-size:1.15rem; line-height:1.4; margin-bottom:0.75rem;">
                  <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" style="color:inherit; text-decoration:none;">Panduan Memilih Bahan Banner: Flexi Standard vs Korchin High-Res</a>
                </h3>
                <p class="product-desc" style="font-size:0.9rem; line-height:1.6; color:var(--text-muted); margin-bottom:1.25rem;">
                  Ketahui perbedaan gramasi dan ketahanan cuaca antara bahan Flexi 280g dan Korchin 440g untuk promosi outdoor tahan lama.
                </p>
                <div style="margin-top:auto; padding-top:0.75rem; border-top:1px solid var(--border-color);">
                  <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="service-link" style="font-weight:700; color:var(--primary-blue);">
                    Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </article>

            <article class="product-card scroll-reveal-up delay-1" style="display:flex; flex-direction:column; height:100%;">
              <div class="product-img-wrapper" style="height:210px; overflow:hidden; position:relative;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-interior.png' ); ?>" alt="Stiker Custom" style="width:100%; height:100%; object-fit:cover;">
                <span class="product-badge" style="position:absolute; top:12px; left:12px; margin:0;">Kemasan & Label</span>
              </div>
              <div class="product-body" style="display:flex; flex-direction:column; flex:1; padding:1.5rem;">
                <div style="display:flex; align-items:center; gap:0.75rem; font-size:0.82rem; color:var(--text-muted); margin-bottom:0.75rem;">
                  <span><i class="fa-regular fa-calendar"></i> <?php echo date( 'd M Y' ); ?></span>
                  <span>•</span>
                  <span><i class="fa-regular fa-clock"></i> 3 mnt baca</span>
                </div>
                <h3 class="product-title" style="font-size:1.15rem; line-height:1.4; margin-bottom:0.75rem;">
                  <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" style="color:inherit; text-decoration:none;">Perbedaan Finishing Stiker: Kiss-Cut vs Die-Cut untuk Kemasan UMKM</a>
                </h3>
                <p class="product-desc" style="font-size:0.9rem; line-height:1.6; color:var(--text-muted); margin-bottom:1.25rem;">
                  Panduan lengkap memilih jenis potongan stiker label produk makanan dan kosmetik agar lebih praktis saat proses labeling.
                </p>
                <div style="margin-top:auto; padding-top:0.75rem; border-top:1px solid var(--border-color);">
                  <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="service-link" style="font-weight:700; color:var(--primary-blue);">
                    Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </article>

            <article class="product-card scroll-reveal-up delay-2" style="display:flex; flex-direction:column; height:100%;">
              <div class="product-img-wrapper" style="height:210px; overflow:hidden; position:relative;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-facade.png' ); ?>" alt="Panduan Warna CMYK" style="width:100%; height:100%; object-fit:cover;">
                <span class="product-badge" style="position:absolute; top:12px; left:12px; margin:0;">Teknis Cetak</span>
              </div>
              <div class="product-body" style="display:flex; flex-direction:column; flex:1; padding:1.5rem;">
                <div style="display:flex; align-items:center; gap:0.75rem; font-size:0.82rem; color:var(--text-muted); margin-bottom:0.75rem;">
                  <span><i class="fa-regular fa-calendar"></i> <?php echo date( 'd M Y' ); ?></span>
                  <span>•</span>
                  <span><i class="fa-regular fa-clock"></i> 5 mnt baca</span>
                </div>
                <h3 class="product-title" style="font-size:1.15rem; line-height:1.4; margin-bottom:0.75rem;">
                  <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" style="color:inherit; text-decoration:none;">Standar Warna CMYK dan Resolusi 300 DPI: Kunci Cetak Tajam & Akurat</a>
                </h3>
                <p class="product-desc" style="font-size:0.9rem; line-height:1.6; color:var(--text-muted); margin-bottom:1.25rem;">
                  Hindari hasil cetak buram atau warna pudar dengan menerapkan format warna CMYK dan resolusi minimal 300 DPI sebelum kirim file.
                </p>
                <div style="margin-top:auto; padding-top:0.75rem; border-top:1px solid var(--border-color);">
                  <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="service-link" style="font-weight:700; color:var(--primary-blue);">
                    Baca Selengkapnya <i class="fa-solid fa-arrow-right"></i>
                  </a>
                </div>
              </div>
            </article>
        <?php endif; ?>
      </div>

      <div style="text-align:center; margin-top:3rem;">
        <?php
        $blog_page_id = get_option( 'page_for_posts' );
        $blog_url = $blog_page_id ? get_permalink( $blog_page_id ) : home_url( '/blog' );
        ?>
        <a href="<?php echo esc_url( $blog_url ); ?>" class="btn btn-secondary btn-lg" style="box-shadow:var(--card-shadow);">
          <i class="fa-solid fa-newspaper"></i> Lihat Semua Artikel & Panduan Cetak
        </a>
      </div>
    </div>
  </section>

<?php
get_footer();
