<?php
/** Template Name: About
 * The template for displaying all pages.
 *
 * @package Sacre Davey Theme
 */

get_header(); 
wp_nav_menu( array( 'theme_location' => 'about-us', 'container_class' => 'about-menu') );?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div id="about-hero" class="hero">
						<h1><?php 
						$lang = qtranxf_getLanguage();
						echo CFS()->get('our_company_title_'.$lang); ?></h1>
						<p><?php echo CFS()->get('our_company_tagline_'.$lang); ?></p>
					</div>
				</header><!-- .entry-header-->

				<div class="entry-content">
					<h1><?php if ($lang == 'fr') {
						echo 'Notre valeurs';
					} else {
						echo 'Our Values';
					}; ?></h1>
					<div class="carousel-nav">
						<div class="nav-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/services_active.png' ?>" class="icon-active">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/services_inactive.png' ?>" class="icon-inactive">
						</div>
						<div class="nav-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/value_active.png' ?>" class="icon-active">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/value_inactive.png' ?>" class="icon-inactive">
						</div>
						<div class="nav-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/innovation_active.png' ?>" class="icon-active">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/innovation_inactive.png' ?>" class="icon-inactive">

						</div>
						<div class="nav-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/quality_active.png' ?>" class="icon-active">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/quality_inactive.png' ?>" class="icon-inactive">
						</div>
						<div class="nav-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/integrity_active.png' ?>" class="icon-active">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/integrity_inactive.png' ?>" class="icon-inactive">
						</div>
						<div class="nav-cell">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/safety_active.png' ?>" class="icon-active">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/safety_inactive.png' ?>" class="icon-inactive">
						</div>
					</div>
					<div class="carousel-main">
						<div class="gallery-cell">
							<?php if ($lang == 'fr') {
								echo "<p>L’exploitation d’usines est assujettie à toute sorte d’obstacles imprévus. Lorsque des problèmes surviennent et qu’une aide technique s’avère nécessaire, nous sommes disponibles 24 heures sur 24, 7 jours sur 7 pour apporter l’assistance requise à main levée.</p>
									<p>Nous nous engageons à vous fournir nos meilleurs conseils et services pour vous aider dans l’ingénierie, la planification de projets et des fermetures, les mesures d’urgence et tout autre besoin nécessaire à la réalisation de vos projets.</p>";
							} else {
								echo "<p>There are many unforeseen obstacles while operating plants. When problems arise and engineering help is required, we are here to provide assistance with the challenges at hand – 24 hours a day, 7 days a week.</p>
								<p>We guarantee to provide our best advice and services to assist you with engineering, project planning, shutdowns, emergency measures and everything else needed to help you meet your project needs.</p>";
							}; ?>							
						</div>
						<div class="gallery-cell">
							<?php if ($lang == 'fr') {
								echo "<p>La valeur est ancrée dans notre ADN. Il est de notre devoir de créer de la valeur ajoutée pour vous en optimisant la performance financière et technique de vos projets. Nous nous efforcerons de rechercher des moyens pour l’exécution de vos projets en minimisant l’impact sur les opérations courantes. Nous travaillerons avec vous pour réduire le délai de livraison de vos projets ou nous utiliserons nos compétences en ingénierie pour réduire les besoins en investissement.</p>";
							} else {
								echo "<p>Value is embedded in our DNA. It is imperative that we add value to our clients’ businesses and we aim to do so by optimizing your project’s financial and technical performance. This includes finding ways to execute a project while minimizing impact on your existing operations, working with you to shorten a project’s delivery schedule, or using our engineering skills to reduce investment requirements.</p>";
							}; ?>
						</div>
						<div class="gallery-cell">
							<?php if ($lang == 'fr') {
								echo "<p>Nous sommes des ingénieurs chevronnés. Nous pensons de manière créative et possédons l’esprit d’entreprise. Nous comprenons les besoins de vos entreprises, et mettons à profit notre expertise multisectorielle pour proposer une large gamme de solutions et d’approches techniques en vue de résoudre les problèmes. Nous proposons des solutions innovantes qui visent à réduire au minimum vos dépenses globales voire à accroître la productivité de vos installations.</p>";
							} else {
								echo "<p>We are skilled engineers. We think creatively and with an entrepreneurial spirit. We understand the needs of business, and apply our multi-industry experience to broaden the scale of technical solutions or approaches to solving problems. The result is creative solutions that minimize your total cost and/or increase your plant’s production.</p>";
							}; ?>
						</div>
						<div class="gallery-cell">
							<?php if ($lang == 'fr') {
								echo "<p>Des erreurs peuvent se produire, et il vous en coûtera de l’argent — parfois, beaucoup d’argent — pour les réparer. Le travail de Sacré-Davey consiste à fournir un produit fiable et de qualité à chaque fois afin de minimiser le réusinage dû aux erreurs. Cela signifie que nos conceptions sont soumises à notre rigoureux processus de gestion de la qualité à l’échelle de l’organisation (OQM). Ce processus vise à garantir que nos calculs, modèles et dessins sont complets et exacts quand ils arrivent sur votre bureau. Nous évoluons dans une optique constante de perfectionnement, car nous recherchons toujours des moyens d’améliorer la qualité de notre travail et la manière dont nous aidons nos clients à répondre à leurs besoins.</p>";
							} else {
								echo "<p>Mistakes happen but repairing them costs money – sometimes, a lot of money. Sacré-Davey’s job is to minimize rework due to errors by delivering a reliable, quality product each and every time. This means our designs are subject to our rigorous OQM quality program as vetted by APEGBC, to ensure that our calculations, designs and drawings are complete and correct when they arrive on your desk. Constantly improving, we are always pursuing ways to advance the quality of our work and the manner in which we help our clients meet their needs.</p>";
							}; ?>						
						</div>
						<div class="gallery-cell">
							<?php if ($lang == 'fr') {
								echo "<p>Nous nous efforçons de toujours maintenir des standards élevés en matière d’éthique professionnelle et de conduite des affaires. Dans le domaine des services, nos clients comptent sur nous pour leur apporter la bonne solution qui n’est pas toujours la plus populaire. Nous nous engageons à réaliser vos projets en toute sécurité, avec des conseils judicieux et francs. Afin de répondre aux besoins spécifiques de vos projets, nous prendrons le temps d'en discuter, une étape difficile, mais parfois nécessaire. Nous nous engageons à agir de manière cohérente, avec intégrité et dans le respect de nos clients et des autres intervenants.</p>";
							} else {
								echo "<p>We hold ourselves to the highest standard of business and professional conduct. In the service business, our customers rely on us to give them the right answer – which is not always the most popular one. We pledge to do your work safely, with sound advice and without taking shortcuts. We will have the tough discussion that sometimes needs to happen to ensure the needs of your project are met and in doing so we promise to act consistently with integrity and respect for our customers and stakeholders.</p>";
							}; ?>							
						</div>
						<div class="gallery-cell">
							<?php if ($lang == 'fr') {
								echo "<p>La sécurité constitue une composante essentielle de notre culture quotidienne. Nous nous engageons à réduire les risques, prévenir les blessures et promouvoir une bonne santé pour notre personnel et toutes les personnes avec qui nous travaillons que ce soit au bureau, sur un site de projet ou à l’extérieur du travail. Nous veillerons à offrir à nos employés les connaissances, les outils et la formation nécessaires pour travailler en toute sécurité et prévenir les accidents tout en encourageant leur attitude proactive face à des situations dangereuses. Nous n’avons enregistré aucune perte à ce jour. Nous sommes très fiers de cet historique et mettrons tout en œuvre pour le sauvegarder.</p>";
							} else {
								echo "<p>Safety is essential to our everyday culture, whether working in the office, from a project site or outside of work, we are committed to reducing risk, preventing injuries and promoting good health for our people and everyone we work with. We will ensure we provide our staff with knowledge, tools and training to work safely and prevent accidents, and be proactive about ensuring we speak up about unsafe conditions. Our zero loss record is something we are very proud and protective of.</p>";
							}; ?>							
						</div>
					</div>

					<section class="timeline">
						<h2><?php if ($lang == 'fr') {
							echo 'Notre histoire';
							} else {
								echo 'Our History';
							}; ?></h2>
						<div class="mobile-history">
							<?php echo CFS()->get('mobile_history');?>
						</div>
						<div class="desktop-history">
							<?php echo CFS() ->get('mobile_history'); ?>
							<img src="<?php echo get_template_directory_uri() .'/assets/images/diamond.png'; ?>" alt="">
							<?php echo CFS()->get('desktop_history');?>

						</div>
						<?php the_content(); ?>
					</section>
					<section class="our-team-wrapper">
						<h1><?php if ($lang == 'fr') {
								echo 'Notre équipe';
							} else {
								echo 'Our Team';
							}; ?></h1>
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

									<?php echo $member['position_'.$lang];?>
								</p>
								<div class="member-description"><?php echo $member['description_'.$lang]; ?>
									</div>
							</div>
						<?php endforeach;
						?>
					</div>

				</section>

				<div class="learn-more-banner">
					<h2><?php if ($lang == 'fr') {
								echo 'Apprendre davantage';
							} else {
								echo 'Learn More';
							}; ?></h2>
					<div class="button-wrapper">
						<a href="/sector/oil-gas">
							<?php if ($lang == 'fr') {
								echo 'Secteurs';
							} else {
								echo 'Sectors';
							}; ?></a>
						<a href="/projects">
							<?php if ($lang == 'fr') {
								echo 'Projets';
							} else {
								echo 'Projects';
							}; ?></a>
					</div>
				</div>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->
	<?php endwhile; ?>

</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
