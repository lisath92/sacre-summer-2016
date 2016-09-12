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
				<!-- <div class="desktop-project-info">
					<div class="entry-content">
						<?php the_content(); ?>
						<i class="fa fa-times" aria-hidden="true"></i>
					</div>  -->
				</header><!-- .page-header -->

				<?php /* Start the Loop */ ?>
				<div class="projects-grid">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="project">

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'large' ); ?>
									<?php endif; ?>


									<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>

									<?php if ( 'post' === get_post_type() ) : ?>

									<?php endif; ?>
								</header><!-- .entry-header -->

								<div class="entry-content">
									<?php the_content(); ?>
									<i class="fa fa-times" aria-hidden="true"></i>
								</div><!-- .entry-content -->
							</article><!-- #post-## -->
						</div>
					<?php endwhile; ?>
				</div>
			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


	<?php get_footer(); ?>
