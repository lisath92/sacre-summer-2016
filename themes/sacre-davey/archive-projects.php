<?php
/**
 *The template for displaying archive pages.
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="project-description-banner">
		<p>For a detailed description of a project please enter the information below</p>
		<input type="text" placeholder="Project Name"><input type="text" placeholder="Email">
		<submit class="project-description-button">Send</submit>
		</div>
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				</div>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class="projects-grid">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="project">
				<?php
					get_template_part( 'template-parts/content' );
				?>
				</div>
			<?php endwhile; ?>
			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
