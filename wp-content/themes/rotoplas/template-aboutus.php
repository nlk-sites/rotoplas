<?php
/**
 * Template Name: AboutUs
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
	                <h1 class="user">ABOUT US</h1>
	              </div>
              </div>
                <div class="row aboutcontent">
                  <div class="col-xs-12 col-sm-4 col-md-4 aboutusimage">
                      <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/map.png">
                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 text">
                      <p><span>Since 1978, our mission is to help improve the quality of life for our end  consumers.</span> Every day we focus on creating solutions to help make water more readily available, clean and clear. </p>
                      <p><span>Rotoplas is a globally recognized leader in the designed and manufacturing of water, feed and chemical storage polyethylene solutions.</span> These heritage products and commitment to service, quality and innovation is what's driven our growth accross the United States, Mexico and the rest of Lation America; bringing to market storage, handling purification and water treatment solutions currently produced throught <span>26 plants across both continents with the newest plant in Merced, CA.<span> By leveraging our production expertise and manufacturing capacity, we commit to having product when you need it most.</p>
                      <button type="button" class="btn contentbutton">About us</button>
                      <button type="button" class="btn contentbutton">Mission / Vision</button>
                      <button type="button" class="btn contentbutton">Careers</button>     
                  </div>
                </div>  
                <div class="row">
                  <div class="overviewcontent">
                    <h4>OVERVIEW</h4>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
	                      <div class="item active">
	                          <div class="row">
		                          <div class="col-xs-12 col-sm-3 col-md-3 overviewimage">
		                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/overviewimage1.jpg">
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-3 overvieweachcontent">
		                            <h4>1989</h4>
		                            <p>A new company was founded and a new brand was created with our first product.</p>
		                              
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-3 overviewimage">
		                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/overviewimage2.jpg">
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-3 overvieweachcontent">
		                             <h4>1991</h4>
		                              <p>More plants and distribution centers were founded.</p>
		                          </div>
	                          </div>
	                      </div>
	                      <div class="item">
	                          <div class="row">
		                          <div class="col-xs-12 col-sm-3 col-md-3 overviewimage">
		                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/overviewimage1.jpg">
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-3 overvieweachcontent">
		                            <h4>1989</h4>
		                            <p>A new company was founded and a new brand was created with our first product.</p>
		                              
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-3 overviewimage">
		                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/overviewimage2.jpg">
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-3 overvieweachcontent">
		                             <h4>1991</h4>
		                              <p>More plants and distribution centers were founded.</p>
		                          </div>
		                      </div> 
	                      </div>
                      </div> 
                       <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="leftarrow" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="rightarrow" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div> 
                   </div>    
                </div> 
              </div>
            
        
      </div>
     </div>  
    </section>
<?php get_footer(); ?>
