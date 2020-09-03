<?php 

function university_files() {
    wp_enqueue_script("slider", get_theme_file_uri("/js/scripts-bundled.js"), NULL, "1.0", true);
    wp_enqueue_style("googlefonts", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    // get_stylesheet_uri() gets css file
    wp_enqueue_style("main_styles", get_stylesheet_uri());

}

// Runs university_files()
add_action("wp_enqueue_scripts", "university_files");

?>