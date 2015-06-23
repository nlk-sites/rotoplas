<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rotoplas
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Bootstrap -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/jquery.mobile.min.css" />
<link href="<?php bloginfo('template_url'); ?>/css/custom.css" rel="stylesheet">

<!-- Custom WebFont -->
<link href='http://fonts.googleapis.com/css?family=Signika:400,600,700,300' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="xhttps://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="xhttps://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.mobile.min.js"></script>
</head>
<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery( "#sidemenumobile" ).panel();
		jQuery('#mobilemenuo').click(function(){
			jQuery( "#sidemenumobile" ).panel("open");
		});
	});
</script>
<body <?php body_class(); ?>>
<div data-role="page"> 
	<div data-role="panel" id="sidemenumobile" data-position="right" data-display="overlay">
	    <!-- panel content goes here -->
	    <div class="mobilemenucontent">
	    	<h3>MENU</h3>
	    	<?php wp_nav_menu( array( 'menu_class'=>'','theme_location' => 'mobilemenu', 'menu_id' => 'mobilemenu', 'container' => '', 'container_class' => '', 'container_id'  => '') ); ?>	
	    </div>
	    
	 </div>
	 <section data-role="header" class="wrapper menucontainer">
	      <div class="container">
	        <div class="row">
	          <div class="col-xs-6 col-sm-6 col-md-2">
	            <h1 class="logo"><a href="<?php bloginfo('url');?>">Rotoplas</a></h1>
	          </div>
	          <div class="col-xs-12 col-sm-10 col-md-10 hidden-xs hidden-sm">
		          <nav class="navbar navbar-default">          
		          <div class="container-fluid">
		            <!-- Brand and toggle get grouped for better mobile display -->
		            <div class="navbar-header">
		              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		              </button>
		            </div>
		
		            <!-- Collect the nav links, forms, and other content for toggling -->
		            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		              <?php wp_nav_menu( array( 'menu_class'=>'nav navbar-nav','theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		              </div><!-- /.navbar-collapse -->
		            </div><!-- /.container-fluid -->
		          </nav>
	          <span class="logo-circle"></span>
	        </div>
	        <div class="col-xs-6 col-sm-6 visible-xs-block visible-sm-block">
	        	<div class="headicoblock">
	        		<div class="logo-circle-mb"></div>
	        		<div class="menu-ico-mb"><a href="#sidemenumobile" id="xmobilemenuo">MENU</a></div>
	        	</div>
	        </div> 
	      </div>
	      </div>
	    </section>

