<?php 

function university_post_types() {
    // Creates new custom post type (event)
    // Google "register_post_type" for list of parameters
    register_post_type("event", [
        "rewrite" => ["slug" => "events"],
        "supports" => ["title", "editor", "excerpt"],
        "has_archive" => true,
        "public" => true, // This makes the post time visiable to editors
        "labels" => [
            "name" => "Events",
            "add_new_item" => "Add New Event",
            "edit_item" => "Edit Event",
            "all_items" => "All Events",
            "singular_name" => "Event"
        ],
        "menu_icon" => "dashicons-calendar-alt" // Changes icon in dashboard. Google "wordpress dashicons"
    ]);


    // Creates Program Post Type
    register_post_type("program", [
        "rewrite" => ["slug" => "programs"],
        "supports" => ["title", "editor"],
        "has_archive" => true,
        "public" => true,
        "labels" => [
            "name" => "Programs",
            "add_new_item" => "Add New Program",
            "edit_item" => "Edit Program",
            "all_items" => "All Programs",
            "singular_name" => "Program"
        ],
        "menu_icon" => "dashicons-awards"
    ]);
}





add_action("init", "university_post_types");

?>