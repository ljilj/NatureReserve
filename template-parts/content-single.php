<?php
/**
 * Template part for displaying single posts.
 * Also, if have posts for Reserves "King Khalid" and "IAMB"
 *
 * @package NatureReserve
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="entry-content col-md-8">

			<?php
			if( 'king-khalid-reserve' == get_post_type() || 'iabm-reserve' == get_post_type() ) :
			?>

				<?php $reserve_content = get_field( 'content' ); ?>

				<div class="reverse-content__content">
						<div class="reserve-content__content--text">
							<?php echo $reserve_content; ?>
						</div>

						<div class="reserve-content__content--image">

						<?php

							$content_image = get_field( 'content_image' );
							$size = 'reserve-post';

						?>

						<?php if ( $content_image ) :
						?>

							<?php echo wp_get_attachment_image( $content_image, $size ); ?>

						<?php endif; ?>

						</div>
					</div>

			<?php endif; ?>

			<?php the_content(); ?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'NatureReserve' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<?php

		get_template_part( 'template-parts/component/reserve_info_sidebar' );

		?>

	</div>
</article><!-- #post-## -->

