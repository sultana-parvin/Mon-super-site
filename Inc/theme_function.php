<?php

// / Theme function
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

