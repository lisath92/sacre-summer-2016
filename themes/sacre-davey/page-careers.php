<?php
/** Template Name: Careers
 * The template for displaying all pages.
 *
 * @package Sacre Davey Theme
 */

get_header(); 
wp_nav_menu( array( 'theme_location' => 'about-us', 'container_class' => 'about-menu') );?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<section class="careers-hero-image">
				<h1><?php echo CFS()->get('careers_headline'); ?></h1>
			</section>
			<div class="entry-content">
				<div class="main-content">
					<p><?php echo CFS()->get('careers_main_content'); ?></p>
				</div>
				<section class="life-work-banner-wrapper">
					<div>
						<h2><?php echo CFS()->get('careers_tagline'); ?></h2>
					</div>
					<p><?php echo CFS()->get('careers_sub_content'); ?></p>
					
				</section>
				<section class="job-board">
					<?php echo CFS()->get('opportunities'); ?>
				</section>
				<section class="join-team-banner">
					<div class="international-team">
						<p>Interested in working for our office in the UAE? Send your information to: </p>
						<p><a href="mailto:admin-me@sacre-davey.com" target="blank">admin-me@sacre-davey.com.</a></p>
					</div>
				</section>

			</div><!-- .entry-content -->
		</article><!-- #post-## -->
		

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
