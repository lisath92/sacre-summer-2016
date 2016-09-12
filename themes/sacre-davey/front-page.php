<?php
/** 
 * Landing Page
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="hero-image">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'full' ); ?>
			<?php endif; ?>
		</section>
		


	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
