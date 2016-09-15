<?php
/**
 * The template for displaying all sector types
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  
          <?php $developments = CFS()->get( 'development' );
          foreach( $developments as $development ): ?>
          <section class="development">
          <div class="development-overlay">
            <h1 class="development-title">
              <?php echo $development['development_title']; ?>
            </h1>
            <div class="development-description">
              <?php echo $development['development_description']; ?>
            </div>
            </div>
            </section>
            <div class="read-more">
            <?php echo $development['read_more']; ?>
            </div>
          <?php endforeach; ?>
        </div>  
    </article><!-- #post-## -->
  <?php endwhile; // End of the loop. ?>
</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>