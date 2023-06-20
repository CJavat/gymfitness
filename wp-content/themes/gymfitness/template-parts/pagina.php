<?php
while (have_posts()) : the_post();
  // MOSTRAR EL TITULO DE LA PÁGINA.
  the_title('<h1 class="text-center text-primary">', '</h1>');

  if (has_post_thumbnail()) { // COMPROBAR SI HAY UNA IMAGEN DESTACADA.
    // MOSTRAR LA IMAGEN DESTACADA.
    the_post_thumbnail('full', array('class' => 'imagen-destacada'));
  }

  // MOSTRAR EL CONTENIDO.
  the_content();

endwhile;
