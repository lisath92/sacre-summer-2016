<?php
/** 
 * Landing Page
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section id="hero-image" class="hero-image">
			 <h2><?php echo CFS()->get('front_page_header'); ?></h1>
       <h3><?php echo CFS()->get('front_page_tagline'); ?></h3>
		</section>
		<section class="intro">
			<p><?php echo CFS()->get('front_page_description'); ?></p>
				<img src="<?php echo get_template_directory_uri() .'/assets/images/diamond.png'?>" alt="">
				<p>
        <?php echo CFS()->get('front_page_more_info'); ?></p>
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
                  'taxonomy' => 'sector_type',
                  'hide_empty' => false,
                  'order'=> 'ASC',
                  'orderby'=>'id');
               $sector_categories = get_terms($category_arr);
               foreach ($sector_categories as $each_category): ?>
               <div class="each-category">
               <h2 class="category-title">
                  <a href="/sacre-davey/sector/<?php 
                  $each_category->slug; ?>"><?php echo $each_category->name; ?></a>
               </h2>
                  <div class="sector-img">
                  <img src="
                  <?php echo get_template_directory_uri().'/assets/images/'.$each_category->slug .'.png';?>" alt=""/></a>
                  <div class="sector-description">
                  <p class="content"><?php echo $each_category->description; ?></p>
                  <p><a href="/sacre-davey/sector/<?php echo $each_category->slug; ?>" class="learn-more">Learn More</a></p>
                  </div>
                  </div>
               </div>
            <?php endforeach; ?>

      </section>
      <section class="affiliation">
        <h3>Affiliated Companies</h3>
        <img src="<?php echo get_template_directory_uri() .'/assets/images/Biochem Logo.png'?>" alt="Biochem partner logo">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/EngineeringLogo.png'?>" alt="Engineering partner logo">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/FerencoLogo.png'?>" alt="Ferenco partner logo">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/HTEClogo.png'?>" alt="HTEC partner logo">
     </section>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
