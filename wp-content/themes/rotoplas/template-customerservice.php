<?php
/**
 * Template Name: Customer Service
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
	              <div class="col-xs-12 contenttitle">
	                <h1 class="customerservice">COSTUMER SERVICE</h1>
	                <h2>You have any questions?</h2>
	              </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-5 col-md-5">
                        <?php while ( have_posts() ) : the_post(); ?>
	                        <?php the_content(); ?>
                        <?php endwhile; // End of the loop. ?>  
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-7">
                      <img class="img-responsive maplocation" src="<?php bloginfo('template_url'); ?>/images/customermap.png">
                      <div class="address">
                        <h3><small>Phone</small>(209) 723 5000</h3>
                        <h4>2651 Cooper Av.</h4>
                        <h5>Merced, California</h5>
                      </div> 
                      <div class="row"> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="dealers">
                            <h2>AMELIA ESTREDA</h2>
                            <p class="phone">(209) 209 777 6119</p>
                            <p class="email"><a href="mailto: aestrada@rotoplas.com">aestrada@rotoplas.com</a></p>
                          </div>
                        </div>  
                      </div>
                  </div>
            	</div>    
        	</div>
     	</div>
     </div>	  
   </section>
<?php get_footer(); ?>
