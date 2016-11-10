<?php
/**
 * Template part for displaying single posts.
 *
 * @package Sacre Davey Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="news-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<div class="news-excerpt">
			<?php the_content(); ?>
			<div class="author-date">
			<?php red_starter_posted_on(); ?> / <?php red_starter_posted_by(); ?>
			</div>
		</div>


		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
			'after'  => '</div>',
			) );
			?>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
