<div class="row">
	<div class="overviewcontent">
		<h4>OVERVIEW</h4>
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php
						$args = array('post_type' => 'overview', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC');
						$the_query = new WP_Query($args);
						$count = 0;
						$open = false;
						while ( $the_query->have_posts() ) : $the_query->the_post();
						$count += 1;
						
						$class = ' active';
						
						
						if($count > 1)
						{
							$class = '';
						}
						
						if($count%2)
						{
							echo '<div class="item'.$class.'">
									<div class="row">';	
							$open = true;			
						}
						
				?>
						
								<div class="col-xs-12 col-sm-3 col-md-2 overviewimage">
									<?php the_post_thumbnail('overview-thumb', array('class' => '')); ?>
								</div>
								<div class="col-xs-12 col-sm-3 col-md-4 overvieweachcontent">
									<h4><?php the_title(); ?></h4>
									<?php the_content(); ?>
								</div>
				<?php 
					
					if($count%2 == 0)
					{
						$open = false;
						echo '</div>
							</div>';
					}

					endwhile;
					  
					wp_reset_postdata();
					
					if($open)
					{
						$open = false;
						echo '</div>
							</div>';
					} 
				?>
				
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="leftarrow" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="rightarrow" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
		</div>
	</div>
</div>