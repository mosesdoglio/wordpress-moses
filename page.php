<?php get_header(); ?>
   
        <section class="content">
            <h1><?php the_title(); ?></h1>
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                
                 <?php the_content(); ?> <!-- Impresso o conteúdo da página -->
                

            <?php endwhile; else: ?> <!-- Se não houver conteúdo -->

                 <h2>Nada Encontrado</h2>

            <?php endif; ?>
        </section>
    
   <?php get_sidebar(); ?> 
<?php get_footer(); ?>