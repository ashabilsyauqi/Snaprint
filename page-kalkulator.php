<?php
/**
 * Template Name: Kalkulator Cetak
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
        <span>Kalkulator Cetak</span>
      </div>
      <div class="page-banner-content">
        <h1>Kalkulator Cetak & Order Online</h1>
        <p>Atur media cetak, dimensi, spesifikasi bahan, dan jumlah pesanan Anda. Dapatkan estimasi total harga instan & kirimkan langsung ke WhatsApp Snaprint.</p>
      </div>
    </div>
  </section>

  <!-- Calculator Engine Container Section -->
  <section class="section" id="kalkulator">
    <div class="container">
      <div class="calculator-card">
        <!-- Product Selector Tabs -->
        <div class="calc-product-selector" id="calc-tabs">
          <!-- Dynamic Tabs from JS -->
        </div>

        <div class="calc-main-layout">
          <!-- Left Inputs Form -->
          <div>
            <div id="calc-form-container">
              <!-- Dynamic Form Fields from JS -->
            </div>

            <!-- File Drag & Drop Simulator -->
            <div class="calc-form-group">
              <label class="calc-label">Upload File Desain (Opsional untuk Cek Resolusi 300 DPI)</label>
              <div class="file-upload-box" id="file-drop-zone">
                <div class="file-upload-icon"><i class="fa-solid fa-cloud-arrow-up"></i></div>
                <p class="file-upload-text">
                  <strong>Klik atau Seret File Desain ke sini</strong><br>
                  Format didukung: PDF, TIFF, PNG, JPG, AI, PSD (Maks 100MB)
                </p>
                <div id="file-status-text"></div>
              </div>
              <input type="file" id="file-input-hidden" style="display:none" accept=".pdf,.png,.jpg,.jpeg,.tiff,.ai,.psd">
            </div>
          </div>

          <!-- Right Summary Box -->
          <div class="calc-summary-box">
            <div>
              <div class="summary-header">
                <h4>Rincian Estimasi Order</h4>
                <p>Harga transparan tanpa biaya tersembunyi</p>
              </div>

              <ul class="summary-details-list">
                <li>
                  <span>Media Cetak:</span>
                  <span class="val" id="calc-summary-product">Banner Flexi</span>
                </li>
                <li>
                  <span>Spesifikasi:</span>
                  <span class="val" id="calc-summary-spec">Flexi 280g (2m x 1m)</span>
                </li>
                <li>
                  <span>Jumlah:</span>
                  <span class="val" id="calc-summary-qty">1 m²</span>
                </li>
                <li>
                  <span>Diskon Grosir:</span>
                  <span class="val" id="calc-summary-discount" style="color:var(--electric-azure);">Tidak Ada</span>
                </li>
              </ul>
            </div>

            <div>
              <div class="total-price-tag">
                <label>Estimasi Biaya Total</label>
                <div class="amount" id="calc-total-amount">Rp 0</div>
              </div>

              <button type="button" id="btn-order-wa" class="btn btn-whatsapp btn-lg" style="width:100%;">
                <i class="fa-brands fa-whatsapp"></i> Pesan Sekarang via WhatsApp
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
