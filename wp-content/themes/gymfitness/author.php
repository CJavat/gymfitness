<?php
get_header();
?>

<main class="seccion contenedor">
  <?php
  // AQUÍ ME QUEDE: EDITANDO EL AUTOR.
  $autor = get_queried_object();
  ?>

  <h2 class="text-center text-primary"> Categoría: <?php echo $autor->name ?></h2>
  <ul class="listado-grid">
    <?php
    while (have_posts()) : the_post();
      get_template_part('template-parts/blog');

    endwhile;
    ?>
  </ul>
</main>

<?php
get_footer();
?>