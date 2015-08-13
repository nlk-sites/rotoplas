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
	                <h1 class="literature">Products - <?php $term =	$wp_query->queried_object;
echo $term->name;
 ?></h1>
	              </div> 
              </div>
            <div class="productcontent">
              <div class="row">
                <div class="col-xs-12">
                   <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/producttitleimage.jpg"> 
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
            
                </div>
            </div>
        
      </div>
     </div>  
    </section>
<?php get_footer(); ?>
