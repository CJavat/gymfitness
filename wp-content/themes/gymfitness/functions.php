<?php

// INCLUDES
require get_template_directory() . '/includes/widgets.php';

function gymfitness_setup()
{
  // IMAGENES DESTACADAS.
  add_theme_support('post-thumbnails');

  // TÍTULOS PARA SEO
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gymfitness_setup');

function gymfitness_menus()
{
  register_nav_menus(array(
    'menu-principal' => __('Menu Principal', 'gymfitness'),
  ));
}

add_action('init', 'gymfitness_menus');

function gymfitness_scripts_styles()
{
  // ARCHIVOS CSS
  wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
  wp_enqueue_style('lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.4');
  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

  //ARCHIVOS JS
  wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.4', true);
}

add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');

// DEFINIR SONA DE WIDGETS.
function gymfitness_widgets()
{
  register_sidebar(array(
    'name' => 'Sidebar 1',
    'id' => 'sidebar_1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center text-primary">',
    'after_title' => '</h3>',
  ));

  register_sidebar(array(
    'name' => 'Sidebar 2',
    'id' => 'sidebar_2',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="text-center text-primary">',
    'after_title' => '</h3>',
  ));
}
add_action('widgets_init', 'gymfitness_widgets');
