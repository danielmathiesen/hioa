<?php

if (stristr($_SERVER['HTTP_HOST'], 'vitenpraksis.no')){
    header('Location: http://vitenogpraksis.no');
}

?>

<?php header('X-UA-Compatible: IE=edge,chrome=1'); ?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie10"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8 lt-ie10"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!-- Replaced with header -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Viten + praksis</title>
        <meta name="description" content="Viten + praksis er et forskningsmagasin fra Høgskolen i Oslo og Akershus">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/spritesheet.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/overlay.css">
        
        <!-- ****** faviconit.com favicons ****** -->
        <!--
        <link rel="shortcut icon" href="/wp-content/themes/hioa/img/favicon/favicon.ico">
        <link rel="icon" sizes="16x16 32x32 64x64" href="/wp-content/themes/hioa/img/favicon/favicon.ico">
        <link rel="icon" type="image/png" sizes="196x196" href="/wp-content/themes/hioa/img/favicon/favicon-196.png">
        <link rel="icon" type="image/png" sizes="160x160" href="/wp-content/themes/hioa/img/favicon/favicon-160.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/wp-content/themes/hioa/img/favicon/favicon-96.png">
        <link rel="icon" type="image/png" sizes="64x64" href="/wp-content/themes/hioa/img/favicon/favicon-64.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/hioa/img/favicon/favicon-32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/hioa/img/favicon/favicon-16.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/hioa/img/favicon/favicon-152.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/wp-content/themes/hioa/img/favicon/favicon-144.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/hioa/img/favicon/favicon-120.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/hioa/img/favicon/favicon-114.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/hioa/img/favicon/favicon-76.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/hioa/img/favicon/favicon-72.png">
        <link rel="apple-touch-icon" href="/wp-content/themes/hioa/img/favicon/favicon-57.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="/wp-content/themes/hioa/img/favicon/favicon-144.png">
        <meta name="msapplication-config" content="/browserconfig.xml">
        -->
        <!-- ****** faviconit.com favicons ****** -->

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
