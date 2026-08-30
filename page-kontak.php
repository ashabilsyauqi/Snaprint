<?php
/**
 * Template Name: Kontak & Lokasi
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
        <span>Kontak & Lokasi</span>
      </div>
      <div class="page-banner-content">
        <h1>Hubungi Kami & Kunjungi Toko</h1>
        <p>Tim Customer Service Snaprint Bekasi siap membantu segala kebutuhan konsultasi bahan, penawaran harga corporate, dan pemesanan online.</p>
      </div>
    </div>
  </section>

  <!-- Contact Form & Info Grid -->
  <section class="section">
    <div class="container">
      <div class="grid-2" style="gap:2.5rem;">
        <!-- Left: Contact Details Card -->
        <div>
          <div style="background:var(--bg-card); border-radius:var(--radius-lg); padding:2.25rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow); margin-bottom:1.5rem;">
            <div class="badge-pill azure" style="margin-bottom:1rem;">Informasi Toko</div>
            <h3 style="font-size:1.5rem; margin-bottom:1.25rem;">Outlet Snaprint Bekasi</h3>

            <div style="display:flex; flex-direction:column; gap:1.2rem;">
              <div style="display:flex; gap:0.85rem;">
                <div style="width:40px; height:40px; border-radius:10px; background:var(--primary-blue-light); color:var(--primary-blue); display:flex; align-items:center; justify-content:center; font-size:1.2rem; flex-shrink:0;">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                  <strong style="display:block; font-size:0.95rem; margin-bottom:0.15rem;">Alamat Toko Fisik</strong>
                  <p style="color:var(--text-muted); font-size:0.9rem; margin:0;">Jl. Mustika Jaya, Lambang Sari, Tambun Selatan, Bekasi, Jawa Barat.</p>
                </div>
              </div>

              <div style="display:flex; gap:0.85rem;">
                <div style="width:40px; height:40px; border-radius:10px; background:rgba(16, 185, 129, 0.12); color:var(--friendly-emerald); display:flex; align-items:center; justify-content:center; font-size:1.2rem; flex-shrink:0;">
                  <i class="fa-brands fa-whatsapp"></i>
                </div>
                <div>
                  <strong style="display:block; font-size:0.95rem; margin-bottom:0.15rem;">WhatsApp & Telepon</strong>
                  <p style="color:var(--text-muted); font-size:0.9rem; margin:0;">
                    <a href="https://wa.me/6281311933172" target="_blank" style="color:var(--friendly-emerald); font-weight:bold;">0813-1193-3172</a> (Fast Response 24h)
                  </p>
                </div>
              </div>

              <div style="display:flex; gap:0.85rem;">
                <div style="width:40px; height:40px; border-radius:10px; background:var(--electric-azure-light); color:#0088CC; display:flex; align-items:center; justify-content:center; font-size:1.2rem; flex-shrink:0;">
                  <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                  <strong style="display:block; font-size:0.95rem; margin-bottom:0.15rem;">Jam Operasional Toko</strong>
                  <p style="color:var(--text-muted); font-size:0.9rem; margin:0;">
                    Senin - Sabtu: <strong>08.00 - 21.00 WIB</strong><br>
                    Minggu & Libur: <em>Layanan Chat Online Aktif</em>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Storefront Thumbnail -->
          <div style="border-radius:var(--radius-lg); overflow:hidden; border:1px solid var(--border-color); box-shadow:var(--card-shadow);">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/snaprint-storefront.png' ); ?>" alt="Toko Snaprint Bekasi" style="width:100%; display:block;">
          </div>
        </div>

        <!-- Right: Message Form -->
        <div>
          <div style="background:var(--bg-card); border-radius:var(--radius-lg); padding:2.25rem; border:1px solid var(--border-color); box-shadow:var(--card-shadow);">
            <h3 style="font-size:1.5rem; margin-bottom:0.5rem;">Kirim Pesan Konsultasi</h3>
            <p style="color:var(--text-muted); font-size:0.9rem; margin-bottom:1.5rem;">Isi formulir di bawah ini untuk terhubung langsung dengan Customer Service Snaprint.</p>

            <div id="contact-alert" style="display:none; margin-bottom:1rem;"></div>

            <form id="contact-form">
              <div class="calc-form-group">
                <label class="calc-label" for="contact-name">Nama Lengkap Anda</label>
                <input type="text" id="contact-name" class="calc-input" placeholder="Contoh: Budi Santoso" required>
              </div>

              <div class="calc-form-group">
                <label class="calc-label" for="contact-phone">Nomor WhatsApp / HP</label>
                <input type="tel" id="contact-phone" class="calc-input" placeholder="Contoh: 081234567890" required>
              </div>

              <div class="calc-form-group">
                <label class="calc-label" for="contact-message">Pesan / Pertanyaan Cetak Anda</label>
                <textarea id="contact-message" class="calc-select" rows="4" style="height:auto; padding:0.8rem;" placeholder="Tuliskan kebutuhan cetak Anda, misalnya: Saya mau tanya harga cetak banner 3x1m sebanyak 5 buah..." required></textarea>
              </div>

              <button type="submit" class="btn btn-whatsapp btn-lg" style="width:100%;">
                <i class="fa-brands fa-whatsapp"></i> Kirim Pesan via WhatsApp CS
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Google Maps Embed Section -->
  <section class="section" style="background:var(--bg-secondary);">
    <div class="container">
      <div class="section-header">
        <div class="badge-pill azure">Peta Digital</div>
        <h2 class="section-title">Lokasi Google Maps <span class="blue-gradient">Snaprint Bekasi</span></h2>
        <p class="section-desc">Gunakan petunjuk arah Google Maps di bawah ini untuk menuju ke lokasi outlet kami.</p>
      </div>

      <div style="border-radius:var(--radius-lg); overflow:hidden; box-shadow:var(--card-shadow-hover); border:1px solid var(--border-color);">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15863.351239999999!2d107.035!3d-6.275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTYnMzAuMCJTIDEwN8KwMDInMDYuMCJF!5e0!3m2!1sid!2sid!4v1620000000000!5m2!1sid!2sid" 
          width="100%" 
          height="420" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy"
          title="Lokasi Snaprint Digital Printing Bekasi">
        </iframe>
      </div>
    </div>
  </section>

<?php
get_footer();
