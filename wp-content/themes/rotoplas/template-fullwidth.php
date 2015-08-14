<?php
/**
 * Template Name: Fullwidth
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
	<section class="wrapper privacycontent">
	      <div class="container">
	        <div class="row">
	            <div class="col-xs-12 col-sm-12 col-md-12">
	                <?php while ( have_posts() ) : the_post(); ?>
						<h1><?php the_title(); ?></h1>	
						<?php the_content(); ?>
					<?php endwhile; // End of the loop. ?>    
	           </div>
	     	</div> 
	     </div>  
	</section>
<?php get_footer(); ?>
