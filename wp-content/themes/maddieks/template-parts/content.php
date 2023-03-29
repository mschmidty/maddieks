<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package maddie-ks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php maddieks_post_thumbnail(); ?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				maddieks_posted_on();
				?><?php
				maddieks_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		if(is_front_page() || is_archive() ):
			the_excerpt();
		else:

			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'maddieks' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			);
		endif;
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maddieks' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
	<footer class="entry-footer">
		<?php maddieks_entry_footer(); ?>
		<?php  if(is_front_page() || is_archive() ):?>
			<a class="read-more" href="<?php the_permalink();?>">Read More</a>
		<?php endif; ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
