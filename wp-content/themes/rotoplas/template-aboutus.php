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
	                <h1 class="user"><?php the_title(); ?></h1>
	              </div>
              </div>
               <?php while ( have_posts() ) : the_post(); ?>
	                <div class="row aboutcontent">
	                  <div class="col-xs-12 col-sm-4 col-md-4 aboutusimage">
	                      <?php the_post_thumbnail('large', array('class' => 'img-responsive')); ?>
	                  </div>
	                  <div class="col-xs-12 col-sm-8 col-md-8 text">
	                      <?php the_content(); ?>
	                      <a href="#" class="btn contentbutton">About us</a>
	                      <a href="#" class="btn contentbutton">Mission / Vision</a>
	                      <a href="#" class="btn contentbutton">Careers</a>     
	                  </div>
	                </div>  
                <?php endwhile; // End of the loop. ?>
                <div class="row">
                  <div class="overviewcontent">
                    <h4>OVERVIEW</h4>
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
	                      <div class="item active">
	                          <div class="row">
		                          <div class="col-xs-12 col-sm-3 col-md-2 overviewimage">
		                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/overviewimage1.jpg">
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-4 overvieweachcontent">
		                            <h4>1989</h4>
		                            <p>A new company was founded and a new brand was created with our first product.</p>  
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-2 overviewimage">
		                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/overviewimage2.jpg">
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-4 overvieweachcontent">
		                              <h4>1991</h4>
		                              <p>More plants and distribution centers were founded.</p>
		                          </div>
	                          </div>
	                      </div>
	                      <div class="item">
	                          <div class="row">
		                          <div class="col-xs-12 col-sm-3 col-md-2 overviewimage">
		                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/overviewimage1.jpg">
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-4 overvieweachcontent">
		                            <h4>1989</h4>
		                            <p>A new company was founded and a new brand was created with our first product.</p>
		                              
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-2 overviewimage">
		                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/overviewimage2.jpg">
		                          </div>
		                          <div class="col-xs-12 col-sm-3 col-md-4 overvieweachcontent">
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
