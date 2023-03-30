<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maddie-ks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(has_post_thumbnail()): ?>
	<div class="search-result-thumbnail">
		<?php maddieks_post_thumbnail(); ?>
	</div>
	<div class="search-result-text">
	<?php endif; ?>	
	
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			maddieks_posted_on();
			maddieks_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php maddieks_entry_footer(); ?>
		<a class="read-more" href="<?php the_permalink();?>">Read More</a>
	</footer><!-- .entry-footer -->
	<?php if(has_post_thumbnail()): ?>
	</div>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
