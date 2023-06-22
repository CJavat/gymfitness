<?php
/* 
* Template Name: Listado De Clases
*/
get_header();
?>

<main class="contenedor seccion">
  <?php
  get_template_part('template-parts/pagina');
  ?>

  <?php
  gymfitness_lista_clases();
  ?>
</main>

<?php
get_footer();
?>