
  <footer class="site-footer contenedor">
    <hr>
    <div class="contenido-footer">
      <?php
        wp_nav_menu($args = array(
          'menu' => 'menu-principal',
          'container' => 'nav',
          'container_class' => 'menu-principal'
        ));
      ?>
      <p class="copyright">Todos los derechos reservados. <?php echo get_bloginfo('name') . " " . date('Y'); ?>  </p>

    </div>
    
    
  </footer>
  <?php wp_footer(); ?>
</body>
</html>