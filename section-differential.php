         <div class="mainwrap" style="background:#f7f7f7 url();background-size: cover;border-top:1px solid #ededed;padding:0px 0 10px 0;">
          <div class="mainwrap-icon-background transition"></div>
          <div class="mainwrap-icon">
            <img src="<?php bloginfo("template_url")?>/img/icon-top-section-diferencial.png">
          </div>

         <section id="section-differential" class="col-lg-12 col-sm-12 col-xs-12 text-center full-width">
           
              <div class="container">

             <h1 class="title-section">diferencial</h1>  
             <div class="border-bottom-title"></div>   

                   <?php 
                     query_posts("showposts=3&category_name=diferencial");
                     if ( have_posts() ) : while ( have_posts() ) : the_post();
                     ?>

                  <div class="col-lg-4">

                         <div class="featured-image">
                          <?php the_post_thumbnail('diferencial'); ?> 
                         </div>

                          <h2><a href=""><?php the_title()?></a></h2>
                           <p> <?php echo excerpt("30");?><p>

                          <span class="col-lg-12 border-bottom"></span>
                         
                   </div><!-- /.col-lg-4 -->


                    <?php endwhile;else : ?>

                    <?php endif; ?>
                
                </div><!-- /.container-->

          </section>  <!-- /.END section-differential -->

            </div><!-- /.container-->
