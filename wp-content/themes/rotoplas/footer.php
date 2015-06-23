<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rotoplas
 */

?>
<section class="wrapper footer" data-role="footer">
      <div class="container">
        <div class="row">
        <div class="col-xs-12 col-sm-10 col-md-10">
           <?php dynamic_sidebar('footer_copyright');?> 
           <?php wp_nav_menu( array( 'menu_class'=>'footerlink','theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
        </div> 
         <div class="col-xs-12 col-sm-2 col-md-2">
              <?php dynamic_sidebar('footer_socialicon');?>
          </div>
        </div> 
    </section>

<?php wp_footer(); ?>

</body>
</html>
