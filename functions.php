<?php
// My theme Function


// Theme title

add_theme_support('title-tag');
// Theme CSS jQuery File calling
function dhal_css_js_file_calling(){
    wp_register_style('dhalem-style', get_template_directory_uri().'/style.css');wp_enqueue_style('dhalem-style');

    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
    wp_enqueue_style('bootstrap');

    // wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('custom');


    // jQuery
    // wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
    wp_enqueue_script('jQuery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', 'true');

}
add_action('wp_enqueue_scripts', 'dhal_css_js_file_calling');

// Google fonts

function dhal_add_google_fonts(){
    wp_enqueue_style('dhal_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
  }
  add_action('wp_enqueue_scripts', 'dhal_add_google_fonts');



// Theme function
function dhalem_logo_customize($wp_customize){

    // header area function

    $wp_customize->add_section('dhalem_header_area', array(
        'title' =>__('HeaderArea', 'sultanaparvin'),
        'description' => 'Si vous souhaitez mettre à jour votre zone de header, vous pouvez le faire'
    ));
    $wp_customize ->add_setting('dhalem_logo', array(
        'default' => get_bloginfo('template_directory') . '/Assets/Logo.png',
    ));
    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'dhalem_logo', array(
        'label' =>'Logo upload',
        'description' => 'Si vous souhaitez mettre à jour votre logo, vous pouvez le faire',
        'setting' => 'dhalem_logo',
        'section' => 'dhalem_header_area',
    ) ));

    // menu position option

    $wp_customize->add_section('dhalem_menu_option', array(
        'title' =>__('Menu position option', 'sultanaparvin'),
        'description' => 'Si vous souhaitez changer votre position de menu, vous pouvez le faire'
    ));

    $wp_customize->add_setting('dhalem_menu_position', array(
        'default' => 'right_menu',
    ));

    $wp_customize-> add_control('dhalem_menu_position', array(
        'label' =>'Menu position',
        'description' => 'sélectionnez votre position de menu',
        'setting' => 'dhalem_menu_position',
        'section' => 'dhalem_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => 'Left menu',
            'right_menu' => 'Right menu',
            'center_menu' => 'Center menu',
        )
    ));



     // Footer option

     $wp_customize->add_section('dhalem_footer_option', array(
        'title' =>__('footer option', 'sultanaparvin'),
        'description' => 'Si vous souhaitez changer votre footer, vous pouvez le faire'
    ));

    $wp_customize->add_setting('dhalem_copyright_section', array(
        'default' => '&copy; Copyright 2022 | Dhalem RealState',
    ));

    $wp_customize-> add_control('dhalem_copyright_section', array(
        'label' =>'Copyright Text',
        'description' => 'Vous pouvez changer si vos besion',
        'setting' => 'dhalem_copyright_section',
        'section' => 'dhalem_footer_option',

    ));


}

add_action( 'customize_register', 'dhalem_logo_customize' );

// menu register

register_nav_menu( 'main_menu', __('Main Menu', 'sultanaparvin') );

// walker menu properties

function dhalem_nav_description( $item_output, $item, $args){
    if( !empty ($item->description)){
        $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after . '</a>' , $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'dhalem_nav_description' , 10, 3);

?>