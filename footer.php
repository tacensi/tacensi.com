<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tacensi
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div class="container">

			<div class="site-info">
				<p>
					<?php _e( 'Made with <3 and ', 'tacensi') ?>
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tacensi' ) ); ?>" target="_blank" rel="noopener">
						WordPress
					</a>
				</p>
				<p>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s based on %2$s.', 'tacensi' ), 'tacensi', '<a href="http://underscores.me/" target="_blank" rel="noopener">Underscores.me</a>' );
					?>
				</p>
			</div><!-- .site-info -->

		</div>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
