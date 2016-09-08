
<?php
/** Template Name: Services
 * The template for displaying all pages.
 *
 * @package Sacre Davey Theme
 */

 ?>
	<header class="entry-header">
	 <img src="../../assets/images/ServiceHeader.png">
	</header><!-- .entry-header -->
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
