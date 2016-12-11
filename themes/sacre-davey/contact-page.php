<?php
/** Template Name: Contact Page
 * The template for displaying all pages.
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
					<div id="contact-hero" class="hero">
					<h1><?php echo CFS()->get('contact_headline'); ?></h1>
	</header> <!-- .entry-header-->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content-->
</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		<div class="offices-wrapper container">
			<div class="office-block">
				<h2>Canada</h2>
				<h3>Sacre-Davey Head Office</h3>
				<div class="office-address">
					<p>315 Mountain Hwy
					North Vancouver, BC, V7J 2K7
					Canada</p>
				</div>
				<ul class="office-contact">
					<li>Phone: (604) 986-0663</li>
					<li>Fax: (604) 986-0525</li>
					<li>Email: <a href="mailto:admin@sacre-davey.com" target="blank">admin@sacre-davey.com</a></li>
				</ul>
				<h3>Sacre-Davey Calgary Office</h3>
				<div class="office-address">
					<p>1300 8th Street SW Suite #403
					Calgary, Alberta, T2R 1B2
					Canada</p>
				</div>
				<ul class="office-contact">
					<li>Phone: 403-455-2583</li>
					<li>Email: <a href="mailto:admin-ab@sacre-davey.com">admin-ab@sacre-davey.com</a></li>
				</ul>
			</div>
			<div class="office-block">
				<h2>United States Office</h2>
				<h3>SD3</h3>
				<div class="office-address">
					<p>2200 Sixth Avenue
					Suite #520
					Seattle, WA 98121
					USA</p>
				</div>
				<ul class="office-contact">
					<li>Phone: 1-206-462-3600</li>
					<li>Fax: 1-206-462-3599</li>
					<li>Email: <a href="mailto:solutions@e3energypartners.com">solutions@e3energypartners.com</a></li>
				</ul>
			</div>					
			<div class="office-block">
				<h2>Associated Offices</h2>
				<h3>Sacre-Davey Group International</h3>
				<div class="office-address">
					<p>PO BOX 111751<br/>
					Abu Dhabi<br/>
					United Arab Emirates</p>
				</div>
				<ul class="office-contact">
					<li>Phone: 971-02-650-9440</li>
					<li>Fax: 971-02-650-9441</li>
					<li>Email: <a href="mailto:admin-me@sacre-davey.com">admin-me@sacre-davey.com</a></li>
				</ul>
			</div>	
			<div class="office-block">
				<h2>Canadian Regional Offices</h2>
				<div class="office-address">
					<p>Toronto, Ontario
					Vernon, British Columbia<br/>
					Regina, Saskatchewan</p>
				</div>
				<ul class="office-contact">
					<li>Please contact our Head Office for regional office information</li>
					<li>Phone: 604-986-0663</li>
					<li>Email: <a href="mailto:admin@sacre-davey.com">admin@sacre-davey.com</a></li>
				</ul>

			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
