<?php
    /**
    ** activation theme
    **/
    function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

    /**
    ** activation des support du themes 
    **/
    function airvault_supports(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        register_nav_menu('header', 'En tête du menu');
    }

    /**
    ** déclaration des assets du themes 
    **/
    function airvault_supports_assets(){
        wp_register_style('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
        wp_register_script('bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',['popper','jquery']);
        wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',[],false,true);
        wp_deregister_script('jquery');
        wp_register_script('jquery','https://code.jquery.com/jquery-3.2.1.slim.min.js',[],false,true);
        wp_enqueue_style('bootstrap');
        wp_enqueue_script('bootstrap');

    }

    function airvault_menu_class($classes){
        $classes[] = 'px-3';
        return $classes; 
    }

    function airvault_menu_link_class($attrs){
        $attrs['class'] = 'nav-header-link';
        return $attrs;
    } 

    /**
     * Activations des assets 
     */
    add_action('after_setup_theme', 'airvault_supports');
    add_action('wp_enqueue_scripts', 'airvault_supports_assets');
    add_filter('nav_menu_css_class', 'airvault_menu_class');
    add_filter('nav_menu_link_attributes', 'airvault_menu_link_class');