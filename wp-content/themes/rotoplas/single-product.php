<?php
/**
 * Product Detail Page
 *
 * @package rotoplas
 */

get_header(); ?>
	<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('.bxslider').bxSlider({
				  pagerCustom: '#bx-pager',
				  controls: false
			});
		});
	</script>
	<section class="wrapper literaturecontent newproductcontent">
      <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="row">
	              <div class="col-xs-12">
	                <h1 class="literature">Products</h1>
	              </div>
              </div>
             	<div class="row">
             		<div class="col-xs-12">		
					 <!-- Nav tabs -->
					  <ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">OVERVIEW</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="overview">
					    	<div class="row">
					    		<div class="col-xs-12">
					    			<div class="titlewithbtns">
						    			<div class="row">
						    				<div class="col-xs-12 col-sm-6 col-md-6 col-md-push-6 col-sm-push-6">
								    			<ul>
								    				<li><a href="<?php bloginfo('url'); ?>/dealers/" class="btn btn-primary btn-blue btn-white">Find a Dealer</a></li>
									    			<li><a href="<?php bloginfo('url'); ?>/customer-service/" class="btn btn-primary btn-blue btn-white">Get a quote</a></li>
								    			</ul>
								    		</div>
								    		<div class="col-xs-12 col-sm-6 col-md-6 col-md-pull-6 col-sm-pull-6">
								    			<h2>PRODUCT  DESCRIPTION</h2>
								    		</div>
						    			</div>
						    		</div>	
					    		</div>
					    	</div>
					    	<div class="row">
						    	<div class="col-xs-12 col-sm-12 col-md-12">
						    		<div class="row">
						    			<div class="col-xs-12 col-sm-6 col-md-6">
						    				<h1><?php the_title(); ?></h1>
						    				<div class="product_desc">
							    				<?php the_field('product_description'); ?>
						    				</div>	
						    				<div class="product_downloads">
						    					<h4>Product Downloads</h4>				  
												    	<ul class="pdfdownloads2">
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
														    <?php
														    	if(get_field('product_instruction_sheet'))
																{
																	?>
																		<li><a href="<?php the_field('product_instruction_sheet'); ?>" target="_blank"> Product Instruction Sheet </a></li>
																	<?php
																}
														    ?>
												    	</ul>
						    				</div>
						    				<?php if( get_field('show_product_information') ): ?>
												<div class="product_downloads system_includes">
													<h4>System Includes</h4>
													<?php the_field('product_information'); ?>
												</div>
											<?php endif; ?>
						    				<table class="spectable">
						    					<thead>
						    						<tr>
						    							<th>Capacity</th>
						    							<th>Diameter (A)</th>
						    							<th>Height (B)</th>
						    							<th>Colors</th>
						    						</tr>
						    						<tbody>
						    							<tr>
						    								<td class="capacitytd"><?php the_field('capacity'); ?> Gallons</td>
						    								<td class="diametertd"><?php the_field('diameter_a'); ?> Inches</td>
						    								<td class="heighttd"><?php the_field('height_b'); ?> Inches</td>
						    								<td class="colorstd">
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
																							        	echo '<span class="color-block" style="background: #'.$value.'"></span>';
																						?>
																						<?php
																				    endwhile;
																				
																				else :
																				
																				    // no rows found
																				
																				endif;
																										    				
															    			?>
						    								</td>
						    							</tr>
						    						</tbody>
						    					</thead>
						    				</table>
						    				<div class="row warranty_types">
						    					<div class="col-xs-12 col-sm-12 col-md-12">
								    			<?php
								    				if( have_rows('warranty_types') ):
		
													 	// loop through the rows of data
													    while ( have_rows('warranty_types') ) : the_row();
															?>
																
								    								<div class="warranty">
																		<?php
																        // display a sub field value
																       		the_sub_field('warranty_description');
																		?>
																	</div>	
								    							
															<?php
													    endwhile;
													
													else :
													
													    // no rows found
													endif;
																			    				
								    			?>
								    			</div>	
								    		</div>
						    			</div>
						    			<div class="col-xs-12 col-sm-6 col-md-6 productSlider">
						    				  <?php
								    				if( have_rows('product_slides') ):
		
													 	// loop through the rows of data
													 	$thumbshtml = '';
													 	$imgcount = 0;
													 	echo '<ul class="bxslider">';
													    while ( have_rows('product_slides') ) : the_row();
															?>
																		<?php 
																			$productImage = get_sub_field('product_image');
																			
																			if($productImage)
																			{
																				    echo '<li>'.wp_get_attachment_image( $productImage, 'full' ).'
																				    	  <div class="slider-caption">'.get_sub_field('product_caption').'</div>
																				    	  </li>';
																					$size = 'slider-thumb';
																					$thumbshtml .= '<li><a data-slide-index="'.$imgcount.'" href="">'.wp_get_attachment_image( $productImage, 'slider-thumb' ).'</a></li>';	
																					$imgcount += 1;																	
																			} 
																		?>
																	
								    							
															<?php
													    endwhile;
														echo '</ul>';
														?>
															<div id="bx-pager">
															  <?php echo '<ul>'.$thumbshtml.'</ul>'; ?>
															</div>
														<?php
													else :
													
													  ?>
														<img class="img-responsive imagecontent1" src="<?php the_field('product_image'); ?>">
													<?php
													endif;
																			    				
								    		  ?>
						    			</div>
						    		</div>
						    	</div>
						    </div>	
							    <div class="row">
							    	<div class="col-xs-12 col-sm-6 col-md-6 rotoplasview view_top">
							    		<h2>TOP VIEW</h2>
							    		<div class="row">
							    			<div class="col-xs-12 col-sm-6 col-md-7 view_desc">
							    				<?php the_field('top_view_description'); ?>	
							    			</div>
							    			<div class="col-xs-12 col-sm-6 col-md-5 view_image">
							    				<img class="img-responsive imagecontent1 topviewimg" src="<?php the_field('top_view_image'); ?>">
							    			</div>
							    		</div>
							    	</div>
							    	<div class="col-xs-12 col-sm-6 col-md-6 rotoplasview view_side">
							    		<h2>SIDE VIEW</h2>
							    		<div class="row">
							    			<div class="col-xs-12 col-sm-6 col-md-7 view_desc">
							    				<?php the_field('side_view_description'); ?>			
							    			</div>
							    			<div class="col-xs-12 col-sm-6 col-md-5 view_image">
							    				<img class="img-responsive imagecontent1" src="<?php the_field('side_view_image'); ?>">
							    			</div>
							    		</div>
							    	</div>
							    </div>
							    <div class="row rotoplasapplication">
							    	<div class="col-xs-12">
							    		<?php the_field('applications_description'); ?>	
							    	</div>
							    </div>
								<div class="row network">
									<div class="col-xs-12 col-sm-7 col-md-8">
										<p>Get details from our dealer network and find out more about pricing</p>
									</div>
									<div class="col-xs-12 col-sm-5 col-md-4">
										<ul>
									    	<li><a href="<?php bloginfo('url'); ?>/dealers/" class="btn btn-primary btn-blue btn-white">Find a Dealer</a></li>
									    	<li><a href="<?php bloginfo('url'); ?>/customer-service/" class="btn btn-primary btn-blue btn-white">Get a quote</a></li>
									    </ul>
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
