<?php 

function university_files() {
    // brings in JavaScript file
    wp_enqueue_script("slider", get_theme_file_uri("/js/scripts-bundled.js"), NULL, microtime(), true);
    // brings in googlefonts and font-awesome
    wp_enqueue_style("googlefonts", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font-awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    // get_stylesheet_uri() gets css file
    wp_enqueue_style("main_styles", get_stylesheet_uri(), NULL, microtime());

}

// Runs university_files()
add_action("wp_enqueue_scripts", "university_files");

// Changes page title
function university_features() {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
    add_image_size("professorLandscape", 400, 260, true);
    add_image_size("professorPotrait", 480, 650, true);
    // In dashboard, creates Menus option in Appearance
    // register_nav_menu("headerMenuLocation", "Header Menu Location");
    // register_nav_menu("footerLocationOne", "Footer Location One");
    // register_nav_menu("footerLocationTwo", "Footer Location Two");
}

add_action("after_setup_theme", "university_features");

// Filters out past dates on Events page
function university_adjust_queries($query) {
    $today = date("Ymd");
    // is_main_query() doesn't check secondary queries
    if (!is_admin() AND is_post_type_archive("program") and $query->is_main_query()) {
        $query->set("orderby", "title");
        $query->set("order", "ASC");
        $query->set("posts_per_page", -1);
    }

    if (!is_admin() AND is_post_type_archive("event") AND $query->is_main_query()) {
        $query->set("meta_key", "event_date");
        $query->set("orderby", "meta_value_num");
        $query->set("order", "ASC");
        $query->set("meta_query", [
            [
                "key" => "event_date",
                "compare" => ">=",
                "value" => $today,
                "type" => "numeric"
            ]
        ]);
    }
}

add_action("pre_get_posts", "university_adjust_queries");

?>