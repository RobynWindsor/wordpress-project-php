<?php

// Loading style.css to site
function university_files(){
   wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

// calls this university_files function
add_action('wp_enqueue_scripts', 'university_files');

