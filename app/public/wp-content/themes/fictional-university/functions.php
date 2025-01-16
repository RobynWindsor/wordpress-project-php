<?php

// Loading style.css to site
function university_files() {
   wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
   wp_enqueue_style('university_extra_styles', get_theme_file_uri('/build/index.css'));
}

// Calls this university_files function
add_action('wp_enqueue_scripts', 'university_files');

