  <section id="section-stats" class="col-lg-12 col-sm-12 col-xs-12 text-center">

           <!-- Three columns of text below the carousel -->
            <div class="row">

         

          <?php 

           $i = 1;

               query_posts("showposts=3&category_name=estatisticas");
               if ( have_posts() ) : while ( have_posts() ) : the_post();
                $valor = get_post_meta($post->ID, 'valor', true); 

           ?>
     
              <article class="col-lg-4">
            
                <h1  class="odometer number<?php echo $i++?>" id="<?php echo $valor;?>"></h1>
                <h2><?php the_title()?></h2>
                
              </article><!-- /.col-lg-4 -->

          <?php endwhile;else : ?>

          <?php endif; ?>

             </div> <!-- /.row -->  

        </div> <!-- /.container -->  

         </section>   <!-- /.END section-stats -->
