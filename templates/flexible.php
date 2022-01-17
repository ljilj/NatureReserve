<?php
/**
 * Template Name: Flexible
 */

get_header(); ?>

  <div id="primary" class="content-area">

    <main id="main" class="site-main">

		<?php
		if( is_page() && !is_front_page() ) : ?>

			<?php

				get_template_part( 'template-parts/component/page_header' );

			?>

		<?php endif; ?>

	  	<?php
		if( function_exists('have_rows') ) :

			if ( have_rows('flexible') ) :

				while ( have_rows('flexible') ): the_row();

					if( get_sub_field('visible') )
						get_template_part('template-parts/flexible/' . get_row_layout());

				endwhile;

			endif;

		endif;

		?>

    </main><!-- #main -->

  </div><!-- #primary -->

<?php
get_footer();
