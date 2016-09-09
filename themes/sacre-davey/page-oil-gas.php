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
					<div class="oil-gas-dropdown-wrapper">
						<div class="conventional-oil-wrapper">
							<h1>Conventional Oil</h1>
							<ul>
								<li>Distillation</li>
								<li>FGD reduction units</li>
								<li>SCR reduction units</li>
								<li>NOx reduction units</li>
								<li>CO2 reduction units</li>
								<li>Over pressure protection &amp; flare systems </li>
								<li>Recovery</li>
								<li>Blending, terminalling &amp; transfer reforming</li>
								<li>Hydrogen plants</li>
								<li>Hydrocracking</li>
								<li>Hydrotreating </li>
								<li>Isomerization units</li>
								<li>Gathering systems &amp; conditioning</li>
							</ul>
							<ul>
								<li>Lubricants refining</li>
								<li>Oily water treatment</li>
								<li>Sulphur recovery</li>
								<li>Solvent de-asphalting &amp; visbreaking</li>
								<li>Cooling tower / cooling water systems</li>
								<li>Steam generation</li>
								<li>Cogeneration</li>
								<li>Renewable fuels blending</li>
								<li>Ethanol</li>
								<li>Biodiesel</li>
								<li>Sour water stripping</li>
								<li>Heat integration</li>
								<li>Pressure regulation stations</li>
							</ul>
						</div>
						<div class="natural-gas-wrapper">
							<h1>Natural Gas</h1>
							<ul>
								<li>LNGs, NGLs, ethane, propane, butane, condensates, crude oils</li>
								<li>Vaporization</li>
								<li>Liquefaction</li>
								<li>Dehydration &amp; sweetening</li>
								<li>Liquid extraction &amp; fractionation</li>
								<li>Sulphur recovery</li>
							</ul>
							<ul>
								<li>Pipelines</li>
								<li>Pipeline integrity &amp; maintenance</li>
								<li>Pumping and compressor stations</li>
								<li>Custody transfer systems</li>
								<li>Terminalling, Storage &amp; Blending</li>
							</ul>
						</div>
						<div class="oil-sands-wrapper">
							<h1>Oil Sands Recovery</h1>
							<ul>
								<li>Conventional oil production / processing systems</li>
								<li>Primary heavy oil production</li>
								<li>Steam assisted gravity drainage (SAGD) systems</li>
							</ul>
							<ul>
								<li>Steam generation and piping systems</li>
								<li>Material conveying and equipment design</li>
								<li>Tankage and transfer</li>
							</ul>
						</div>

					</div>
					<?php the_content(); ?>

					
				</div><!-- .entry-content -->
			</article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
