# Snaprint Digital Printing - WordPress Platform & Theme

Website resmi & tema WordPress kustom untuk **Snaprint Digital Printing Bekasi**. Dilengkapi arsitektur SEO & blogging modern, mesin kalkulator cetak interaktif, integrasi WhatsApp order, showcase galeri outlet, serta portal kemitraan franchise.

---

## 🚀 Fitur Utama

- **Kalkulator Cetak Interaktif Penuh**: Dynamic tabs (Banner, Stiker, Kartu Nama, A3+, Lanyard, Plakat, Stempel, Mug, Roll-Up), input dimensi/spek/finishing, drag & drop file simulator, hitung diskon grosir real-time, dan pesan WhatsApp instan otomatis.
- **Arsitektur SEO & Blogging Siap Pakai**:
  - Dukungan penuh plugin **Yoast SEO** (Breadcrumbs Schema & Open Graph).
  - Indikator estimasi waktu baca (*reading time*) otomatis.
  - Tipografi artikel `.entry-content` ramah editor blok Gutenberg.
  - Box profil penulis (*Author Bio Box*) standar Google E-E-A-T.
  - Rekomendasi 3 artikel serupa (*Related Posts*) & tombol bagikan (*Share Buttons*).
  - Sistem diskusi komentar terintegrasi (`comments.php`).
- **Peluang Kemitraan Franchise**: Paket kemitraan Silver, Gold, dan Master Franchise Kota dengan modal terjangkau & proyeksi ROI cepat.
- **Showcase Workshop & Mesin Percetakan**: Galeri fasad, counter kasir, dan display workshop Snaprint Tambun Selatan.
- **Desain Kontras Dinamis**: Space Grotesk + Lexend, palet Tech Navy & Neon Electric Azure, 100% responsif mobile.

---

## 📁 Struktur Proyek

```
├── style.css                      # Metadata tema WordPress & import stylesheet
├── screenshot.png                 # Preview tema resmi di dashboard WP
├── functions.php                  # Enqueue scripts/styles, menu, theme supports, SEO helpers
├── header.php                     # Top announcement ticker bar & navigasi
├── footer.php                     # Footer multi-kolom, WA floating widget & modal kemitraan
├── front-page.php                 # Halaman Beranda (Hero, Kalkulator, Toko, Blog Terbaru)
├── index.php                      # Katalog Blog & Artikel dengan pagination numerik
├── single.php                     # Template Artikel Blog Lengkap + Breadcrumbs + Author Bio
├── category.php                   # Halaman Arsip Kategori Artikel
├── archive.php                    # Halaman Arsip Tanggal / Tag
├── search.php                     # Template Hasil Pencarian Artikel
├── comments.php                   # Sistem Diskusi Komentar Artikel
├── page-kalkulator.php            # Halaman Khusus Kalkulator Cetak Mandiri
├── page-layanan.php               # Halaman Katalog Layanan Cetak
├── page-tentang.php               # Profil Toko & Nilai Keunggulan
├── page-franchise.php             # Paket Kemitraan & Syarat Franchise
├── page-galeri.php                # Galeri Hasil Cetak & Suasana Toko
├── page-panduan.php               # Panduan Format File Siap Cetak (CMYK, 300 DPI)
├── page-kontak.php                # Informasi Kontak, Alamat Toko & Peta Lokasi
├── 404.php                        # Halaman Error 404 Responsif
│
├── css/
│   ├── style.css                  # CSS dasar, palet warna, tipografi & tombol
│   └── components.css             # Desain komponen kalkulator, kartu blog & layout
├── js/
│   ├── products-data.js           # Database JSON produk, bahan, ukuran & harga cetak
│   ├── calculator.js              # Engine kalkulator cetak & generator link WhatsApp
│   ├── main.js                    # Navigasi mobile, modal franchise & interaktivitas
│   └── app.js                     # Inisialisasi aplikasi
├── assets/images/                 # Aset foto toko fisik, interior, fasad & logo
│
├── database/
│   ├── snaprint_db.sql            # Master database WordPress (skema, artikel, menu)
│   └── prepare_production_db.sh   # Script otomatis konversi URL localhost ke domain server
│
├── docker-compose.yml             # Orchestrasi Docker container (WordPress + MariaDB)
├── .env.example                   # Contoh variabel environment server produksi
├── deploy_server.sh               # Script otomatisasi deploy satu perintah di server
└── package_theme.sh               # Script pembuat bundle zip tema (snaprint-theme.zip)
```

---

## 🛠️ Panduan Deployment ke Server Production (VPS `/opt`)

### Opsi 1: Menggunakan Docker Compose (Direkomendasikan di `/opt`)

1. **Clone repository ke folder proyek di server**:
   ```bash
   cd /opt
   git clone -b wp-version https://github.com/ashabilsyauqi/Snaprint.git snaprint
   cd snaprint
   ```

2. **Sesuaikan konfigurasi environment**:
   ```bash
   cp .env.example .env
   nano .env
   ```
   *(Tentukan port HTTP, nama database, dan password aman).*

3. **Jalankan container**:
   ```bash
   ./deploy_server.sh
   ```

4. **Import database dengan domain server Anda**:
   ```bash
   # Ganti 'mysnaprint.com' dengan domain Anda:
   ./database/prepare_production_db.sh mysnaprint.com

   # Import ke container MariaDB:
   docker compose exec -T snaprint-db mysql -u snaprint_user -p snaprint_db < database/snaprint_db_production.sql
   ```

---

### Opsi 2: Upload ZIP ke WordPress yang Sudah Ada di Server

Jika server Anda sudah memiliki WordPress aktif:

1. Buat paket ZIP tema di komputer lokal:
   ```bash
   ./package_theme.sh
   ```
2. File `snaprint-theme.zip` akan terbentuk.
3. Buka **WP Admin > Tampilan (Appearance) > Tema (Themes) > Tambah Baru (Add New) > Unggah Tema (Upload Theme)**.
4. Pilih file `snaprint-theme.zip` dan klik **Aktifkan (Activate)**.
5. Import konten atau database menggunakan plugin *All-in-One WP Migration* atau via phpMyAdmin.

---

## 🔐 Akun Administrator Default (Local/Fresh DB)

- **URL Admin**: `/wp-admin`
- **Username**: `admin`
- **Password**: `admin123`
*(Sangat disarankan segera mengganti password administrator setelah live di server).*
