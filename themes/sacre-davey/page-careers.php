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
					<h2><?php echo CFS()->get('careers_tagline'); ?></h2>
					<p><?php echo CFS()->get('careers_sub_content'); ?></p>
					
				</section>
				<div class="opportunities-banner-wrapper">
				<h1 class="opportunities-banner">Opportunities</h1>
				<div class="select-wrapper">
				<div>
				<span class="dropdown-titles">Locations:</span><select class="opportunity-dropdowns" name="location"></select>
				</div>
				<div>
				<span class="dropdown-titles">Field:</span><select class="opportunity-dropdowns" name="field"></select>
				</div>
				</div>
				</div>
				<div class="opportunities-wrapper">
					
					<ul class="canadian-opportunities">
						<li><span class="opportunities-title">Calgary, Canada</span>
							<ul>
								<li class="job-positions">Intermediate Process Engineer</li>
							</ul>
						</li>
					</ul>
					
					<ul class="american-opportunities">
						<li><span class="opportunities-title">Seattle, USA</span>
							<ul>
								<li class="job-positions">Office &amp; Finance Manager</li>
								<li class="job-positions">Senior Process Engineer, SDE3</li>
							</ul>
						</li>
					</ul>	
				</div>
				<div class="join-team-banner">
					<div class="north-american-team">
						<p>To become a part of our North American teams, email:</p>
						<a href="">makingadifference@sacre-davey.com.</a>
					</div>
					<div class="international-team">
						<p>Interested in working for our office in the UAE?</p>
						<a href="">admin-me@sacre-davey.com.</a>
					</div>

				</div>
				<?php the_content(); ?>

			</div><!-- .entry-content -->
		</article><!-- #post-## -->
		

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
