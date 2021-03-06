<?php
/**
 * Template Name: Contact
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
                <h1 class="contact">CONTACT</h1>
                <h2>For Additional Information</h2>
              </div>
              </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-5 col-md-5">
                        <?php while ( have_posts() ) : the_post(); ?>
	                        <?php the_content(); ?>
                        <?php endwhile; // End of the loop. ?>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-7">
                      <div class="contactaddress">
                        <h2><span>CALL</span>1-800-985-3417</h2>
                        <h2>FAX - (209) 284 1294</h2>
                        <h2>2651 Cooper Ave.</h2>
                        <h2>Merced, California</h2>
                      </div> 
                        <a href="<?php bloginfo('url'); ?>/distributor" class="btn faqbutton">Become a Distributor</a>
                        <?php /* ?><a href="<?php bloginfo('url'); ?>/warranty" class="btn faqbutton">Product and warranty information</a><?php */ ?>
                  </div>
                </div>    
              </div>
     	</div>        
     </div>  
    </section>
    <div class="modal fade" id="thankyoupop">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Thank You</h4>
	      </div>
	      <div class="modal-body">
	        <p>Thanks for contacting us! We will contact you soon.<br/></p>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
    <script type="text/javascript">
   		jQuery(document).ready(function(){
   			
   		});
   		
   		function popupthankyou()
   		{
			jQuery('#thankyoupop').modal('show');
   		}
   </script>
<?php get_footer(); ?>
