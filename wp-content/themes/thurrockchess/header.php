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
<header>
    <div class="left-nav">
        <h1><a href="<?php echo home_url('/') ?>"><?php bloginfo('name')?></a></h1>
        <h4 class="header-fix"><?php bloginfo('description'); ?> </h4>
    </div>
    
    <nav>
        <?php wp_nav_menu(); ?>
    </nav>
    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
    
</header>

<body <?php body_class(); ?> class="container">
    <div id="container">