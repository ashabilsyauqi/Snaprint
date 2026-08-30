<?php
/**
 * Template Name: Panduan File
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
        <span>Panduan File</span>
      </div>
      <div class="page-banner-content">
        <h1>Panduan Siap Cetak (Print Guidelines)</h1>
        <p>Standar Operating Procedure (SOP) format file desain untuk menjamin warna tidak meleset dan tidak pecah saat dicetak.</p>
      </div>
    </div>
  </section>

  <!-- Detailed Guidelines Section -->
  <section class="section">
    <div class="container">
      <div class="grid-2">
        <div class="guideline-card">
          <div class="guideline-icon"><i class="fa-solid fa-palette"></i></div>
          <div>
            <h3 style="font-size:1.3rem; margin-bottom:0.5rem; color:var(--primary-blue);">1. Mode Warna CMYK (Bukan RGB)</h3>
            <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;">
              Mesin pencetak fisik menggunakan tinta 4 warna Cyan, Magenta, Yellow, dan Black (<strong>CMYK</strong>). Jika file Anda berformat RGB (warna monitor), ubah mode warna di Photoshop/Illustrator ke CMYK agar hasil cetak fisik tidak berubah menjadi buram/gelap.
            </p>
          </div>
        </div>

        <div class="guideline-card">
          <div class="guideline-icon"><i class="fa-solid fa-ruler-combined"></i></div>
          <div>
            <h3 style="font-size:1.3rem; margin-bottom:0.5rem; color:var(--primary-blue);">2. Resolusi Min 300 DPI (A3+/Stiker)</h3>
            <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;">
              Untuk media cetak jarak dekat (Kartu Nama, Brosur, Stiker, Print A3+), pastikan resolusi minimal <strong>300 DPI/PPI</strong>. Untuk Banner besar skala meteran, resolusi minimal 150 DPI skala 1:1 sudah sangat memadai.
            </p>
          </div>
        </div>

        <div class="guideline-card">
          <div class="guideline-icon"><i class="fa-solid fa-scissors"></i></div>
          <div>
            <h3 style="font-size:1.3rem; margin-bottom:0.5rem; color:var(--primary-blue);">3. Safe Margin & Bleed 3mm</h3>
            <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;">
              Berikan jarak aman (Safe Margin) teks atau logo minimal <strong>3 mm</strong> dari tepi potongan mesin. Ini mencegah elemen penting terpotong pisau potong atau tertutup mata ayam banner.
            </p>
          </div>
        </div>

        <div class="guideline-card">
          <div class="guideline-icon"><i class="fa-solid fa-file-pdf"></i></div>
          <div>
            <h3 style="font-size:1.3rem; margin-bottom:0.5rem; color:var(--primary-blue);">4. Format File TIFF / PDF High-Res</h3>
            <p style="color:var(--text-muted); font-size:0.95rem; line-height:1.6;">
              Simpan file desain Anda dalam format <strong>PDF High-Print, TIFF (Flattened / LZW Compression), PNG High-Res, atau AI/PSD (Font Convert Outlines)</strong> agar tidak terjadi <em>missing font</em>.
            </p>
          </div>
        </div>
      </div>

      <!-- Free Design Check CTA -->
      <div style="margin-top:3.5rem; background:linear-gradient(135deg, var(--navy-dark) 0%, var(--primary-blue) 100%); border-radius:var(--radius-lg); padding:3rem 2rem; color:#FFFFFF; text-align:center; box-shadow:var(--card-shadow-hover);">
        <div style="font-size:2.8rem; margin-bottom:0.5rem; color:var(--electric-azure);"><i class="fa-solid fa-pen-nib"></i></div>
        <h3 style="color:#FFFFFF; font-size:1.75rem; margin-bottom:0.5rem;">File Anda Belum Siap atau Ragu dengan Formatnya?</h3>
        <p style="opacity:0.9; max-width:650px; margin:0 auto 1.5rem auto; font-size:1.05rem;">
          Jangan khawatir! Kirimkan file Anda ke WhatsApp Customer Service Snaprint. Tim Desainer Grafis kami siap memeriksa resolusi dan membantu perbaikan file secara gratis!
        </p>
        <a href="https://wa.me/6281311933172?text=Halo%20Snaprint,%20saya%20mau%20minta%20bantuan%20cek%20file%20desain" target="_blank" class="btn btn-azure btn-lg">
          <i class="fa-brands fa-whatsapp"></i> Bantuan Cek File via WA 0813-1193-3172
        </a>
      </div>
    </div>
  </section>

<?php
get_footer();
