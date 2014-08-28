         <div class="mainwrap" style="background-size: cover;padding:0px 0 10px 0;">
          <div style="position:relative;top:25px" class="mainwrap-icon-background transition"></div>
          <div class="mainwrap-icon">
             <img style="position:relative;top:25px" src="<?php bloginfo("template_url")?>/img/comment.png">
          </div>

        

        
         <section id="contact" class="col-lg-12 col-sm-12 col-xs-12 text-center full-width-contact">
          

            <div class="container">

               <h1 class="title-section">Entre em contato</h1> 
               <div class="border-bottom-title"></div>     
               <p class="sub-title-section">se você precisar de um orçamento sobre um produto ou serviço não hesite em nos contactar</p> 

              <div class="col-lg-6">
               <?php 

                     query_posts("showposts=1&category_name=contato");
                     if ( have_posts() ) : while ( have_posts() ) : the_post();
                     the_content();
                     
                ?>


                <?php endwhile;else : ?>
               <?php endif; ?>
              </div> <!-- /.END container -->
            </div> <!-- /.END container -->
           
         </section>  <!-- /.END contact -->

      </div>
