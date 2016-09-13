<?php
/** Template Name: About
 * The template for displaying all pages.
 *
 * @package Sacre Davey Theme
 */

get_header(); 
wp_nav_menu( array( 'theme_location' => 'about-us', 'container_class' => 'menu-main-navigation-container') );?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<div id="about-hero" class="hero">
					<h1>Our Mission</h1>
					<p>We provide engineering, project management, and related technical services that make our customers look good and their operations better.</p>
				</div>
			</header><!-- .entry-header-->

			<div class="entry-content">
				<h1>Our Values</h1>
				<div class="button-group">
					<button class="button">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/AboutusServiceIcon.png' ?>">
					</button>
					<button class="button">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/AboutusValueIcon.png' ?>">
					</button>
					<button class="button">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/AboutusInnovationIcon.png' ?>">
					</button>
					<button class="button">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/AboutusQualityIcon.png' ?>">
					</button>
					<button class="button">
						<img src="<?php echo get_template_directory_uri() . '/assets/images/AboutusIntegrityIcon.png' ?>">
					</button>
				</div>
				<div class="gallery">
					<div class="gallery-cell">
						<p>People who operate plants have enough headaches as it is. When we get a call and engineering help is needed, we’re here for you to help you deal with the challenges at hand, 24 hours a day, 7 days a week. </p>
						<p>We will provide our best advice and services to assist you with engineering, project planning, shutdowns, emergency measures and everything else it takes to help you meet your project needs.</p>
					</div>
					<div class="gallery-cell">
						<p>A platitude to some, to us, value is embedded into our DNA. We must add value to our clients businesses and we strive to do so by optimizing your project’s financial and technical performance. </p>
						<p>This includes finding ways to execute a project while minimizing impact on existing operations, working with you to shorten a project’s delivery schedule, or using our engineering skills to reduce investment requirements.</p>
					</div>
					<div class="gallery-cell">
						<p>We are engineers: good ones, and very creative. We think differently and with an entrepreneurial spirit. We understand the needs of business, and apply our multi-industry experience to broaden the suite of technical solutions or approaches to solving problems. The result is creative solutions that minimize your total cost and/or increase your plant’s production.</p>
					</div>
					<div class="gallery-cell">
						<p>Mistakes can happen and fixing them costs money: sometimes, lots of money. Sacré-Davey’s job is to minimize rework due to errors by delivering a reliable, quality product each and every time.</p>
						<p>This means our designs have been subject to our rigorous OQM quality program as vetted by APEGBC, to ensure that our calculations, designs and drawings are complete and correct when they arrive on your desk. Constantly improving, we are always looking for ways to improve our quality and the manner in which we help our clients meet their needs.</p>
					</div>
					<div class="gallery-cell">
						<p>We hold ourselves to the highest standard of business and professional conduct. In the service business, our customers rely on us to give them the right answer – not always the most popular one. We pledge to do your work safely, with sound advice and without shortcuts.</p>
						<p>We will not be afraid of having the hard discussion that sometimes needs to happen, to meet the needs of a project and will promise to do so with integrity and respect for our customers and stakeholders.</p>
					</div>
				</div>
				<section class="timeline">
				<?php the_content(); ?>
				</section>
				<section class="our-team-wrapper">
					<h1>Our Team</h1>
					<div class="our-team">
					<?php 
					$members = CFS()->get( 'our_team' );
					foreach ( $members as $member ) : ?>
					<div class="each-member">
						<div class="member-photo">
							<img src="<?php echo $member['photo']; ?>">
						</div>
						<p class="name">
							<?php echo $member['first_and_last_name'];?>
						</p>
						<p class="position">

							<?php echo $member['position'];?>
						</p>
					</div>
				<?php endforeach;
				?>
					</div>
			</section>
			<div class="learn-more-banner">
				<h2>Learn More</h2>
				<a class="button-class"href="<?php echo the_permalink(); ?>">Sectors</a>
				<a class="button-class"href="<?php echo the_permalink(); ?>">Projects</a>
			</div>
		</div><!-- .entry-content -->
	</article><!-- #post-## -->
<?php endwhile; ?>
</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
