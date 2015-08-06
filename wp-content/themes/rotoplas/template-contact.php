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
                <h2>General questions</h2>
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
                        <h1><small>Phone</small>(209) 777 6119</h1>
                        <h2>2651 Cooper Av.</h2>
                        <h3>Merced, California</h3>
                      </div> 
                        <a href="#" class="btn faqbutton">Would you like to be distributor?</a>
                        <a href="#" class="btn faqbutton">Product and warranty information</a>
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
	        <p>Thanks for contacting us! We will contact you soon.<br/>
			   Please send lead info to <a href="mailto: sjaquez@rotoplas.com">sjaquez@rotoplas.com</a>
			</p>
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
