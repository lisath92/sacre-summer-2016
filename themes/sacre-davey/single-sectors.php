<?php
/**
 * The template for displaying all sector types
 *
 * @package Sacre Davey Theme
 */

get_header(); ?>
`
<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <section class="entry-content">
            <div class="development-image">
                
            </div>
            
          </section><!-- .entry-content -->

          
        </article><!-- #post-## -->

      
    <?php endwhile; // End of the loop. ?>
  </main><!-- #main -->
  </div><!-- #primary -->


  <?php get_footer(); ?>