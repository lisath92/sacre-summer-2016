<?php
/** Template Name: Services
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

				<div class="entry-content">
					<h2 class="needs-banner">One-stop-shop for all your engineering needs</h2>
					<div class="engineering-needs-wrapper">
						<div class="engineering-needs-block">
							<h3>Multi-disciplinary engineering</h3>
							<ul class="engineering-needs-list">
								<li>Process engineering</li>
								<li>Mechanical engineering</li>
								<li>Structural engineering</li>
								<li>Civil engineering</li>
								<li>Electrical engineering</li>
								<li>Instrumentation</li>
							</ul>
						</div>
						<div class="engineering-needs-block">
							<h3>Project Delivery</h3>
							<ul class="engineering-needs-list">
								<li>Project estimating</li>
								<li>Procurement</li>
								<li>Scheduling</li>
								<li>Cost management</li>
								<li>Expediting</li>
								<li>Site supervision services</li>
								<li>Project integration</li>
								<li>Project and construction</li>
							</ul>
						</div>
						<div class="engineering-needs-block">
							<h3>Services</h3>
							<ul class="engineering-needs-list">
								<li>Process engineering</li>
								<li>Mechanical engineering</li>
								<li>Structural engineering</li>
								<li>Civil engineering</li>
								<li>Electrical engineering</li>
								<li>Instrumentation</li>
							</ul>
						</div>
						<div class="engineering-needs-block"></div>
						<div class="engineering-needs-block"></div>

					</div>
					<h2 class="trust-banner">Engineers and project managers<br/>you can trust.</h2>
					<div class="certification-block">
						<h3>Sacre-Davey Engineering Inc. was one of the first companies to be certified under the APEG of BC in Organizational Quality Management Program.</h3>
						<p>Our in-house quality controls system is compliant with the Organizational Quality Management Program as outlined by the Association of Professional Engineers &amp; Geoscientists of British Columbia.</p>
						<img src="assets/images/ServicesTriangleDown.png">
						<p>Our OQM System ensures that we are able to consistently deliver high quality, high value project assistance.</p>
					</div>
					<div class="advantage-banner">
						<h2>Advantage</h2>
						<p>Clients choose Sacré-Davey for our superior customer support, technical expertise, and entrepreneurial approach.</p>
					</div>
					<div class="icon-list carousel">
					<div class="icon-block">
						<img class="slider-icon" src="assets/images/ServicesRapidResponseIcon.png">
					</div>
					<div class="icon-block">
						<img class="slider-icon" src="assets/images/ServicesSuperiorservicesIcon.png">
					</div>
					<div class="icon-block">
						<img class="slider-icon" src="assets/images/ServicesInnovativeIcon.png">
					</div>
					<div class="icon-block">
						<img class="slider-icon" src="assets/images/ServicesAccessIcon.png">
					</div>
					<div class="icon-block">
						<img class="slider-icon" src="assets/images/ServicesSafeIcon.png">
					</div>
					<div class="icon-block">
						<img class="slider-icon" src="assets/images/ServicesProjectIcon.png">
					</div>
					</div>
					<div class="updates-banner">
						<p>We don’t believe clients like to be in the dark, so we keep you informed during all phases of a project- updating you and checking in throughout all project milestones.</p>
					</div>
					<?php the_content(); ?>
					<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
						) );
						?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


	<?php get_footer(); ?>
