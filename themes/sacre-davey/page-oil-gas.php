<?php
/** Template Name: Oil & Gas
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
					<p>Egg cartons and ice cube trays, umbrellas and polar fleece, toothbrushes and eye glasses, heart valves, syringes and oxygen masks – what do all these different products have in common? They are all petroleum-based.</p>

					<p>For 30 years, Sacré-Davey Engineering has been providing integrated solutions to the oil &amp; gas industry, allowing these companies to thrive and continue enriching our lives.</p> 

					<p>The oil &amp; gas industry brings various challenges. Reserves can diminish and product demand fluctuates - reliability has become more critical than ever. And you'll find our people working on the full spectrum of oil &amp; gas production and support services all over the globe.</p>
				</header><!-- .entry-header -->
				<div class="entry-content">
				<div class="what-we-offer-wrapper">
					<h1>What We Offer</h1>
					<ul class="what-we-offer-list">
					
					<li>Our oil and gas section focuses on your company and your needs - from front end consulting work to commissioning.We deliver projects on time, safely and in the most cost efficient manner possible.</li>

					<li>With multiple offices based around industry Centres of Excellence, we create an appropriately resourced and right-sized team for each project.</li>
				
					<li>From tie-ins to processing and beyond, we have a strong track record of meeting our clients’ needs to ensure quality, reduce cost, improve schedule, and maximize safety, compliance and performance goals.</li>
					</ul>
				</div>

					<?php the_content(); ?>

					
				</div><!-- .entry-content -->
			</article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
