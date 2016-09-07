<?php
/** Template Name: Contact Page
 * The template for displaying all pages.
 *
 * @package Sacre Davey Theme
 */

?>
<header class="entry-header">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</header><!-- .entry-header -->

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>
		<div class="offices-wrapper">
			<div class="office-block">
				<h2>Canada</h2>
				<h3>Sacre-Davey Head Office</h3>
				<div class="office-address">
					<p>315 Mountain Hwy</p>
					<p>North Vancouver, BC, V7J 2K7</p>
					<p>Canada</p>
				</div>
				<div class="office-contact">
					<p>Phone: (604) 986-0663</p>
					<p>Fax: (604) 986-0525</p>
					<p>Email: admin@sacre-davey.com</p>
				</div>
				<h3>Sacre-Davey Calgary Office</h3>
				<div class="office-address">
					<p>1300 8th Street SW Suite #403</p>
					<p>Calgary, Alberta, T2R 1B2</p>
					<p>Canada</p>
				</div>
				<div class="office-contact">
					<p>Phone: 403-455-2583</p>
					<p>Email: admin-ab@sacre-davey.com</p>
				</div>
			</div>
			<div class="office-block">
				<h2>United States Office</h2>
				<h3>SD3</h3>
				<div class="office-address">
					<p>2200 Sixth Avenue</p>
					<p>Suite #520</p>
					<p>Seattle, WA 98121</p>
					<p>USA</p>
				</div>
				<div class="office-contact">
					<p>Phone: 1-206-462-3600</p>
					<p>Fax: 1-206-462-3599</p>
				</div>
			</div>					
			<div class="office-block">
				<h2>Associated Offices</h2>
				<h3>Sacre-Davey Group International</h3>
				<div class="office-address">
					<p>PO BOX 111751</p>
					<p>Abu Dhabi</p>
					<p>United Arab Emirates</p>
				</div>
				<div class="office-contact">
					<p>Phone: 971-02-650-9440</p>
					<p>Fax: 971-02-650-9441</p>
					<p>Email: admin-me@sacre-davey.com</p>
				</div>
			</div>	
			<div class="office-block">
				<h2>Canadian Regional Offices</h2>
				<div class="office-address">
					<p>Toronto, Ontario</p>
					<p>Vernon, British Columbia</p>
					<p>Regina, Saskatchewan</p>
				</div>
				<div class="office-contact">
					<p>Please contact our Head Office for regional office information</p>
					<p>Phone: 604-986-0663</p>
					<p>Email: admin@sacre-davey.com</p>
				</div>

			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
