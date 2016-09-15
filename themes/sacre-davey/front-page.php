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
		<section class="intro">
			<p>Sacré-Davey provides engineering and project management services. 
				We offer professional advice and technical expertise that help you 
				improve your return on investments.</p>
				<img src="<?php echo get_template_directory_uri() .'/assets/images/diamond.png'?>" alt="">
				<p>
					We work hard to develop a deep understanding of your needs 
					and objectives, and to provide you with the personal service you deserve.</p>
				</section>

				<?php //sacre-davey project post types on front page
				$args = array( 'post_type' => 'projects', 'posts_per_page'   => 3 );

   				$projects_posts = get_posts( $args ); // returns an array of posts
   				?>
   				<?php foreach ( $projects_posts as $post ) : setup_postdata( $post ); ?>
   				<div class="projects-block">

   					<div class="projects-block-image"><?php the_post_thumbnail(); ?></div> 

   					<div class="projects-block-info">

   						<a><h1><?php the_title(); ?></h1></a>
   						<p><?php the_excerpt(); ?></p>

   					</div>	
   				</div>
   			<?php endforeach; wp_reset_postdata(); ?>


   			<section class="partners">
   				<h3>Partners</h3>
   				<img src="<?php echo get_template_directory_uri() .'/assets/images/Biochem Logo.png'?>" alt="Biochem partner logo">
   				<img src="<?php echo get_template_directory_uri() .'/assets/images/EngineeringLogo.png'?>" alt="Engineering partner logo">
   				<img src="<?php echo get_template_directory_uri() .'/assets/images/FerencoLogo.png'?>" alt="Ferenco partner logo">
   				<img src="<?php echo get_template_directory_uri() .'/assets/images/HTEClogo.png'?>" alt="HTEC partner logo">
   			</section>


   		</main><!-- #main -->
   	</div><!-- #primary -->

   	<?php get_footer(); ?>
