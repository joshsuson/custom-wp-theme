<?php

function vortron_post_types()
{
    register_post_type("slide", [
    "public" => true,
    "show_in_rest" => true,
    "supports" => ["title", "thumbnail"],
    "labels" => [
      "name" => "Slides",
      "add_new_item" => "Add New Slide",
      "edit_item" => "Edit Slide",
      "all_items" => "All Slides",
      "singular_name" => "Slide",
    ],
    "menu_icon" => "dashicons-images-alt2",
  ]);

    register_post_type("card", [
    "public" => true,
    "supports" => ["title", "thumbnail", "custom-fields"],
    "labels" => [
      "name" => "Cards",
      "add_new_item" => "Add New Card",
      "edit_item" => "Edit Card",
      "all_items" => "All Cards",
      "singular_name" => "Card",
    ],
    "menu_icon" => "dashicons-text-page",
  ]);

    register_post_type("step", [
    "public" => true,
    "supports" => ["title", "thumbnail", "editor"],
    "labels" => [
      "name" => "Steps",
      "add_new_item" => "Add New Step",
      "edit_item" => "Edit Step",
      "all_items" => "All Steps",
      "singular_name" => "Step",
    ],
    "menu_icon" => "dashicons-chart-bar",
  ]);
}

add_action("init", "vortron_post_types");
