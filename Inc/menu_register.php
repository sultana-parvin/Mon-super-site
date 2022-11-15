<?php 

// menu register


function wp_supports(){
add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}

add_action('after_setup_theme', 'wp_supports');

function register_menus(){
    

    register_nav_menus(array(
        'header-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu'
    ));
}


add_action('after_setup_theme', 'register_menus');


// function dhalem_nav_description( $item_output, $item, $args){
//     if( !empty ($item->description)){
//         $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>' , $item_output);
//     }
//     return $item_output;
// }
// add_filter('walker_nav_menu_start_el', 'dhalem_nav_description' , 10, 3);

?>