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
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	
	<div class="entry-content container">
		<?php the_content(); ?>
	<!-- 	<p>If you have any questions or requests regarding our services, please contact one of our offices below or fill out the contact form.</p>

        <p>We will get back to you as soon as possible</p> -->
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
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
				<div class="office-contact">
					<p>Phone: (604) 986-0663<br/>
					Fax: (604) 986-0525<br/>
					Email: admin@sacre-davey.com</p>
				</div>
				<h3>Sacre-Davey Calgary Office</h3>
				<div class="office-address">
					<p>1300 8th Street SW Suite #403
					Calgary, Alberta, T2R 1B2
					Canada</p>
				</div>
				<div class="office-contact">
					<p>Phone: 403-455-2583<br/>
					Email: admin-ab@sacre-davey.com</p>
				</div>
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
				<div class="office-contact">
					<p>Phone: 1-206-462-3600<br/>
					Fax: 1-206-462-3599<br/>
					Email: solutions@e3energypartners.com</p>
				</div>
			</div>					
			<div class="office-block">
				<h2>Associated Offices</h2>
				<h3>Sacre-Davey Group International</h3>
				<div class="office-address">
					<p>PO BOX 111751<br/>
					Abu Dhabi<br/>
					United Arab Emirates</p>
				</div>
				<div class="office-contact">
					<p>Phone: 971-02-650-9440<br/>
					Fax: 971-02-650-9441<br/>
					Email: admin-me@sacre-davey.com</p>
				</div>
			</div>	
			<div class="office-block">
				<h2>Canadian Regional Offices</h2>
				<div class="office-address">
					<p>Toronto, Ontario
					Vernon, British Columbia<br/>
					Regina, Saskatchewan</p>
				</div>
				<div class="office-contact">
					<p>Please contact our Head Office for regional office information<br/>
					Phone: 604-986-0663<br/>
					Email: admin@sacre-davey.com</p>
				</div>

			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
