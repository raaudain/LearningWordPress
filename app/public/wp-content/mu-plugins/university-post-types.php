<?php 

// Creates new custom post type
function university_post_types() {
    // Google "register_post_type" for list of parameters
    register_post_type("event", [
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
}

add_action("init", "university_post_types");

?>