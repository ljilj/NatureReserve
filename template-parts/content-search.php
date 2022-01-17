<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package NatureReserve
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('search-resoults-section'); ?>>
	<header class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php
		if( 'iabm-reserve' == get_post_type() ) : ?>
		<div class="post-type">
			<p class="post-type-name"><?php echo _e('Imam Abdulaziz Bin Muhammad', 'NatureReserve'); ?></p>
		</div><!-- .post-type -->
		<?php endif;?>

		<?php
		if( 'king-khalid-reserve' == get_post_type() ) : ?>
		<div class="post-type">
			<p class="post-type-name"><?php echo _e('King Khalid Royal Reserve', 'NatureReserve'); ?></p>
		</div><!-- .post-type -->
		<?php endif;?>

		<?php
		if( 'recruitment' == get_post_type() ) : ?>
		<div class="post-type">
			<p class="post-type-name"><?php echo _e('Recruitment', 'NatureReserve'); ?></p>
		</div><!-- .post-type -->
		<?php endif;?>

		<?php
		if( 'post' == get_post_type() && get_field( 'date' ) ) : ?>
		<div class="post-type">
			<p class="post-type-name"><?php echo _e('Event', 'NatureReserve'); ?></p>
		</div><!-- .post-type -->
		<?php endif;?>

	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php
		if( get_the_content() ) {
			echo wp_trim_words( get_the_content(), 55, '...' );
		}
		?>

		<?php
		if( get_field( 'content' )) {
			echo wp_trim_words( get_field( 'content' ), 55, '...' );
		}
		?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->
