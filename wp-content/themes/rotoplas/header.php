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
</head>

<body <?php body_class(); ?>>
 <section class="wrapper menucontainer">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-2 col-md-2">
            <h1 class="logo"><a href="<?php the_permalink('home');?>">Rotoplas</a></h1>
          </div>
          <div class="col-xs-12 col-sm-10 col-md-10">
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
      </div>
      </div>
    </section>

