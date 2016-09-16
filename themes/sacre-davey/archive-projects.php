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

			<?php /* Start the Loop */ ?>
			<div class="projects-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="project">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<header class="entry-header">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' );
									;?>
								<?php endif; ?>

							<!-- Get slug name -->
								<?php 
								$id=get_the_ID();
								$icon = get_the_terms($id, 'project_type');
								if(!$icon) {
									$icon = 'oil-gas';
								}else {
									$slug = $icon[0]->slug;
								};	?>
							
							<div class="sector-icon">
								<img src="<?php echo get_template_directory_uri().'/assets/images/project-type-icons/'.$slug.'.png';?>" alt = ""/>
								</div>
								

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
