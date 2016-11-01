	<?php
/**
 *The template for displaying archive pages.
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="project-icon-toggle">
			<span>Projects</span>
			<i class="fa fa-angle-down" aria-hidden="true"></i>
		</div>
		<section class="mobile-project-nav-list">

			<?php  
			$arg = array( 'taxonomy' => 'project_type', 'hide_empty' => false);

			$terms = get_terms( $arg ); 
			?>
			<ul class="">
				<li><a href="<?php echo get_post_type_archive_link('projects'); ?>">All</a></li>
				<?php foreach ( $terms as $term ) : ?>

					<li><a href=" <?php echo get_term_link($term); ?> " ><?php echo $term->name
						?></a>
					</li> 

				<?php endforeach; ?>
			</ul>


		</section>
		<section class="project-nav-list">

			<?php  
			$arg = array( 'taxonomy' => 'project_type', 'hide_empty' => false);

			$terms = get_terms( $arg ); 
			?>
			<ul class="">
				<li><a href="<?php echo get_post_type_archive_link('projects'); ?>">All</a></li>
				<?php foreach ( $terms as $term ) : ?>

					<li><a href=" <?php echo get_term_link($term); ?> " ><?php echo $term->name
						?></a>
					</li> 

				<?php endforeach; ?>
			</ul>


		</section>
		<div class="project-description-banner">
			<p>For a detailed description of a project please enter the information below</p>
			<?php echo do_shortcode( '[contact-form-7 id="524" title="More Project Info"]' ); ?>
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
									$slug = 'cogwheel';
								}else {
									$slug = $icon[0]->slug;
								};	?>
								<div class="icon-border">
									<div class="sector-icon">

										<img src="<?php echo get_template_directory_uri().'/assets/images/project-type-icons/'.$slug.'.png';?>" alt = ""/>
									</div>

									<div class="project-title">
										<?php the_title(sprintf('<h1 class="mobile-project-title">'), '</h1>'); ?>
									</div>
								</div>
							</header><!-- .entry-header -->

							<div class="entry-content">
								<?php the_content(); ?>
								<i class="fa fa-times" aria-hidden="true"></i>
							</div><!-- .entry-content -->

							<section class="desktop-entry-content">
								<div class="single-project-header">
									<?php the_title(sprintf('<h1>'), '</h1>'); ?>
									<i class="fa fa-times" aria-hidden="true"></i>
								</div>
								<div class="full-project-img">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail( 'full' );
										;?>
									<?php endif; ?>
								</div>
								<div class="desktop-content">
									<?php the_content(); ?>
								</div>
								
							</section><!-- .desktop-entry-content -->

						</article><!-- #post-##-->
					</div>
				<?php endwhile; ?>
			</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
