<?php
/**
 * Product Archive
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

	<section class="wrapper literaturecontent">
      <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="row">
	              <div class="col-xs-12">
	                <h1 class="literature">Products</h1>
	              </div> 
              </div>
            <div class="productcontent">
              <div class="row">
                <div class="col-xs-12">
                   <div class="product_bg"></div>
                </div>
              </div>
                  <?php if ( have_posts() ) : ?>
						<div class="row groupproduct">
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="col-xs-12 col-sm-3 col-md-2 eachproduct">
			                      <div class="producteachcontent">
			                        <?php the_post_thumbnail('product-thumb', array('class' => 'img-responsive')) ?>
			                        <h2><?php the_title(); ?></h2>
			                        <p><?php the_field('product_short_description'); ?></p>
			                        <a href="<?php the_permalink(); ?>" class="btn productbutton" >View more</a>
			                      </div>
			                  	</div>
							<?php endwhile; ?>
						</div>   
						
						<div class="row">
			                <div class="col-xs-12 col-sm-6 col-md-6 previousbuttoncontainer">
			                    <?php previous_posts_link('< Previous' ); ?>
			                </div>  
			                <div class="col-xs-12 col-sm-6 col-md-6 nextbuttoncontainer">
			                    <?php next_posts_link( 'Next >', '' ); ?>
			                </div>
			            </div>
					<?php else : ?>
						<div class="row groupproduct">
							<div class="col-xs-12">
								<h3>Sorry! No Products Found</h3>
							</div>
						</div>
					<?php endif; ?>
              

            </div>  
          </div> 
          <?php /* ?> 	
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="sidebar">
                  <div class="row producteachcontent1">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                      <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/literaturesidebarimage1.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <h2>200 Gallon Storage Tank</h2> 
                        <p>Lorem Ipsum es simplemente el texto de relleno de</p>
                        <a href="<?php bloginfo('url'); ?>/literature-details/" class="btn productbutton" >View more</a>
                    </div>
                  </div>
                  <div class="row productsidebarcontent">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                        <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/literaturesidebarimage2.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <h2>400 Gallon Storage Tank</h2>
                        <p>Lorem Ipsum es simplemente el texto de relleno de</p>
                        <a href="<?php bloginfo('url'); ?>/literature-details/" class="btn productbutton" >View more</a>
                    </div>
                  </div>
                  <div class="row productsidebarlastcontent">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                        <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/literaturesidebarimage3.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <h2>500 Gallon Storage Tank</h2>
                        <p>Lorem Ipsum es simplemente el texto de relleno de</p>
                        <a href="<?php bloginfo('url'); ?>/literature-details/" class="btn productbutton" >View more</a>
                    </div>
                   </div> 
                   
                   </div>   
                </div><?php */ ?>
                </div>
            </div>
        
      </div>
     </div>  
    </section>
<?php get_footer(); ?>
