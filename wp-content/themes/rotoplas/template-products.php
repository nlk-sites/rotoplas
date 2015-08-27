<?php
/**
 * Template Name: Product Listing
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
             <div class="row archive-tabs">
             		<div class="col-xs-12">		
					 <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#watertanks" aria-controls="watertanks" role="tab" data-toggle="tab">Water Tanks</a></li>
					    <li role="presentation"><a href="#agriculturaltanks" aria-controls="agriculturaltanks" role="tab" data-toggle="tab">Agricultural Tanks</a></li>
					    <li role="presentation"><a href="#industrialtanks" aria-controls="industrialtanks" role="tab" data-toggle="tab">Industrial Tanks</a></li>
					    <?php
					    	if(get_field('drawing_specs'))
							{
								?>
									<li role="presentation"><a href="<?php the_field('drawing_specs'); ?>" target="_blank">SPECIFICATIONS</a></li>
								<?php
							}
					    ?>
					  </ul>
					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="watertanks">
					    	<div class="productcontent">
				              <div class="row">
				                <div class="col-xs-12">
				                   <h2>Water Tanks</h2>
				                </div>
				              </div>
				                  <?php 
				                  		$tax_query =  array(
															array(
																'taxonomy' => 'product-category',
																'field'    => 'slug',
																'terms'    => 'water-tanks',
															),
														);
																
										$args = array('post_type' => 'product', 'posts_per_page' => -1, 'tax_query' => $tax_query, 'orderby' => 'title', 'order' => 'asc');
										$the_query2 = new WP_Query($args); 
										
				                  		if ( $the_query2->have_posts() ) : ?>
										<div class="row groupproduct">
											<?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?>
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
									<?php else : ?>
										<div class="row groupproduct">
											<div class="col-xs-12">
												<h3>Sorry! No Products Found</h3>
											</div>
										</div>
									<?php endif; ?>
				            </div>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="agriculturaltanks">
					    	<div class="productcontent">
				              <div class="row">
				                <div class="col-xs-12">
				                   <h2>Agricultural Tanks</h2>
				                </div>
				              </div>
				                  <?php 
				                  		$tax_query =  array(
															array(
																'taxonomy' => 'product-category',
																'field'    => 'slug',
																'terms'    => 'agricultural-tanks',
															),
														);
																
										$args = array('post_type' => 'product', 'posts_per_page' => -1, 'tax_query' => $tax_query, 'orderby' => 'title', 'order' => 'asc');
										$the_query2 = new WP_Query($args); 
										
				                  		if ( $the_query2->have_posts() ) : ?>
										<div class="row groupproduct">
											<?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?>
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
									<?php else : ?>
										<div class="row groupproduct">
											<div class="col-xs-12">
												<h3>Sorry! No Products Found</h3>
											</div>
										</div>
									<?php endif; ?>
				            </div>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="industrialtanks">
					    	<div class="productcontent">
				              <div class="row">
				                <div class="col-xs-12">
				                   <h2>Industrial Tanks</h2>
				                </div>
				              </div>
				                  <?php 
				                  		$tax_query =  array(
															array(
																'taxonomy' => 'product-category',
																'field'    => 'slug',
																'terms'    => 'industrial-tanks',
															),
														);
																
										$args = array('post_type' => 'product', 'posts_per_page' => -1, 'tax_query' => $tax_query, 'orderby' => 'title', 'order' => 'asc');
										$the_query2 = new WP_Query($args); 
										
				                  		if ( $the_query2->have_posts() ) : ?>
										<div class="row groupproduct">
											<?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?>
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
          </div>
        </div> 
    </section>
<?php get_footer(); ?>
