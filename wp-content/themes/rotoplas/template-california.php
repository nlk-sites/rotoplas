<?php
/**
 * Template Name: California Landing Page
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

	<section data-role="main" class="wrapper content california-landing">
      <div class="container">
        <div class="row">
	    	<div class="col-xs-12 text-center">
	        	<h1>Agricultural Storage Solutions from Rotoplas</h1>
	       	</div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-8">
              <div class="row">
              	<div class="col-xs-12">
                  <img src="<?php bloginfo('template_url'); ?>/images/rotoplas-order-banner.jpg" class="img-responsive banner-img" />
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-4">
                <div class="row sidebar">
                 <div class="col-xs-12">
	                <h3>Find a Distributor</h3>
	                <?php echo do_shortcode('[gravityform id="5" title="false" description="false"]'); ?>
	              </div>
                </div>
            </div>
      	</div>
      	<div class="row bottom-content">
      		<div class="col-xs-12">
      			<div class="row list-content">
		      		<div class="col-xs-12 col-sm-8 col-md-7">
		      			<ul>
			      			<li>Strong, durable construction</li>
							<li>Will not leak, rust, chip or corrode</li>
							<li>Roto-molded high density polyethylene</li>
						</ul>
		      		</div>
		      		<div class="col-xs-12 col-sm-4 col-md-5">
		      			<img src="<?php bloginfo('template_url'); ?>/images/made_in_usa.png" class="img-responsive madeinusa"/>
		      		</div>
	      		</div>
	      		<div class="row">
	      			<div class="col-xs-12">
	      				<p>Experts in rotational molding we know what is required to produce industry leading products and use only non-recycled, raw materials. With NSF and FDA certifications, Rotoplas tanks not only meet our own quality standards but those in the industry as well.</p>
	      			</div>
	      		</div>	
	      	</div>	
      	</div>
     </div>  
    </section>
<?php get_footer(); ?>
