	<?php
/**
 *.
 *
 * @package Sacre Davey Theme
 */
get_header(); 
wp_nav_menu( array('theme_location' => 'project-types', 'container_class' => 'project-type' ) ); ?>
<div class="mobile-nav-title"><span>Projects</span><i class="fa fa-angle-down" aria-hidden="true"></i></div>
<?php wp_nav_menu( array('theme_location' => 'project-mobile', 'container_class' => 'project-mobile') ); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
			<?php get_template_part( 'template-parts/content', 'projects' ); ?>
		
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>