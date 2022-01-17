<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package NatureReserve
 */

get_header(); ?>

<div class="page-header">
    <div class="container">
        <div class="row page-header__wrap">
            <div class="page-header__info col-lg-9">

			<?php the_title( '<h1 class="page-header__title">', '</h1>' ); ?>

            </div>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : ?>

					<?php the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php endwhile; // End of the loop. ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
