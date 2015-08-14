<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package rotoplas
 */

get_header(); ?>
	<section class="wrapper privacycontent">
      <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                	<div class="col-xs-12">
	                    <?php while ( have_posts() ) : the_post(); ?>
							<h1><?php the_title(); ?></h1>	
							<?php the_content(); ?>
						<?php endwhile; // End of the loop. ?>
                  	</div>  	
                </div>    
            </div>
     </div>  
    </section>
    
<?php get_footer(); ?>
