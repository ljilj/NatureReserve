<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package NatureReserve
 */

get_header(); ?>

<header class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'NatureReserve'); ?></h1>
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'NatureReserve'); ?></p>
            </div>
        </div>
    </div>
</header><!-- .page-header -->

<?php get_footer(); ?>
