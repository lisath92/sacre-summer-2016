<?php
/**
 * The template for displaying the footer.
 *
 * @package Sacre Davey Theme
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <section class="site-info container">
   <div class="footer-logo">
    <img src="<?php echo get_template_directory_uri() .'/assets/images/footer-logo.png'?>" alt="Sacre Davey footer logo"/>    
  </div>
  <div class="more-info">
    <h1><?php $lang = qtranxf_getLanguage();
      if ($lang == 'fr') {
        echo 'Besoin d’informations?';
      } else {
        echo 'Need more info?';
      };
    ?></h1>
    <a href="/sacre-davey/contact">
      <button type="submit"><?php if ($lang =='fr') {
        echo 'Contactez-nous';
      } else {
        echo 'Contact Us';
      } ?></button>
    </a>
  </div>
  <div class="social-media">
    <h1><?php if ($lang == 'fr') {
        echo 'Suivez-nous';
      } else {
        echo 'Follow Us';
      }; ?></h1>
    <a href="https://www.linkedin.com/company/sacr--davey-engineering" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    <a href="https://www.facebook.com/Sacr%C3%A9-Davey-Engineering-349287118415639/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="https://www.youtube.com/user/sacredavey" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
    <a href="https://twitter.com/sacredavey" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
  </div>
</section><!-- .site-info -->
<div class="lang-switcher slate">
    <?php $args = array( "type" => "dropdown" );
          qtranxf_generateLanguageSelectCode($args) ?>
</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
