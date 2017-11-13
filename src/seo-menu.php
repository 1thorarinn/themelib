<?php
use Tms\ThemeOptions;
/*
 This file needs to be required manually
 */




  new ThemeOptions();


  // Helper function to use in your theme to return a theme option value
  function myprefix_get_theme_option1( $id = '' ) {
  	return ThemeOptions::get_theme_option( $id );
  }



  add_action('wp_head', 'wpb_add_googleanalytics1');
  function wpb_add_googleanalytics1() {
  	if( !is_admin() ):
  		// til að koma í veg fyrir að pagespeed insights fái scriptuna serveraða til sín
  		//if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false):
  			// your analytics code here
    		echo '<script>' . myprefix_get_theme_option1('input_example') . '</script>';


  	//	endif;
  	endif;
  }


  // An alias to the class
  function my_excerpt1($length = 55) {
    Tms\Excerpt::length($length);
  }



// psr-0 
// https://stackoverflow.com/questions/18146057/composer-autoloader-psr-0-namespaces