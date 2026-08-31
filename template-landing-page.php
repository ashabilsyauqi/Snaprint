<?php
/**
 * Template Name: Landing Page (Gutenberg Canvas)
 * Description: Template khusus untuk membuat Ads Landing Page dengan Gutenberg Block Editor (Full Width & Clean).
 *
 * @package Snaprint
 * @version 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main landing-page-canvas">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>

<?php
get_footer();
