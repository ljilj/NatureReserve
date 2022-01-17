<?php
/**
 * The template for displaying all single posts.
 *
 * @package NatureReserve
 */

get_header(); ?>

<div class="page-header">
    <div class="container">
        <div class="row page-header__wrap">
            <div class="page-header__info col-lg-9">
				<div class="page-header-subtitle">
					<?php
					$theParent = get_post_type_object( 'recruitment' );
					?>
				</div>

				<p class="page-header__cpt-name"><i><?php echo $theParent->labels->singular_name; ?></i></p>
				<h1 class="page-header__title"><?php echo the_title(); ?></h1>

            </div>

        </div>
    </div>
</div>

<div class="container recruitment__single">
	<div class="row">
		<div id="primary" class="content-area col-lg-9 col-md-12">
			<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) :
					the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="entry-content">
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'NatureReserve' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->

						<footer class="entry-footer">
							<?php NatureReserve_entry_footer(); ?>
						</footer><!-- .entry-footer -->
					</article><!-- #post-## -->

				<?php endwhile; // End of the loop. ?>

				<?php

				$title = get_field( 'title', 'option' );
				$text  = get_field( 'text', 'option', false );

				?>

				<?php
				if( $text || $title ) :
				?>

					<div class="recruitment__info col-lg-11 col-md-12">

					<?php
					if( $title ) :
					?>

						<h4><?php echo $title; ?></h4>

					<?php endif; ?>

					<?php
					if( $text ) :
					?>

						<p><?php echo $text; ?></p>

					<?php endif; ?>

					</div>

				<?php else: ?>
					<?php // Nothing here ?>
				<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->

	</div><!-- .row -->
</div><!-- .container -->

<?php get_footer(); ?>
