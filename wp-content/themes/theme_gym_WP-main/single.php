<?php get_header(); ?>
 <main class="contenedor pagina seccion con-sidebar">
      <div class="contenido-principal">

         <?php
           while ( have_posts() ) : the_post();
         ?>
            <h1><?php the_title();?></h1>
            <p><?php the_content();?></p>

         <?php  
            endwhile;
         ?>
      </div>
      <?php get_sidebar('sidebar_1'); ?>
 </main>
<?php get_footer(); ?>