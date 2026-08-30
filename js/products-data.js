/* ==========================================================================
   SNAPRINT DIGITAL PRINTING - PRODUCTS DATA REGISTRY
   Authoritative Product Specifications & Pricing Matrix
   ========================================================================== */

(function() {
  const getThemeAsset = function(path) {
    if (typeof window !== 'undefined' && window.snaprintData && window.snaprintData.templateUrl) {
      return window.snaprintData.templateUrl + '/' + path;
    }
    return path;
  };

  const SNAP_PRODUCTS = [
    {
      id: 'banner-flexi',
      name: 'Banner Flexi Outdoor & Indoor',
      category: 'promosi',
      categoryName: 'Promosi & Display',
      priceStarting: 18000,
      unit: 'm²',
      badge: 'Best Seller',
      image: getThemeAsset('assets/images/snaprint-storefront.png'),
      description: 'Cetak Spanduk & Banner outdoor tahan panas/hujan dengan mesin digital printing beresolusi tinggi.',
      materials: ['Flexi Standard 280g', 'Flexi Medium 340g', 'Flexi High-Res Korchin 440g'],
      finishings: ['Mata Ayam (Slongsong)', 'Lipat Pres Saja', 'Kosongan (Tanpa Lipat)'],
      minOrder: 1,
      calcType: 'area'
    },
    {
      id: 'stiker-custom',
      name: 'Stiker Vinyl & Chromo Custom',
      category: 'merchandise',
      categoryName: 'Merchandise & Branding',
      priceStarting: 15000,
      unit: 'lembar A3+',
      badge: 'Popular',
      image: getThemeAsset('assets/images/snaprint-interior.png'),
      description: 'Stiker label kemasan & branding produk waterproof, daya rekat kuat, plus opsi Kiss-Cut/Die-Cut.',
      materials: ['Stiker Vinyl Glossy (Waterproof)', 'Stiker Vinyl Matte/Doff', 'Stiker Transparan', 'Stiker Chromo Paper'],
      finishings: ['Tanpa Cut (Lembaran)', 'Kiss-Cut (Tinggal Kelupas)', 'Die-Cut (Putus Sesuai Bentuk)'],
      minOrder: 5,
      calcType: 'quantity'
    },
    {
      id: 'kartu-nama',
      name: 'Kartu Nama Bisnis Exclusive',
      category: 'branding',
      categoryName: 'Branding & Stationeries',
      priceStarting: 35000,
      unit: 'box (100 pcs)',
      badge: 'Wajib Punya',
      image: getThemeAsset('assets/images/snaprint-facade.png'),
      description: 'Kartu nama profesional dengan bahan tebal, cetak 2 sisi presisi warna tinggi plus box mika gratis.',
      materials: ['Art Paper 260g Extra White', 'BW Lokal 250g (Serat Halus)', 'Linen Japan Premium'],
      finishings: ['Tanpa Laminasi', 'Laminasi Doff 2 Sisi', 'Laminasi Glossy 2 Sisi', 'Rounded Corner (Sudut Tumpul)'],
      minOrder: 1,
      calcType: 'quantity'
    },
    {
      id: 'print-a3plus',
      name: 'Cetak Digital A3+ Presisi',
      category: 'dokumen',
      categoryName: 'Dokumen & Digital',
      priceStarting: 6000,
      unit: 'lembar',
      badge: 'Cepat & Tajam',
      image: getThemeAsset('assets/images/snaprint-interior.png'),
      description: 'Cetak poster, cover buku, sertifikat & media promosi ukuran A3+ (32 x 48 cm) warna tajam tak mudah luntur.',
      materials: ['Art Paper 150g', 'Art Carton 210g', 'Art Carton 260g', 'Art Carton 310g', 'Matte Paper 120g'],
      finishings: ['Tanpa Finishing', 'Laminasi Doff 1 Sisi', 'Laminasi Glossy 1 Sisi'],
      minOrder: 5,
      calcType: 'quantity'
    },
    {
      id: 'lanyard-idcard',
      name: 'Lanyard & Tali ID Card Custom',
      category: 'branding',
      categoryName: 'Branding & Stationeries',
      priceStarting: 12500,
      unit: 'pcs',
      badge: 'Corporate Choice',
      image: getThemeAsset('assets/images/snaprint-facade.png'),
      description: 'Tali lanyard printing full color 2 sisi lebar 2cm lengkap dengan kait besi & stopper elastis.',
      materials: ['Tissue Premium 2cm', 'Nylon Shiny 2cm'],
      finishings: ['Stopper + Hook Putar', 'Hook Sahaja', 'Include Holder ID Card Transparan'],
      minOrder: 10,
      calcType: 'quantity'
    },
    {
      id: 'plakat-akrilik',
      name: 'Plakat Akrilik & Trophy UV',
      category: 'merchandise',
      categoryName: 'Merchandise & Custom',
      priceStarting: 75000,
      unit: 'pcs',
      badge: 'Premium Award',
      image: getThemeAsset('assets/images/snaprint-storefront.png'),
      description: 'Souvenir penghargaan akrilik custom potong laser (Laser Cut) dengan cetak Flatbed UV anti gores.',
      materials: ['Akrilik Bening 3mm', 'Akrilik Bening 5mm', 'Akrilik Bening 8mm'],
      finishings: ['Dudukan Akrilik Hitam', 'Dudukan Kayu Polish', 'Box Bludru Exclusive'],
      minOrder: 1,
      calcType: 'quantity'
    },
    {
      id: 'stempel-flash',
      name: 'Stempel Flash Otomatis',
      category: 'branding',
      categoryName: 'Branding & Stationeries',
      priceStarting: 45000,
      unit: 'pcs',
      badge: 'Praktis',
      image: getThemeAsset('assets/images/snaprint-interior.png'),
      description: 'Stempel otomatis warna tanpa butuh bantalan tinta terpisah. Bisa 1 hingga 3 warna sekaligus.',
      materials: ['Gagang Bulat (D: 30-45mm)', 'Gagang Persegi Panjang', 'Gagang Oval'],
      finishings: ['1 Warna Tinta', '2 Warna Tinta', '3 Warna Tinta (Gradient/Multi)'],
      minOrder: 1,
      calcType: 'quantity'
    },
    {
      id: 'mug-custom',
      name: 'Mug & Tumbler Custom Branding',
      category: 'merchandise',
      categoryName: 'Merchandise & Custom',
      priceStarting: 25000,
      unit: 'pcs',
      badge: 'Souvenir Favorit',
      image: getThemeAsset('assets/images/snaprint-facade.png'),
      description: 'Mug keramik SNI cetak digital sublimasi tajam & anti pudar. Cocok untuk hadiah event & souvenir kantor.',
      materials: ['Mug Keramik Putih SNI 11oz', 'Tumbler Stainless LED Suhu 500ml'],
      finishings: ['Cetak Full Color + Dus Box Individual'],
      minOrder: 6,
      calcType: 'quantity'
    },
    {
      id: 'rollup-banner',
      name: 'X-Banner & Roll-Up Display',
      category: 'promosi',
      categoryName: 'Promosi & Display',
      priceStarting: 65000,
      unit: 'set',
      badge: 'Display Pameran',
      image: getThemeAsset('assets/images/snaprint-storefront.png'),
      description: 'Standing banner lengkap dengan tiang penyangga fiber/alumunium dan sarung pembungkus portable.',
      materials: ['X-Banner Fiber 60x160cm', 'Y-Banner Alumunium 60x160cm', 'Roll-Up Banner Premium Alumunium 80x200cm'],
      finishings: ['Cetak Flexi Korchin 440g', 'Cetak Albatros Matte + Laminasi'],
      minOrder: 1,
      calcType: 'quantity'
    }
  ];

  if (typeof window !== 'undefined') {
    window.SNAP_PRODUCTS = SNAP_PRODUCTS;
  }
})();
