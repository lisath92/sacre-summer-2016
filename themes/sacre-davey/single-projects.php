	<?php
/**
 * The template for displaying all single projects.
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
			<div class="project-icon-toggle">
			<p>Projects</p>
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
		<div class="project-description-banner">

			<p>For a detailed description of a project please enter the information below</p>
			<input type="text" placeholder="Project Name"> 
			<input type="text" placeholder="Email">
			<submit class="project-description-button">Send</submit>
		</div>
		<section class="home-gallery-cell">
			<div class="projects-block-image"><?php the_post_thumbnail(); ?>
				<div class="projects-block-info">
					 <?php the_title(sprintf('<h1><a href="%s">', esc_url(get_permalink() ) ), '</a></h1>'); ?>
					<?php the_excerpt(); ?>
					
				</div>
			</div>
		</section><!-- .entry-header -->


</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
