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
            <div class="col-xs-12 col-sm-8 col-md-8">
              <div class="row">
              <div class="col-xs-12 contenttitle">
                <h1 class="contact">CONTACT</h1>
                <h2>General questions</h2>
              </div>
              </div>
                <div class="row">
                  <div class="col-xs-12 col-sm-5 col-md-5">
                        <div class="contactform">
                          <form class="contact-form">
                            <label>NAME:</label>
                            <input type="text" name="name" class="form-control">  
                            <label>STATE:</label>
                            <input type="text" name="name" class="form-control">
                            <label>EMAIL:</label>
                            <input type="email" name="name" class="form-control">
                            <label>TELEPHONE:</label>
                            <input type="text" name="name" class="form-control">
                            <label>COMMENTS:</label>
                            <textarea class="form-control"></textarea>
                            <button type="button" class="btn contactformbutton">Send</button>
                          </form> 
                        </div>  
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-7">
                      <div class="contactaddress">
                        <h1><small>Phone</small>(209) 723 5000</h1>
                        <h2>2651 Cooper Av.</h2>
                        <h3>Merced, California</h3>
                      </div> 
                        <button type="button" class="btn faqbutton">Would you like to be distributor?</button>
                        <button type="button" class="btn faqbutton">Product and warranty information</button> 
                        <button type="button" class="btn faqbutton">General questions</button>  
                  </div>
                </div>    
              </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="sidebar">
                  <div class="row contacteachcontent1">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                      <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/facebookimage.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <p>Rotoplas conducts research and develops new technologies through our Center for Research and Development. </p>
                        <button type="button" class="btn newsbutton">View more</button>
                    </div>
                  </div>
                  <div class="row eachcontent">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                        <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/twitterimage.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <p>Our training programs provide a better quality of life for construction and professional workers.</p>
                        <button type="button" class="btn newsbutton">View more</button>
                    </div>
                  </div>
                  <div class="row content">
                    <div class="col-xs-12 col-sm-5 col-md-5 imagecontent">
                        <img class="img-responsive newsimage" src="<?php bloginfo('template_url'); ?>/images/usamapimage.jpg">
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7">
                        <p>Rotoplas creates different water solutions products, built to help those with lower incomes.</p>
                        <button type="button" class="btn newsbutton">View more</button>
                    </div>
                   </div> 
                </div>
            </div>
     </div>  
    </section>
<?php get_footer(); ?>
