<?php

function blogger_theme_support(){
//Adds dynamic title
add_theme_support('title_tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

}

add_action('after_setup_theme','blogger_theme_support');


function blogger_menus(){

    $location = array(
        'primary' => "Desktop Primary"
    );
    register_nav_menus($location);
}

add_action('init','blogger_menus');





?>