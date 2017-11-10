<?php
/**
 * Template part for displaying projects archive page content in archive-projects.php and taxonomy-project_type.php.
 *
 * @package Sacre Davey Theme
 */

?>

<div class="project-description-banner">
	<p><?php $lang = qtranxf_getLanguage();
    if ($lang == 'fr') {
      echo 'Pour recevoir de l’information sur les autres projets de SDE veuillez indiquer vos coordonnées';
    } else {
      echo 'For more information regarding other SDE projects please enter details below';
    } ?></p>
	<?php echo do_shortcode( '[contact-form-7 id="524" title="More Sector Info"]' ); ?>
</div>


<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<div class="projects-grid">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="project">

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<div class="project-image">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' );
								;?>
							<?php endif; ?>
						</div>

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