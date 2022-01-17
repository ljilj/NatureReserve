<?php
/**
 * The template for displaying search results pages.
 *
 * @package NatureReserve
 */

get_header(); ?>

<div class="page-header">
	<div class="container">
		<div class="row page-header__wrap">
			<div class="page-header__info col-lg-12">

				<h1 class="page-header__title">
					<?php
					/* translators: %s: search term */
					printf( esc_html__( 'Search Results for: %s', 'NatureReserve' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>

			</div>

		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<section id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<div class="container">
					<?php if ( have_posts() ) : ?>

					<?php

					while ( have_posts() ) :
						the_post();
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */

						get_template_part( 'template-parts/content', 'search' );
					endwhile;
					?>

					<?php NatureReserve_post_navigation(); ?>

					<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
				</div>
			</main><!-- #main -->
		</section><!-- #primary -->
	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
