 <!-- /.home section-service-->

        <div class="mainwrap" style="background:#f7f7f7 url();background-size: cover;border-top:1px solid #ededed;padding:0px 0 10px 0;">
          <div class="mainwrap-icon-background transition"></div>
          <div class="mainwrap-icon">
          <img src="<?php bloginfo("template_url")?>/img/icon-topsection-servico.png">
        </div>

        
         <section id="section-service" class="col-lg-12 col-sm-12 col-xs-12 text-center full-width">
          <div class="container">
             <h1 class="title-section">Nossos serviços</h1> 

             <div class="border-bottom-title"></div>    
              <p class="sub-title-section">com anos de experiência, nós mudamos seu ambiente</p> 
             <div class="page-section-white">
          

             <?php 

               query_posts("showposts=3&category_name=nossos-servicos");
               if ( have_posts() ) : while ( have_posts() ) : the_post();
              

              ?>
                   <div class="col-lg-4">

                          <div class="bg-image-service text-center">
                          <?php the_post_thumbnail('icon-servico'); ?> 
                          </div>


                          <h2><a href="<?php the_Permalink()?>"><?php the_title()?></a></h2>
                           <?php the_content()?>
                          <a class="btn btn-default leia-mais" role="button" href="<?php the_Permalink()?>">leia mais</a>
                   </div><!-- /.col-lg-4 -->

                  
            <?php endwhile;else : ?>
           <?php endif; ?>

          </div><!-- / page-section-white  -->
          </div> <!-- /.END section-service -->

         </section>  <!-- /.END section-service -->
          </div> <!-- /.END section-service -->
          
      