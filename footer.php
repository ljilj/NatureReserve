<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package NatureReserve
 */

?>
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

			<?php
			if ( is_front_page() || is_home() ) {
				?>
				<div class="subscribe">
					<div class="container">
						<div class="row">
							<div class="subscribe__wrap col-lg-12">
								<div class="subscribe__wrap-inner">
									<div class="subscribe__text col-lg-6 co-md-12">
										<p><?php _e('Subscribe to our newsletter', 'NatureReserve') ?></p>
									</div>
									<div class="subscribe__form col-lg-6 col-md-12">
										<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 3, 'title' => false, 'description' => false ) ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
				} else {
					// Nothing
				}
			?>

				<div class="widget-wrapper">
					<div class="container">
						<div class="row footer-widgets-wrapper">
							<?php get_template_part('template-parts/footer', 'widgets'); ?>
						</div>
						<!-- <?php echo the_social_links(); ?> -->
					</div>
				</div>

				<?php if (get_theme_mod('footer_customizer_text') != ''): ?>
					<div class="site-info">
						<span class="footer__left"></span>
						<span class="footer__right"></span>
						<div class="container">
							<div class="footer-copyright col-md-12 align-center">
								<p class="copyright-parahraph"><?php echo get_theme_mod('footer_customizer_text'); ?></p>
								<?php echo the_social_links(); ?>
							</div>
						</div>
					</div><!-- .site-info -->
				<?php endif; ?>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<!-- W3TC-include-css -->
		<?php wp_footer(); ?>
	<!-- W3TC-include-js-head -->
	</body>
</html>
