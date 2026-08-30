<?php
/**
 * Template Name: Tentang Kami
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
        <span>Tentang Kami</span>
      </div>
      <div class="page-banner-content scroll-reveal-left">
        <h1>Profil Perusahaan Snaprint</h1>
        <p>Mendedikasikan teknologi digital printing presisi tinggi untuk mendukung kemajuan dan operasional bisnis setiap pelanggan.</p>
      </div>
    </div>
  </section>

  <!-- Corporate Story & Visi Misi -->
  <section class="section">
    <div class="container">
      <div class="grid-2" style="align-items:center;">
        <div class="scroll-reveal-left">
          <div class="badge-pill azure">Komitmen & Dedikasi</div>
          <h2 class="section-title">Mitra Cetak Terpercaya <span class="blue-gradient">Di Bekasi</span></h2>
          <p style="color:var(--text-muted); margin-bottom:1rem; font-size:1rem;">
            <strong>Snaprint Digital Printing</strong> didirikan dengan satu komitmen utama: memberikan kemudahan pencetakan media bisnis yang berkualitas tinggi, cepat, dan transparan.
          </p>
          <p style="color:var(--text-muted); margin-bottom:1.25rem; font-size:1rem;">
            Dengan tagline khas kami <em>"Dari Desain Sampai Cetak, Semua Bisa Online!"</em>, kami memotong kerumitan proses percetakan tradisional. Mulai dari UMKM lokal, perkantoran corporate, hingga event organizer ternama di Bekasi telah memercayakan kebutuhan promosi fisik mereka kepada Snaprint.
          </p>

          <div style="display:flex; flex-direction:column; gap:0.85rem; margin-top:1.5rem;">
            <div style="background:var(--bg-secondary); padding:1.1rem; border-radius:var(--radius-md); border-left:4px solid var(--primary-blue);">
              <h4 style="font-size:1.05rem; margin-bottom:0.2rem;"><i class="fa-solid fa-bullseye" style="color:var(--primary-blue);"></i> Visi Perusahaan</h4>
              <p style="font-size:0.9rem; color:var(--text-muted);">Menjadi pusat digital printing terbaik dan paling diandalkan di Jabodetabek dengan mengedepankan teknologi mutakhir & pelayanan serba online.</p>
            </div>

            <div style="background:var(--bg-secondary); padding:1.1rem; border-radius:var(--radius-md); border-left:4px solid var(--electric-azure);">
              <h4 style="font-size:1.05rem; margin-bottom:0.2rem;"><i class="fa-solid fa-rocket" style="color:var(--electric-azure);"></i> Misi Utama</h4>
              <p style="font-size:0.9rem; color:var(--text-muted);">Menyediakan hasil cetak warna tajam presisi tinggi, memastikan ketepatan waktu produksi kilat, dan memberikan sistem pemesanan online tanpa batas jarak.</p>
            </div>
          </div>
        </div>

        <div class="scroll-reveal-right">
          <div class="store-main-card" style="box-shadow:var(--card-shadow-hover);">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-interior.png' ); ?>" alt="Interior Toko & Mesin Snaprint Bekasi">
            <div class="store-card-overlay">
              <h4>Ruang Workshop & Pelayanan Snaprint</h4>
              <p><i class="fa-solid fa-location-dot"></i> Jl. Mustika Jaya, Lambang Sari, Tambun Selatan, Bekasi</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Teknologi Mesin Digital Printing -->
  <section class="section" style="background:var(--bg-secondary);">
    <div class="container">
      <div class="section-header scroll-reveal">
        <div class="badge-pill">Teknologi Terdepan</div>
        <h2 class="section-title">Mesin & Peralatan <span class="blue-gradient">Cetak Presisi</span></h2>
        <p class="section-desc">Kombinasi mesin produksi performa tinggi untuk menjamin akurasi warna dan ketahanan bahan terbaik.</p>
      </div>

      <div class="grid-3">
        <div class="scroll-reveal-zoom delay-1" style="background:var(--bg-card); border-radius:var(--radius-md); padding:1.75rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow);">
          <div style="width:50px; height:50px; border-radius:12px; background:var(--primary-blue-light); color:var(--primary-blue); display:flex; align-items:center; justify-content:center; font-size:1.4rem; margin-bottom:1rem;"><i class="fa-solid fa-print"></i></div>
          <h3 style="font-size:1.2rem; margin-bottom:0.4rem;">Large Format Eco-Solvent</h3>
          <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:0.85rem;">
            Mesin pencetak outdoor & indoor lebar hingga 3.2 meter dengan tinta Eco-Solvent tahan cuaca panas dan air tanpa mudah pudar.
          </p>
          <small style="color:var(--primary-blue); font-weight:700;">Aplikasi: Spanduk Flexi, Banner, Stiker Meteran</small>
        </div>

        <div class="scroll-reveal-zoom delay-2" style="background:var(--bg-card); border-radius:var(--radius-md); padding:1.75rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow);">
          <div style="width:50px; height:50px; border-radius:12px; background:var(--electric-azure-light); color:#0088CC; display:flex; align-items:center; justify-content:center; font-size:1.4rem; margin-bottom:1rem;"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
          <h3 style="font-size:1.2rem; margin-bottom:0.4rem;">Digital Offset A3+ High-Res</h3>
          <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:0.85rem;">
            Mesin cetak digital offset berkecepatan tinggi dengan resolusi 2400 DPI untuk mencetak kartu nama, brosur, sertifikat, & stiker A3+.
          </p>
          <small style="color:var(--primary-blue); font-weight:700;">Aplikasi: A3+ Print, Kartu Nama, Brosur, Stiker Sheet</small>
        </div>

        <div class="scroll-reveal-zoom delay-3" style="background:var(--bg-card); border-radius:var(--radius-md); padding:1.75rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow);">
          <div style="width:50px; height:50px; border-radius:12px; background:rgba(16, 185, 129, 0.12); color:var(--friendly-emerald); display:flex; align-items:center; justify-content:center; font-size:1.4rem; margin-bottom:1rem;"><i class="fa-solid fa-scissors"></i></div>
          <h3 style="font-size:1.2rem; margin-bottom:0.4rem;">Laser Cutting & UV Flatbed</h3>
          <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:0.85rem;">
            Mesin pemotong laser presisi milimeter dan cetak Flatbed UV langsung di media keras seperti Akrilik, Kayu, dan Plakat.
          </p>
          <small style="color:var(--primary-blue); font-weight:700;">Aplikasi: Plakat Akrilik, Cutting Stiker, Souvenir</small>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
