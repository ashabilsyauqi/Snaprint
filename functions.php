<?php
/**
 * Snaprint Digital Printing Theme Functions
 *
 * @package Snaprint
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Theme Setup
 */
function snaprint_theme_setup() {
    // Make theme available for translation.
    load_theme_textdomain( 'snaprint', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Set custom logo support.
    add_theme_support( 'custom-logo', array(
        'height'      => 80,
        'width'       => 240,
        'flex-width'  => true,
        'flex-height' => true,
    ) );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    // Gutenberg Core Supports
    add_theme_support( 'align-wide' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );

    // Responsive embedded content
    add_theme_support( 'responsive-embeds' );

    // Register Navigation Menus
    register_nav_menus( array(
        'primary' => __( 'Menu Navigasi Utama', 'snaprint' ),
        'footer'  => __( 'Menu Navigasi Footer', 'snaprint' ),
    ) );
}
add_action( 'after_setup_theme', 'snaprint_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function snaprint_scripts() {
    // External Icon Libraries
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), '6.5.1' );

    // Theme Styles
    wp_enqueue_style( 'snaprint-base-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
    wp_enqueue_style( 'snaprint-components', get_template_directory_uri() . '/css/components.css', array('snaprint-base-style'), '1.0.0' );
    wp_enqueue_style( 'snaprint-style', get_stylesheet_uri(), array('snaprint-components'), '1.0.0' );

    // External Script
    wp_enqueue_script( 'lucide-icons', 'https://unpkg.com/lucide@latest', array(), null, true );

    // Custom Scripts
    wp_enqueue_script( 'snaprint-products-data', get_template_directory_uri() . '/js/products-data.js', array(), '1.0.0', true );
    wp_enqueue_script( 'snaprint-calculator', get_template_directory_uri() . '/js/calculator.js', array('snaprint-products-data'), '1.0.0', true );
    wp_enqueue_script( 'snaprint-app', get_template_directory_uri() . '/js/app.js', array('snaprint-products-data'), '1.0.0', true );
    wp_enqueue_script( 'snaprint-main', get_template_directory_uri() . '/js/main.js', array('snaprint-products-data'), '1.0.0', true );

    // Pass data to JS
    wp_localize_script( 'snaprint-main', 'snaprintData', array(
        'templateUrl' => get_template_directory_uri(),
        'siteUrl'     => home_url(),
        'waCs'        => '6281311933172',
        'waFranchise' => '6287781047453',
    ) );
}
add_action( 'wp_enqueue_scripts', 'snaprint_scripts' );

/**
 * Fallback menu if no menu is configured in WordPress Admin
 */
function snaprint_fallback_menu() {
    ?>
    <ul class="nav-menu" id="nav-menu">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>">Beranda</a></li>
        <li><a href="<?php echo esc_url( home_url( '/tentang' ) ); ?>" class="nav-link <?php echo is_page( 'tentang' ) ? 'active' : ''; ?>">Tentang Kami</a></li>
        <li><a href="<?php echo esc_url( home_url( '/layanan' ) ); ?>" class="nav-link <?php echo is_page( 'layanan' ) ? 'active' : ''; ?>">Layanan & Produk</a></li>
        <li><a href="<?php echo esc_url( home_url( '/kalkulator' ) ); ?>" class="nav-link <?php echo is_page( 'kalkulator' ) ? 'active' : ''; ?>">Kalkulator Cetak</a></li>
        <li><a href="<?php echo esc_url( home_url( '/panduan' ) ); ?>" class="nav-link <?php echo is_page( 'panduan' ) ? 'active' : ''; ?>">Panduan File</a></li>
        <li><a href="<?php echo esc_url( home_url( '/galeri' ) ); ?>" class="nav-link <?php echo is_page( 'galeri' ) ? 'active' : ''; ?>">Galeri Toko</a></li>
        <li><a href="<?php echo esc_url( home_url( '/franchise' ) ); ?>" class="nav-link <?php echo is_page( 'franchise' ) ? 'active' : ''; ?>">Franchise</a></li>
        <li><a href="<?php echo esc_url( home_url( '/kontak' ) ); ?>" class="nav-link <?php echo is_page( 'kontak' ) ? 'active' : ''; ?>">Kontak & Lokasi</a></li>
    </ul>
    <?php
}

/**
 * Register widget area / sidebars.
 */
function snaprint_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget Area', 'snaprint' ),
        'id'            => 'footer-1',
        'description'   => __( 'Tambahkan widget di area footer ini.', 'snaprint' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'snaprint_widgets_init' );
