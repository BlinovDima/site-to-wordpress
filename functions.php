<?php
    add_action('wp_enqueue_scripts', 'childhood_styles');
    add_action('wp_enqueue_scripts', 'childhood_scripts');
//функция подключения стилей
    function childhood_styles(){
        wp_enqueue_style('childhood-style', get_stylesheet_uri());
    }
//функция подключения скриптов
    function childhood_scripts(){
        wp_enqueue_script('childhood-scripts', get_template_directory_uri().'/assets/js/main.min.js',
        array(), null, true);
    }
//активация выбора логотипа    
    add_theme_support('custom-logo');

    add_theme_support('post-thumbnails');

    //активация меню
    add_theme_support('menus');

    //добавка фильтра к меню (добавка стилей)
    add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
    function filter_nav_menu_link_attributes($atts, $item, $args){
        if ($args->menu === 'Main') {
            $atts['class'] = 'header__nav-item';
            if ($item->current){
                $atts['class'] .= ' header__nav-item-active';
            }
            
            if($item->ID === 178 && (in_category('soft_toys') || in_category('edu_toys'))){
                $atts['class'] .= ' header__nav-item-active';
            } 
        };
        return $atts;
    }
    ?>