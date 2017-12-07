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
					<h1><?php 
					$lang = qtranxf_getLanguage();
					echo CFS()->get('contact_headline_'.$lang); ?></h1>

	</header> <!-- .entry-header-->
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content-->
</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>
		<section class="offices">
			<div class="office-block">
				<h2>Canada</h2>
				<div class="contact">
					<h3>Sacré-Davey Head Office</h3>
					<p>315 Mountain Hwy North Vancouver, BC, V7J 2K7</p>
					<ul>
						<li><? if ($lang == 'fr') {
							echo 'Téléphone';
						} else {
							echo 'Phone';
						}; ?>: (604) 986-0663</li>
						<li><? if ($lang == 'fr') {
							echo 'Télécopieur';
						} else {
							echo 'Fax';
						}; ?>: (604) 986-0525</li>
						<li><? if ($lang == 'fr') {
							echo 'Courriel';
						} else {
							echo 'Email';
						}; ?>: <a href="mailto:admin@sacre-davey.com">admin@sacre-davey.com</a></li>
					</ul>
				</div>
			</div>
			<div class="office-block">
				<h2></h2>
				<div class="contact">
					<h3>Sacré-Davey Calgary Office</h3>
					<p>435 – 4th Avenue SW, Suite 560, Calgary, AB T2P 3A8</p>
					<ul>
						<li><? if ($lang == 'fr') {
							echo 'Téléphone';
						} else {
							echo 'Phone';
						}; ?>: 403-455-2583</li>
						<li><? if ($lang == 'fr') {
							echo 'Courriel';
						} else {
							echo 'Email';
						}; ?>: <a href="mailto:admin-ab@sacre-davey.com">admin-ab@sacre-davey.com</a></li>
					</ul>
				</div>
			</div>
			<div class="office-block">
				<h2></h2>
				<div class="contact">
					<h3>Sacré-Davey Toronto Office</h3>
					<p>2425 Matheson Boulevard East, Suite 891, Mississauga, Toronto, ON, L4W 5K4</p>
					<ul>
						<li><? if ($lang == 'fr') {
							echo 'Téléphone';
						} else {
							echo 'Phone';
						}; ?>: 905-361-2598</li>
					</ul>
				</div>
			</div>
			<div class="office-block">
				<h2></h2>
				<div class="contact">
					<h3>Sacré-Davey Montreal Office</h3>
					<p>801 – 625 René-Lévesque Ouest Blvd, Montréal, QC, H3B 1R2</p>
					<ul>
						<li><? if ($lang == 'fr') {
							echo 'Téléphone';
						} else {
							echo 'Phone';
						}; ?>: 514-433-4443</li>
					</ul>
				</div>
			</div>
			<div class="office-block">
				<h2>United States Office</h2>
				<div class="contact">
					<h3>SDE3</h3>
					<p>800 Maynard Ave South Suite #403 Seattle, WA 98134 USA</p>
					<ul>
						<li><? if ($lang == 'fr') {
							echo 'Téléphone';
						} else {
							echo 'Phone';
						}; ?>: 1-206-462-3600</li>
						<li><? if ($lang == 'fr') {
							echo 'Télécopieur';
						} else {
							echo 'Fax';
						}; ?>: 1-206-462-3599</li>
						<li><? if ($lang == 'fr') {
							echo 'Courriel';
						} else {
							echo 'Email';
						}; ?>: <a href="mailto:solutions@e3energypartners.com">solutions@e3energypartners.com</a></li>
					</ul>
				</div>
			</div>
			<div class="office-block">
				<h2>Associated Offices</h2>
					<div class="contact">
					<h3>Sacré-Davey Group International</h3>
					<p>PO BOX 111751<br/>Abu Dhabi<br/>United Arab<br/>Emirates</p>
					<ul>
						<li><? if ($lang == 'fr') {
							echo 'Téléphone';
						} else {
							echo 'Phone';
						}; ?>: 971-02-650-9440</li>
						<li><? if ($lang == 'fr') {
							echo 'Télécopieur';
						} else {
							echo 'Fax';
						}; ?>: 971-02-650-9441</li>
						<li><? if ($lang == 'fr') {
							echo 'Courriel';
						} else {
							echo 'Email';
						}; ?>: <a href="mailto:admin-me@sacre-davey.com">admin-me@sacre-davey.com</a></li>
					</ul>
				</div>
			</div>
			<div class="office-block">
				<h2>Canadian Regional Offices</h2>
				<div class="contact">
				<h3></h3>
					<ul>
						<li>Regina, Saskatchewan</li>
					</ul>
					<p>Please contact our Head Office for regional office information</p>
					<ul>
						<li><? if ($lang == 'fr') {
							echo 'Téléphone';
						} else {
							echo 'Phone';
						}; ?>: 604-986-0663</li>
						<li><? if ($lang == 'fr') {
							echo 'Courriel';
						} else {
							echo 'Email';
						}; ?>: <a href="mailto:admin@sacre-davey.com">admin@sacre-davey.com</a></li>
					</ul>
				</div>
			</div>
		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
