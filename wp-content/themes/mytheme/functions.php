<?php

function montheme_support(){
    add_theme_support('title_tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En-tête du menu');
    register_nav_menu('footer', 'Pied de page');

    add_image_size('post-thumbnail', 350, 215, true);

}



function montheme_register_assets(){
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',  [], false, true);
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js');
    
  
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('jquery');

    wp_enqueue_script('popper');

    wp_enqueue_script('bootstrap');
}


function montheme_title_separator(){
    return '|';
}

function montheme_document_title_parts ($title){
    return $title;
}

function montheme_menu_class ($classes){
    $classes[] = 'nav-item';

    return $classes;
}

function montheme_menu_link_class ($attrs){
    $attrs['class'] = 'nav-link';

    return $attrs;
}



function montheme_pagination(){
    echo '<nav aria-label="Pagination">';
    echo '<ul class="pagination">';
    $pages = paginate_links(['type' => 'array']);
    foreach ($pages as $page){
        $active = strpos($page, 'current') !== false;
        $class ='page-item';
        if($active){
            $class .= ' active';
        }
        echo '<li class='.$class.'>';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}




add_action('after_setup_theme', 'montheme_support');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('document_title_parts', 'montheme_document_title_parts');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');


require_once('metaboxes/sponso.php');

SponsoMetaBox::register();

