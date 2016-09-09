<?php
/** Template Name: Careers
 * The template for displaying all pages.
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				
			</header><!-- .entry-header -->

			<div class="entry-content">
				<div class="growing-text">
					<p>Our established engineering firm is GROWING! With our home office in North Vancouver and regional offices across Canada and the Western United States, we are looking for dynamic, well rounded individuals to join our team. These positions require an individual who is highly motivated, self-directed and has amazing attention to detail. We’re always looking for talented individuals to join our team in making a difference.</p>
				</div>
				<div class="life-work-banner">
					<h2>Join us and put a little more life in your life/work</h2>
					<p>Sacré Davey is our home not just where we work, we are a family and we want you to be apart of it. Come join us for a challenging yet rewarding work experience where you'll be able to learn and move your career forward.</p>
				</div>
				<div class="opportunities-wrapper">
					<h1 class="opportunities-banner">Opportunities</h1>
					<ul class="canadian-opportunities">
						<li><span class="opportunities-title">Calgary, Canada</span>
							<ul>
								<li>Intermediate Process Engineer</li>
							</ul>
						</li>
					</ul>
					
					<ul class="american-opportunities">
						<li><span class="opportunities-title">Seattle, USA</span>
							<ul>
								<li>Office &amp; Finance Manager</li>
								<li>Senior Process Engineer, SDE3</li>
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