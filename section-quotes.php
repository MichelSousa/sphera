

        <div class="mainwrap" style="background:#f7f7f7 url();background-size: cover;border-top:1px solid #ededed;padding:0px 0 10px 0;">
          <div class="mainwrap-icon-background transition"></div>
          <div class="mainwrap-icon">
          <img src="<?php bloginfo("template_url")?>/img/icon-top-section-bio.png">
        </div>

         <section id="section-quotes" class="col-lg-12 col-sm-12 col-xs-12 full-width">
            
           <div class="container"> 

             <?php 

                 query_posts("showposts=1&category_name=biografia");
                 if ( have_posts() ) : while ( have_posts() ) : the_post();
              
              ?>

            <div class="col-lg-5">

               <?php the_post_thumbnail('bio', array('class' => 'img-responsive')); ?> 
              
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">

             <h2>
                <a title="<?php the_title()?>" href="<?php the_permalink()?>">
                  <?php the_title()?>
                 </a>
             </h2>

             <?php the_content()?>

            </div>


          <?php endwhile;else : ?>

          <?php endif; ?>

           </div><!-- /.container --> 

         </section> <!-- /.END section-quotes --> 

   </div>

     