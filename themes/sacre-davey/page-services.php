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
					<div id="services-hero" class="services-hero">
					<h1 class="title"><?php the_title(); ?></h1>
					<p><?php 
					$lang = qtranxf_getLanguage();
					echo CFS()->get('services_tagline_'.$lang); ?></p>
					</div>
					</header>
				<div class="entry-header">
				</div>
				<div class="entry-content">
					<h2><?php if ($lang == 'fr') {
						echo 'Un guichet unique pour tous vos besoins en ingénierie';
					} else {
						echo 'One stop shop for all your engineering needs'; 
					}; ?></h2>
					<div class="engineering-needs-wrapper">
						
						<div class="engineering-needs-block">
							<h4><?php if ($lang == 'fr') {
						echo 'Ingénierie multidisciplinaire';
					} else {
						echo 'Multi-disciplinary engineering'; 
					}; ?></h4>
							<div class="engineering-needs-list">
								<?php echo CFS()->get('multi_engineering'); ?>
							</div>
						</div>
						<div class="engineering-needs-block">
							<h4><?php if ($lang == 'fr') {
						echo 'Gestion et exécution de projets';
					} else {
						echo 'Project Management & Project Delivery'; 
					}; ?></h4>
							<div class="engineering-needs-list">
								<?php echo CFS()->get('project_delivery'); ?>
							</div>
						</div>
						<div class="engineering-needs-block">
							<h4>Services</h4>
							<div class="engineering-needs-list">
								<?php echo CFS()->get('services'); ?>
							</div>
						</div>
					</div>
					<div class="banner">
						<p class="trust">
							<?php if ($lang == 'fr') {
						echo 'Des ingénieurs et des gestionnaires de projet en qui vous pouvez avoir confiance';
					} else {
						echo 'Engineers and Project Managers you can trust'; 
					}; ?></p>
					</div>
					<div class="certification-block">
						<h2><?php if ($lang == 'fr') {
							echo 'Sacré-Davey Engineering Inc. fait partie des premières entreprises à avoir obtenu la certification APEG de la Colombie-Britannique dans le cadre du Programme de gestion de la qualité de l’organisation.';
						} else {
							echo 'Sacré-Davey Engineering Inc. was one of the first companies to be certified under the APEG of BC in Organizational Quality Management Program.';
						}; ?></h2>
						<p><?php if ($lang == 'fr') {
							echo 'Notre système interne de contrôle de la qualité est en conformité avec le programme de gestion de la qualité de l’organisation (GQO) tel que décrit par l’Association des ingénieurs et géo scientifiques professionnels de la Colombie-Britannique.';
						} else {
							echo 'Our in-house quality controls system is compliant with the Organizational Quality Management Program as outlined by the Association of Professional Engineers & Geoscientists of British Columbia.';
						} ?></p>
						<img src="<?php echo get_template_directory_uri() . '/assets/images/arrow-down.png' ?>">
						
						<div class="quality-details">
							<?php if ($lang == 'fr') {
								echo 'Grâce à notre système GQO, nous sommes toujours en mesure d\'apporter des solutions performantes et à haute valeur ajoutée pour vous aider dans l’atteinte de vos objectifs.';
							} else {
								echo 'Our OQM System ensures that we are able to consistently deliver high quality, high value project assistance.';
							}; ?>
						</div>
					</div>
					<section class="service-image">
						<ul class="items">
							<li><?php if ($lang == 'fr') {
								echo 'Notre équipe de projet dispose de systèmes de conception et de contrôle des coûts de projet pour l’aider dans la prise de décisions efficaces et opportunes afin de garantir une expérience client positive.';
							} else {
								echo 'We have in-house project design and cost control systems helping the project team make effective and timely decisions - ensuring our customer\'s experience is a positive one.';
							} ?></li>
							<li><?php if ($lang == 'fr') {
								echo 'Nous mettons à votre disposition les effectifs dont vous avez besoin pour exécuter et mener à bien toutes les phases de vos projets: des études de faisabilité et des concepts, à la conception détaillée en passant par l’intégration des systèmes et la construction.';
							} else {
								echo 'From feasibility studies &amp; concepts, to detailed design, systems integration and buildings, we have the team to meet your project execution &amp; delivery needs.';
							} ?></li>
						</ul>
					</section>
					<div class="banner">
						<h3><?php if ($lang == 'fr') {
							echo 'Avantage';
						} else {
							echo 'Advantage';
						} ?></h3>
						<p><?php if ($lang == 'fr') {
							echo 'Les clients choisissent Sacré-Davey pour notre excellent service à la clientèle, notre expertise technique et notre approche entrepreneuriale.';
						} else {
							echo 'Clients choose Sacré-Davey for our superior customer support, technical expertise, and entrepreneurial approach.'; } ?></p>
					</div>
					<section class="attributes">
						<h2><?php if ($lang == 'fr') {
							echo 'Nous ajoutons de la valeur mesurable à vos projets en fournissant';
						} else {
							echo 'We add measurable value to your project by providing';
						} ?></h2>
						<div class="carousel" data-flickity='{
						"cellAlign": "center",
						"contain": true,
						"prevNextButtons": false
						}'>
							<div class="carousel-cell">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/services-response-'. $lang .'.png' ?>">
							</div>
							<div class="carousel-cell">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/services-discipline-'. $lang .'.png' ?>">
							</div>
							<div class="carousel-cell">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/services-innovative-'. $lang . '.png' ?>">
							</div>
							<div class="carousel-cell">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/services-multi-'. $lang . '.png' ?>">
							</div>
							<div class="carousel-cell">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/services-delivery-'. $lang .'.png' ?>">
							</div>
							<div class="carousel-cell">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/services-management-'. $lang .'.png' ?>">
							</div>
						</div>
					</section>
					<div class="updates-banner">
						<p><?php if ($lang == 'fr') {
							echo 'Nous savons que les clients aiment être bien informés sur l’état d’avancement de leurs projets. Nous maintenons donc une communication constante tout au long du processus dans le but de vous tenir à jour et de vous permettre de suivre l’échéancier.';
						} else {
							echo 'We appreciate that clients like to be well informed about their projects, so we provide constant communication during all phases of a project – updating you and checking in throughout all project milestones.';
						} ?></p>
					</div>

				</div><!-- .entry-content -->
			</article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
