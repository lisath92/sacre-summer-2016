<?php
/**
 * The template for displaying all single projects.
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>
`
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="project-description-banner">

		<p>For a detailed description of a project please enter the information below</p>
		<input type="text" placeholder="Project Name"> 
		<input type="text" placeholder="Email">
		<submit class="project-description-button">Send</submit>
		</div>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="project">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">

					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>

					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					
				</header><!-- .entry-header -->

				<div class="entry-content">
					
					<?php the_content(); ?>
						
					</div><!-- .entry-content -->

					
				</article><!-- #post-## -->

				</div>
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


	<?php get_footer(); ?>
