<?php
/* 
* Template Name: Galeria
*/
get_header();
?>

<main class="contenedor seccion">
  <?php
  while (have_posts()) : the_post();
    // MOSTRAR EL TITULO DE LA PÁGINA.
    the_title('<h1 class="text-center text-primary">', '</h1>');

    // OBTENER GALERÍA.
    $galeria = get_post_gallery(get_the_ID(), false);

    // OBTENER LOS IDs EN UN ARRAY.
    $galeria_imagenes_ID = explode(",", $galeria['ids']);
  ?>
    <ul class="galeria-imagenes">
      <?php
      foreach ($galeria_imagenes_ID as $id) {
        $imagen_grande = wp_get_attachment_image_src($id, 'large')[0];
        $imagen_full = wp_get_attachment_image_src($id, 'full')[0];
      ?>
        <li class="">
          <a data-lightbox="galeria" href="<?php echo $imagen_full; ?>">
            <img src="<?php echo $imagen_grande; ?>" alt="Imagen Galeria">
          </a>
        </li>
      <?php
      }
      ?>
    </ul>
  <?php
  endwhile;

  ?>
</main>

<?php
get_footer();
?>