<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sacre Davey Theme
 */

get_header(); 
wp_nav_menu( array('theme_location' => 'about-us', 'container_class' => 'about-menu') ); 

?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="news-wrapper">
			<div class="news-articles">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single' ); ?>
				
					<?php
				// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // End of the loop. ?>
			</div>
			<?php get_sidebar(); ?>

		</section>

		<!-- <div style="text-align:center;"> -->

		<!-- </div> -->
	</main><!-- #main -->
</div><!-- #primary -->




<?php get_footer(); ?>
