<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer..org/themes/basics/template-files/#template-partials
 *
 * @package 
 * @subpackage Kit
 * @since Kit 1.0
 */

?>
			<footer id="site-footer" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'kit' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><!-- .footer-copyright -->

						<?php
						if ( function_exists( 'the_privacy_policy_link' ) ) {
							the_privacy_policy_link( '<p class="privacy-policy">', '</p>' );
						}
						?>

						<p class="powered-by-">
							<a href="<?php echo esc_url( __( 'https://.org/', 'kit' ) ); ?>">
								<?php _e( 'Powered by ', 'kit' ); ?>
							</a>
						</p><!-- .powered-by- -->

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'kit' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'kit' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
