<?php
/**
 * Template Name: Dealers
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
              <div class="col-xs-12 contenttitle">
                <h1 class="dealericon">Dealers</h1>
              </div>
              </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-8 col-md-8">
                    <div class="address">
                        <h3><small>Phone</small>(209) 723 5000</h3>
                        <h4>2651 Cooper Av.</h4>
                        <h5>Merced, California</h5>
                      </div> 
                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/dealersmap.png"> 
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4 dealercontent">
                      <div class="row"> 
                        <div class="col-xs-12">
                          <div class="dealers">
                            <h2>NAME EXAMPLE</h2>
                            <p class="phone">(209) 723 5000</p>
                            <p class="email">test@rotoplasusa.com</p>
                          </div>
                        </div>
                      </div> 
                      <div class="row">   
                        <div class="col-xs-12">
                          <div class="dealers">
                            <h2>NAME EXAMPLE</h2>
                            <p class="phone">(209) 723 5000</p>
                            <p class="email">test@rotoplasusa.com</p>
                          </div>
                        </div> 
                      </div>
                  </div>
                </div>    
              </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="sidebar">
                  <div class="row contacteachcontent1">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                      <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/dealerimage1.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <p>Rotoplas conducts research and develops new technologies through our Center for Research and Development. </p>
                        <button type="button" class="btn newsbutton">View more</button>
                    </div>
                  </div>
                  <div class="row eachcontent">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                        <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/dealerimage2.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <p>Our training programs provide a better quality of life for construction and professional workers.</p>
                        <button type="button" class="btn newsbutton">View more</button>
                    </div>
                  </div>
                  <div class="row content">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                        <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/dealerimage3.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <p>Rotoplas creates different water solutions products, built to help those with lower incomes.</p>
                        <button type="button" class="btn newsbutton">View more</button>
                    </div>
                   </div> 
                </div>
            </div>
     </div>  
    </section>
	
<?php get_footer(); ?>