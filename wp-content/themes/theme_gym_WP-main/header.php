<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  


<header class="site-header">
  <div class="contenedor">
    <div class="barra-navegacion">
      <div class="logo">
        <img src=" <?php echo get_template_directory_uri(); ?>/img/Gym Logo.svg" alt="logo sitio">
      </div>
      <?php
        wp_nav_menu($args = array(
          'menu' => 'menu-principal',
          'container' => 'nav',
          'container_class' => 'menu-principal'
        ));
      ?>
    </div>
  </div>
</header>