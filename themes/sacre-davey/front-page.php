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

      <div class="home-gallery" data-flickity='{
      "contain": true,
      "contain": true }'>
               <?php //sacre-davey featured projects on front page
               $projects = CFS()->get('feature_project');
               foreach ($projects as $project):
                ?>

              <div class="home-gallery-cell">
               <div class="projects-block-image">
                 <img src="<?php echo $project['feature_project_image']; ?>" alt ="">
                 <div class="projects-block-info">

                  <h1><?php echo $project['feature_project_title']; ?></h1>
                  <p><?php echo $project['feature_project_excerpt']; ?></p>
                </div>
              </div>	
            </div>
          <?php endforeach; ?>
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
            echo $each_category->slug; ?>"><?php echo $each_category->name; ?></a>
          </h2>
          <div class="sector-img">
            <img src="
            <?php echo get_template_directory_uri().'/assets/images/'.$each_category->slug .'.png';?>" alt=""/>
            <div class="sector-description">
              <p class="content"><?php echo $each_category->description; ?></p>
              <p><a href="./sector/<?php echo $each_category->slug; ?>" class="learn-more">Learn More</a></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

    </section>
    <section class="affiliation">
      <h3>Affiliated Companies</h3>
      <a href="http://www.s2gbiochem.com/" target="_blank">
        <img src="<?php echo get_template_directory_uri() .'/assets/images/BiochemLogo.jpg'?>" alt="Biochem partner logo"></a>
        <a href="http://www.e3energypartners.com" target="_blank"><img src="<?php echo get_template_directory_uri() .'/assets/images/EngineeringLogo.png'?>" alt="Engineering partner logo"></a>
        <a href="http://ferenco.com/" target="_blank"><img src="<?php echo get_template_directory_uri() .'/assets/images/FerencoLogo.png'?>" alt="Ferenco partner logo"></a>
        <a href="https://www.htec.ca/" target="_blank">
          <img src="<?php echo get_template_directory_uri() .'/assets/images/HTEClogo.png'?>" alt="HTEC partner logo"></a>
        </section>
      </main><!-- #main -->
    </div><!-- #primary -->

    <?php get_footer(); ?>
