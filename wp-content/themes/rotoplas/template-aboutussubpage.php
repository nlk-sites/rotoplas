<?php
/**
 * Template Name: AboutUs - Subpages
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package rotoplas
 */

get_header(); ?>

	<section class="wrapper content">
      <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="row">
	              <div class="col-xs-12 aboutcontenttitle">
	                <h1 class="user"><?php the_title(); ?></h1>
	              </div>
              </div>
               <?php while ( have_posts() ) : the_post(); ?>
	                <div class="row aboutcontent">
	                  <div class="col-xs-12 col-sm-4 col-md-4 aboutusimage">
	                      <?php the_post_thumbnail('large', array('class' => 'img-responsive thumbnail')); ?>
	                  </div>
	                  <div class="col-xs-12 col-sm-8 col-md-8 text">
	                      <?php the_content()?>
	                      <a href="<?php bloginfo('url'); ?>/about-us" class="btn contentbutton">About Us</a>
	                      <a href="<?php bloginfo('url'); ?>/about-us/mission-vision" class="btn contentbutton mission-button">Mission / Vision</a>
	                      <a href="<?php bloginfo('url'); ?>/about-us/careers" class="btn contentbutton careersbutton">Careers</a>     
	                  </div>
	                </div>  
                <?php endwhile; // End of the loop. ?>
                <?php get_template_part('template-parts/content', 'timeline'); ?> 
              </div>
      </div>
     </div>  
    </section>
    <style>
    	body.page-id-355 .careersbutton, body.page-id-361 .mission-button, body.page-id-355 .contentbutton
    	{
    		display: none;
    	}
    </style>
<?php get_footer(); ?>
