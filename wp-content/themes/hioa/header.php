<?php 

if (stristr($_SERVER['HTTP_HOST'], 'vitenpraksis.no')){
    header('Location: http://vitenogpraksis.no');
}

header('X-UA-Compatible: IE=edge,chrome=1'); 

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie10"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie10"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!-- Replaced with header -->
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
        <title>Viten + praksis</title>
        <meta name="description" content="Viten + praksis er et forskningsmagasin fra Høgskolen i Oslo og Akershus">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/spritesheet.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
        
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon-152x152.png">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicons/favicon-196x196.png" sizes="196x196">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicons/favicon-160x160.png" sizes="160x160">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicons/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/favicons/favicon-32x32.png" sizes="32x32">

        <!-- typography.com -->
        <link rel="stylesheet" type="text/css" href="//cloud.typography.com/6204492/669084/css/fonts.css" />
		
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrap">
    		<div class="header">
    			<div class="logo-container">
                    <div class="logo-container-table">
                        <div class="hioa-logo-table-cell">
        				    <img class="hioa-logo" src="<?php bloginfo('template_directory'); ?>/img/hioa-logo.png" alt="Høgskolen i Oslo og Akershus" />
        				</div>
                        <div class="logo-container-spacing-cell"></div>
                        <div class="site-logo-table-cell">
                            <img class="site-logo" src="<?php bloginfo('template_directory'); ?>/img/site-logo.png" alt="viten+praksis" />
                        </div>
                    </div>
                </div>
    		</div>
