<?php
/**
 * The template for displaying all sector types
 *
 * @package Sacre Davey Theme
 */

get_header(); 
wp_nav_menu( array('theme_location' => 'sector-posts', 'container_class' => 'sector-menu' ) ); ?>
<div class="mobile-nav-title"><span><?php 
    $lang = qtranxf_getLanguage();
    if ($lang == 'fr') {
      echo 'Secteurs';
    } else {
      echo 'Sectors';
} ?></span><i class="fa fa-angle-down" aria-hidden="true"></i></div>
<?php wp_nav_menu( array('theme_location' => 'sector-mobile', 'container_class' => 'sector-mobile') ); ?>
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php 
    while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php $developments = CFS()->get('development');
        foreach( $developments as $development ): ?>
        <section class="development">
          <div class="development-overlay">
            <h1 class="development-title">
              <?php echo $development['development_title_'.$lang]; ?>
            </h1>
            <div class="development-description">
              <?php echo $development['development_description_'.$lang]; ?>
            </div>
          </div>
          <div class="read-more-button">
            <?php if ($lang == 'fr') { 
              echo "Lire la suite";
              } else {
              echo "Read More";
              }; ?>
          </div>
        </section>
        <div class="read-more">
          <?php echo strip_tags($development['read_more'], '<ul><li>'); ?>
        </div>
      <?php endforeach; ?>
      <?php 
        $sub_sectors = CFS()->get('sub_sector');

      if($sub_sectors) : 
      foreach($sub_sectors as $sub_sector): ?>
      <section class="sub-sector">
        <div class="sub-sector-title">
          <?php echo $sub_sector['sub_sector_title_'.$lang]; ?>
        </div>
        <div class="sub-sector-lists">
          <?php echo strip_tags($sub_sector['sub_sector_lists'], '<ul><li>'); ?>
        </div>
      </section>
    <?php endforeach; ?> 
  <?php endif; ?>
    <section class="more-projects">
      <h2><?php 
      $title = get_the_title();
      if ($lang == 'fr') {
          echo "En savoir plus sur les projets de " . $title . ".";
        } else {
          echo "Learn more about " . $title . " projects.";
        }; ?></h2>
      <div class="link-to-projects"><a href="/?project_type=<?php 

      $post = get_the_ID();
      $arr = get_the_terms($post, 'sector_type');
      echo $arr[0]->slug; ?>">
      
      <?php 
      if ($lang == 'fr') {
        $project = 'Projets';
      } else {
        $project = 'Projects';
      };

      echo get_the_title().' '.$project?></a>
      </div>
    </section>
  </article><!-- #post-## -->
<?php endwhile; // End of the loop. ?>
</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>