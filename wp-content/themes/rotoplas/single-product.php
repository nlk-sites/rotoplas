<?php
/**
 * Product Detail Page
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
             	<div>
             		<div class="col-xs-12">		
					 <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">OVERVIEW</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="overview">
					    
					    	<div class="row">
						    	<div class="col-xs-12 col-sm-7 col-md-7">
						    		<div class="row">
						    			<div class="col-xs-12 col-sm-8 col-md-8">
						    				<h2>PRODUCT  DESCRIPTION</h2>
						    				<h3><?php the_title(); ?></h3>
						    				<table class="spectable">
						    					<thead>
						    						<tr>
						    							<th>Capacity</th>
						    							<th>Diameter (A)</th>
						    							<th>Height (B)</th>
						    						</tr>
						    						<tbody>
						    							<tr>
						    								<td><?php the_field('capacity'); ?> Gallons</td>
						    								<td><?php the_field('diameter_a'); ?> Inches</td>
						    								<td><?php the_field('height_b'); ?> Inches</td>
						    							</tr>
						    						</tbody>
						    					</thead>
						    				</table>
						    				<div class="product_desc">
							    				<?php the_field('product_description'); ?>
						    				</div>	
						    			</div>
						    			<div class="col-xs-12 col-sm-4 col-md-4">
						    				<img class="img-responsive imagecontent1" src="<?php the_field('product_image'); ?>">
						    			</div>
						    		</div>	
						    		<div class="row">
						    			<div class="col-xs-12 col-sm-8 col-md-8">
						    				<?php the_field('top_view_description'); ?>	
						    			</div>
						    			<div class="col-xs-12 col-sm-4 col-md-4">
						    				<img class="img-responsive imagecontent1 topviewimg" src="<?php the_field('top_view_image'); ?>">
						    			</div>
						    		</div>	
						    		<div class="row">
						    			<div class="col-xs-12 col-sm-8 col-md-8">
						    				<?php the_field('side_view_description'); ?>			
						    			</div>
						    			<div class="col-xs-12 col-sm-4 col-md-4">
						    				<img class="img-responsive imagecontent1" src="<?php the_field('side_view_image'); ?>">
						    			</div>
						    		</div>		
						    	</div>
						    	<div class="col-xs-12 col-sm-5 col-md-5">
						    		<div class="row">
						    			<?php
						    				if( have_rows('warranty_types') ):

											 	// loop through the rows of data
											    while ( have_rows('warranty_types') ) : the_row();
													?>
														<div class="col-xs-12 col-sm-12 col-md-12">
						    								<div class="warranty">
																<?php
														        // display a sub field value
														       		the_sub_field('warranty_description');
																?>
															</div>	
						    							</div>	
													<?php
											    endwhile;
											
											else :
											
											    // no rows found
											
											endif;
																	    				
						    			?>
						    		</div>
						    		<div class="row">
						    			<div class="col-xs-12">
						                      <div class="colors">
												    			   	<h2>Colors avaliable</h2>				  
												    					  <?php
															    				if( have_rows('colors_available') ):
									
																				 	// loop through the rows of data
																				    while ( have_rows('colors_available') ) : the_row();
																						?>
																						<?php
																							        // display a sub field value
																							        	$field = get_sub_field_object('color_name');
																										$value = get_sub_field('color_name');
																										$label = $field['choices'][ $value ];
																							        	echo '<h3><span class="color-block" style="background: #'.$value.'"></span>'.$label.'</h3>';
																						?>
																						<?php
																				    endwhile;
																				
																				else :
																				
																				    // no rows found
																				
																				endif;
																										    				
															    			?>
												  </div>
												  <div class="colors">
												    	<h2 style="margin-top: 30px;">Product Information</h2>				  
												    	<ul class="pdfdownloads">
												    		<?php
														    	if(get_field('chemical_resistance_quick'))
																{
																	?>
																		<li><a href="<?php the_field('chemical_resistance_quick'); ?>" target="_blank">Chemical Resistance - Quick Reference PDF</a></li>
																	<?php
																}
														    ?>
												    		<?php
														    	if(get_field('chemical_resistance_detailed'))
																{
																	?>
																		<li><a href="<?php the_field('chemical_resistance_detailed'); ?>" target="_blank">Chemical Resistance - Detailed PDF</a></li>
																	<?php
																}
														    ?>
												    		<?php
														    	if(get_field('drawing_specs'))
																{
																	?>
																		<li><a href="<?php the_field('drawing_specs'); ?>" target="_blank">Product Specification</a></li>
																	<?php
																}
														    ?>
												    	</ul>			
												  </div>
						    			</div>		
						    		</div>
						    		</div>
						    	</div>	
						    	<div class="row">
						    			<div class="col-xs-12">
						    				<?php the_field('applications_description'); ?>	
						    			</div>
						    		</div>

					    	</div>
					    	<div role="tabpanel" class="tab-pane" id="chemicalresistance">...</div>
					  </div>

					</div>
               		</div>
              	</div>
        
      </div>
     </div>  
    </section>
<?php get_footer(); ?>
