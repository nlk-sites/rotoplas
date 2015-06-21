<?php
/**
 * Template Name: Homepage
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
            <div class="col-xs-12 col-sm-8 col-md-8">
              <div class="row">
              <div class="col-xs-12">
                <ul class="servicequality">
                  <li><a href="#">Service</a></li>
                  <li class="bullet"><a href="#">Quality</a></li>
                  <li class="bullet"><a href="#">Innovation</a></li>
                </ul>
              </div>
              </div>
              <div class="row">
                  <?php putRevSlider( "homeslider" ) ?>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="sidebar">
                    <div class="col-xs-12">
                      <h1 class="newsicon">NEWS</h1>
                    </div>
                  <div class="row eachcontent">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                      <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/newsimage1.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <p>Rotoplas conducts research and develops new technologies through our Center for Research and Development. </p>
                        <button type="button" class="btn newsbutton">View more</button>
                    </div>
                  </div>
                  <div class="row eachcontent">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                        <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/newsimage2.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <p>Our training programs provide a better quality of life for construction and professional workers.</p>
                        <button type="button" class="btn newsbutton">View more</button>
                    </div>
                  </div>
                  <div class="row content">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                        <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/newsimage3.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <p>Rotoplas creates different water solutions products, built to help those with lower incomes.</p>
                        <button type="button" class="btn newsbutton">View more</button>
                    </div>
                   </div> 
                </div>
            </div>
        
      </div>
     </div>  
    </section>
<?php get_footer(); ?>
