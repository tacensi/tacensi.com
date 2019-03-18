<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tacensi
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php //tacensi_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tacensi' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<div class="entry-meta">
		<a href="<?php the_permalink(); ?>" title="Permalink">#</a>
		<?php
			tacensi_posted_on();
		?>
	</div><!-- .entry-meta -->
	<footer class="entry-footer">
		<?php //tacensi_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
