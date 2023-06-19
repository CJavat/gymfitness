<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GymFitness</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="contenedor barra-navegacion">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logotipo">
      </div>

      <?php
      $args = array(
        'theme_location' => 'menu-principal',
        'container' => 'nav',
        'container_class' => 'menu-principal'
      );

      wp_nav_menu($args);
      ?>
    </div>

  </header>

  <main>

    <?php
    while (have_posts()) : the_post();
      the_title();

      the_content();

    endwhile;

    ?>
  </main>

</body>

</html>