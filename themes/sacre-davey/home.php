<?php
/**
 * The main template file.
 *
 * @package Sacre Davey Theme
 */

get_header(); 
wp_nav_menu( array('theme_location' => 'about-us', 'container_class' => 'about-menu') ); 

?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<section class="news-header">

					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</section>
			<?php endif; ?>
			<section class="news-wrapper">
<div class="news-articles">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php //get_template_part( 'template-parts/content' ); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>

						<?php the_title( sprintf( '<h2 class="news-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_excerpt(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; ?>
			</div>
			<?php get_sidebar(); ?>

			<?php //the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
