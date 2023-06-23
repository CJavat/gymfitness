<?php

// INCLUDES
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

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
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.4.1');
  wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

  //ARCHIVOS JS
  wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.4', true);
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.esm.browser.min.js', array(), '9.4.1', true);
  wp_enqueue_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), '2.0.2', true);
  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('swiper-js, anime'), '1.0.0', true);
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

// CREAR SHORTCODES.
function gymfitness_ubicacion_shortcode()
{
?>
  <div class="mapa">
    <?php
    if (is_page('contacto')) {
      the_field('ubicacion');
    }
    ?>
  </div>

  <h2 class="text-center text-primary">Formulario de Contacto</h2>
<?php
  echo do_shortcode('[contact-form-7 id="79" title="Formulario 1"]');
}
add_shortcode('gymfitness_ubicacion', 'gymfitness_ubicacion_shortcode');

/* IMAGENES DINÁMICAS COMO BACKGROUND */
function gymfitness_hero_imagen()
{
  // OBTENER EL ID DE LA PÁGINA
  $front_id = get_option('page_on_front');

  // OBTENER LA IMAGEN
  $id_imagen = get_field('hero_imagen', $front_id);

  // OBTENER LA RUTA DE LA IMAGEN
  $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

  // CREAR CSS
  wp_register_style('custom', false);
  wp_enqueue_style('custom');

  $imagen_destacada_css = "
    body.home .header {
      background-image: linear-gradient(rgb(0 0 0 / .75), rgb(0 0 0 / .75)), url($imagen);
    }
  ";

  // INYECTAR CSS
  wp_add_inline_style('custom', $imagen_destacada_css);
}
add_action('init', 'gymfitness_hero_imagen');
