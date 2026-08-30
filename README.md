# Snaprint Digital Printing - WordPress Theme

Tema WordPress kustom resmi untuk **Snaprint Digital Printing Bekasi**.

## Fitur Utama
- **Kalkulator Cetak Interaktif**: Menghitung estimasi biaya cetak (area m² atau kuantitas) dan mengirimkan pesanan langsung ke WhatsApp Customer Service.
- **Katalog Produk Dinamis**: Filter kategori produk (Promosi, Branding, Merchandise, Dokumen).
- **Portal Kemitraan Franchise**: Paket investasi Silver, Gold, dan Master Franchise Kota lengkap dengan formulir proposal.
- **Showcase Galeri Outlet**: Lightbox modal viewer untuk dokumentasi workshop dan mesin cetak.
- **Panduan Siap Cetak (Print Guidelines)**: Panduan SOP format file (CMYK, 300 DPI, Bleed 3mm).
- **Mobile Responsive & Dark Mode Support**: Tampilan optimal di semua resolusi perangkat.

## Struktur File Tema
```
├── style.css                 # Metadata tema & import stylesheet
├── screenshot.png            # Preview tema di dashboard WP
├── functions.php             # Enqueue scripts/styles, menu, theme supports
├── header.php                # Announcement bar & navigation
├── footer.php                # Footer multi-kolom, WhatsApp widget & popup modal
├── front-page.php            # Template Beranda
├── page.php                  # Template Halaman Standar
├── single.php                # Template Artikel Blog
├── index.php                 # Fallback Template
├── 404.php                   # Halaman 404
├── page-tentang.php          # Template Tentang Kami
├── page-layanan.php          # Template Katalog Layanan
├── page-kalkulator.php       # Template Kalkulator Cetak
├── page-panduan.php          # Template Panduan File
├── page-galeri.php           # Template Galeri Toko
├── page-franchise.php        # Template Franchise & Kemitraan
├── page-kontak.php           # Template Kontak & Lokasi
├── css/                      # Stylesheet dasar & komponen
├── js/                       # Engine kalkulator, produk data & controller
└── assets/images/            # Foto fasad, interior, dan display cetak
```

## Cara Instalasi di WordPress
1. Kompres/zip folder ini atau unggah langsung ke direktori `wp-content/themes/snaprint`.
2. Buka Dashboard WordPress > **Tampilan (Appearance)** > **Tema (Themes)**.
3. Aktifkan tema **Snaprint Digital Printing**.
4. Buat halaman baru di menu **Laman (Pages)** dan pilih atribut template yang sesuai (misal: *Kalkulator Cetak*, *Tentang Kami*, *Franchise*, dll.).
5. Atur menu navigasi pada **Tampilan (Appearance)** > **Menu**.
