 <?php 

    $content = get_the_content();

      ?>

          <?php

             query_posts("showposts=1&category_name='slide'");
             if ( have_posts() ) : while ( have_posts() ) : the_post(); 
             the_content();
          ?>          
              

                
                 
                 

            <?php 
          
           endwhile;else :  ;
           endif; 

            ?>