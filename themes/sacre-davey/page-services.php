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
