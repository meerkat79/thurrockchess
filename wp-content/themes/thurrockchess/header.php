<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
    <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width"> 
        
    <title><?php bloginfo('title')?></title>


    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" rel="icon" type="image/x-icon" />

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-2.1.3.min.js"></script>
        
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
        
	<?php wp_head() ?>
</head>

<body class="container" <?php body_class(); ?> >

    <header class="row">
        <nav class="col-md-12 col-sm-12 col-xs-12 navbar navbar-fixed-top">
            <div class="nav-container">
                <div class="col-md-6 col-sm-12 col-xs-12 stand-center">
                    <h1><a href="<?php echo home_url('/') ?>"><?php bloginfo('name')?></a></h1>
                    <h4><?php bloginfo('description'); ?> </h4>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 stand-center"><?php wp_nav_menu(); ?></div>               
            </div>
        </nav> 


        <div class="col-md-12 col-sm-12 col-xs-12 sub-nav-area"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></div>
    </header>


    <section class="row">
