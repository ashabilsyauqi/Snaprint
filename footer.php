<?php
/**
 * The footer for Snaprint Digital Printing Theme
 *
 * @package Snaprint
 * @version 1.0.0
 */
?>
  <!-- Pro Enterprise Multi-Column Footer -->
  <footer class="footer">
    <div class="container">
      <div class="grid-4" style="margin-bottom:2.5rem;">
        <div>
          <div class="logo" style="margin-bottom:0.85rem;">
            <div class="logo-badge">S</div>
            <div class="logo-text">
              <span class="logo-main" style="color:#FFFFFF;">SNAPRINT</span>
              <span class="logo-sub" style="color:var(--electric-azure);">DIGITAL PRINTING</span>
            </div>
          </div>
          <p style="font-size:0.875rem; line-height:1.6; margin-bottom:1.1rem; color:#94A3B8;">
            Pusat percetakan media promosi & operasional bisnis terpercaya di Bekasi. Pelayanan cepat, ramah, dan serba online.
          </p>
          <a href="https://wa.me/6281311933172" target="_blank" class="btn btn-whatsapp btn-sm">
            <i class="fa-brands fa-whatsapp"></i> WA CS: 0813-1193-3172
          </a>
        </div>

        <div>
          <h4>Hirarki Navigasi</h4>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a></li>
            <li><a href="<?php echo esc_url( home_url( '/tentang' ) ); ?>">Tentang Kami</a></li>
            <li><a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>">Katalog Layanan</a></li>
            <li><a href="<?php echo esc_url( home_url( '/kalkulator' ) ); ?>">Kalkulator Cetak</a></li>
            <li><a href="<?php echo esc_url( home_url( '/panduan' ) ); ?>">Panduan File</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog & Artikel</a></li>
            <li><a href="<?php echo esc_url( home_url( '/galeri' ) ); ?>">Galeri Toko</a></li>
            <li><a href="<?php echo esc_url( home_url( '/franchise' ) ); ?>">Franchise Kemitraan</a></li>
            <li><a href="<?php echo esc_url( home_url( '/kontak' ) ); ?>">Kontak & Lokasi</a></li>
          </ul>
        </div>

        <div>
          <h4>Jam Operasional</h4>
          <ul class="footer-links" style="font-size:0.875rem;">
            <li><strong>Senin - Sabtu:</strong> 08.00 - 21.00 WIB</li>
            <li><strong>Minggu & Libur:</strong> WhatsApp Chat Only</li>
            <li style="margin-top:0.75rem; color:#94A3B8;">
              <small><i class="fa-solid fa-truck-fast"></i> Pengiriman GoSend / GrabExpress / Cargo Tersedia</small>
            </li>
          </ul>
        </div>

        <div>
          <h4>Lokasi Toko Fisik</h4>
          <p style="font-size:0.875rem; margin-bottom:0.85rem; color:#94A3B8;">
            <i class="fa-solid fa-location-dot"></i> Jl. Mustika Jaya, Lambang Sari, Tambun Selatan, Bekasi, Jawa Barat.
          </p>
          <a href="<?php echo esc_url( home_url( '/kontak' ) ); ?>" class="btn btn-secondary btn-sm" style="color:var(--text-main);">
            <i class="fa-solid fa-map"></i> Lihat Peta Google Maps
          </a>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?php echo date( 'Y' ); ?> <strong>Snaprint Digital Printing Bekasi</strong>. Enterprise Corporate Profile & Franchise System.</p>
      </div>
    </div>
  </footer>

  <!-- Floating WhatsApp Widget -->
  <a href="https://wa.me/6281311933172?text=Halo%20Snaprint!%20Saya%20ingin%20konsultasi%20cetak" target="_blank" class="floating-wa-btn" title="Chat WhatsApp Langsung">
    <i class="fa-brands fa-whatsapp"></i>
    <span class="wa-badge">1</span>
  </a>

  <!-- Lightbox Modal -->
  <div class="modal-backdrop" id="gallery-modal">
    <div class="modal-content">
      <button type="button" class="modal-close-btn" id="modal-close">✕</button>
      <img id="modal-img" src="" alt="Detail Toko Snaprint" style="width:100%; border-radius:var(--radius-md); margin-bottom:1rem;">
      <h3 id="modal-caption" style="text-align:center; font-size:1.1rem;"></h3>
    </div>
  </div>

  <!-- Franchise Lead Hook Popup Modal -->
  <div class="modal-backdrop" id="franchise-popup-modal">
    <div class="modal-content" style="max-width:620px; border:2px solid var(--electric-azure); background:var(--navy-dark); color:#FFFFFF; padding:2.25rem;">
      <button type="button" class="modal-close-btn" id="franchise-popup-close" style="color:#FFFFFF; background:rgba(255,255,255,0.15);">✕</button>
      
      <div style="text-align:center; margin-bottom:1.5rem;">
        <span style="background:rgba(0, 210, 255, 0.2); color:#00D2FF; padding:0.25rem 0.85rem; border-radius:var(--radius-full); font-size:0.75rem; font-weight:800; letter-spacing:0.06em; text-transform:uppercase; border:1px solid rgba(0,210,255,0.35);">
          <i class="fa-solid fa-briefcase"></i> PELUANG FRANCHISE DIGITAL PRINTING
        </span>
        <h3 style="color:#FFFFFF; font-size:1.85rem; font-family:var(--font-heading); margin:0.75rem 0 0.4rem 0;">
          Punya Bisnis Percetakan Sendiri di Kota Anda!
        </h3>
        <p style="color:#CBD5E1; font-size:0.95rem;">
          Gabung mitra <strong>Snaprint Digital Printing</strong>. Dapatkan proyeksi balik modal cepat (ROI 12–18 Bulan), mesin presisi, & lisensi web cetak online!
        </p>
      </div>

      <form id="franchise-popup-form">
        <div class="calc-form-group">
          <label class="calc-label" style="color:#FFFFFF;">Nama Lengkap Anda</label>
          <input type="text" id="pop-name" class="calc-input" placeholder="Contoh: Pak Hendra Kurniadi" required style="background:rgba(255,255,255,0.08); color:#FFFFFF; border-color:rgba(255,255,255,0.2);">
        </div>

        <div class="calc-form-group">
          <label class="calc-label" style="color:#FFFFFF;">Nomor WhatsApp</label>
          <input type="tel" id="pop-phone" class="calc-input" placeholder="Contoh: 081234567890" required style="background:rgba(255,255,255,0.08); color:#FFFFFF; border-color:rgba(255,255,255,0.2);">
        </div>

        <div class="grid-2">
          <div class="calc-form-group">
            <label class="calc-label" style="color:#FFFFFF;">Rencana Kota Usaha</label>
            <input type="text" id="pop-city" class="calc-input" placeholder="Contoh: Bandung / Surabaya" required style="background:rgba(255,255,255,0.08); color:#FFFFFF; border-color:rgba(255,255,255,0.2);">
          </div>

          <div class="calc-form-group">
            <label class="calc-label" style="color:#FFFFFF;">Estimasi Modal Usaha</label>
            <select id="pop-budget" class="calc-select" style="background:#0F1E36; color:#FFFFFF; border-color:rgba(255,255,255,0.2);">
              <option value="Rp 50-100jt">Rp 50 - 100 Juta</option>
              <option value="Rp 100-200jt" selected>Rp 100 - 200 Juta</option>
              <option value="> 200jt">> 200 Juta</option>
            </select>
          </div>
        </div>

        <button type="submit" class="btn btn-azure btn-lg" style="width:100%; margin-top:0.5rem;">
          <i class="fa-solid fa-paper-plane"></i> Minta Proposal Kemitraan via WA (0877-8104-7453)
        </button>
      </form>
      
      <div style="text-align:center; margin-top:1.25rem;">
        <a href="<?php echo esc_url( home_url( '/franchise' ) ); ?>" style="color:#00D2FF; font-size:0.85rem; font-weight:700; text-decoration:underline;">Lihat Detail Paket Franchise & Proyeksi ROI <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
