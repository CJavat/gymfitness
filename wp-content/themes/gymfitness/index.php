<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <header>

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