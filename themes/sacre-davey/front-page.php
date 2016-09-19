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
				$args = array( 'post_type' => 'projects', 'posts_per_page'   => 3, 
               'order' => 'ASC'
               );

   				$projects_posts = get_posts( $args ); // returns an array of posts
   				?>

   				<div class="home-gallery" data-flickity='{
               "contain": true,
               "prevNextButtons": false,
               "contain": true }'>
               <?php foreach ( $projects_posts as $post ) : setup_postdata( $post ); ?>

                 <div class="home-gallery-cell">
                   <div class="projects-block-image"><?php the_post_thumbnail(); ?>
                      <div class="projects-block-info">

                        <?php the_title(sprintf('<h1><a href="%s">', esc_url(get_permalink() ) ), '</a></h1>'); ?>
                        <?php the_excerpt(); ?>
                     </div>
                  </div>	
               </div>
            <?php endforeach; wp_reset_postdata(); ?>
         </div>
         <section class="sector-icons">
            <h1>Sectors</h1>
               <?php 
               $category_arr = array(
                  'taxonomy' => 'project_type',
                  'hide_empty' => false,
                  'order'=> 'ASC',
                  'orderby'=>'id');
               $sector_categories = get_terms($category_arr);
               foreach ($sector_categories as $each_category): ?>
               <div class="each-category">
               <h2 class="category-title">
                  <?php echo $each_category->name; ?>
               </h2>
                  <div class="sector-img">
                  <img src="
                  <?php echo get_template_directory_uri().'/assets/images/'.$each_category->slug .'.png';?>" alt=""/>
                  <div class="sector-description">
                  <?php echo $each_category->description; ?>
                  <p><a href="/sacre-davey/sector/<?php echo $each_category->slug; ?>">Learn More</a></p>
                  </div>
                  </div>
               </div>
            <?php endforeach; ?>


         <!-- </div>       -->
      </section>
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
