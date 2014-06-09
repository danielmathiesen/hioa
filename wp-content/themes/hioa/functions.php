<?php

// creating Ajax call for WordPress
add_action( 'wp_ajax_nopriv_RegisterSubscriber', 'RegisterSubscriber' );
add_action( 'wp_ajax_RegisterSubscriber', 'RegisterSubscriber' );

function RegisterSubscriber(){
	wp_mail("daniel.mathiesen@gmail.com", "viten+praksis", $_POST["email"]);
	die("1");
}

?>