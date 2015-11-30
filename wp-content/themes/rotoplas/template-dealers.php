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
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="row">
                <div class="col-xs-12 contenttitle">
                  <h1 class="dealericon">Dealers</h1>
                </div>
              </div>
              <div class="row">
                  <div class="col-xs-12 col-sm-8 col-md-8">
                    <div class="address">
                        <h3><small>To find a dealer nearest you call</small>(209) 723 5000</h3>
                        <h4>2651 Cooper Ave</h4>
                        <h5>Merced, California</h5>
                      </div> 
                    <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/dealersmap.png" style="margin-left: auto; margin-right: auto;" /> 
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4 dealercontent">
                    <h3>Sales Contacts</h3>
                      <div class="row"> 
                        <div class="col-xs-12">
                          <div class="dealers">
                            <h2>BRUCE HALLINAN<br><span class="title">Regional Sales Manager - CA</span></h2>
                            <p class="phone">(209) 205 0500</p>
                            <p class="email"><a href="mailto: bhallinan@rotoplas.com">bhallinan@rotoplas.com</a></p>
                          </div>
                        </div>
                      </div> 
                      <div class="row">   
                        <div class="col-xs-12">
                          <div class="dealers">
                            <h2>SEAN CLARK<br><span class="title">National Account Manager</span></h2>
                            <p class="phone">(949) 292 9354</p>
                            <p class="email"><a href="mailto: sclark@rotoplas.com">sclark@rotoplas.com</a></p>
                          </div>
                        </div> 
                      </div>
                      <div class="row">   
                        <div class="col-xs-12">
                          <div class="dealers">
                            <h2>COY CLARK<br><span class="title">Regional Sales Manager - TX</span></h2>
                            <p class="phone">(972) 854 2815</p>
                            <p class="email"><a href="mailto: cclark@rotoplas.com">cclark@rotoplas.com</a></p>
                          </div>
                        </div> 
                      </div>
                      <div class="row">   
                        <div class="col-xs-12">
                          <div class="dealers">
                            <h2>DAVID WRIGHT<br><span class="title">Regional Sales Manager - GA</span></h2>
                            <p class="phone">(678) 206 7378</p>
                            <p class="email"><a href="mailto: dwright@rotoplas.com">dwright@rotoplas.com</a></p>
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
