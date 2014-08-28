      <section id="slide-posts" class="col-lg-12 col-sm-12 col-xs-12 text-center">

            <h1 class="title-section animated fadeInUp">SPHERA</h1>
            <div class="border-bottom-title"></div>   

            <p class="sub-title-section">
                 fermentum. Fusce dapibus,
                  tellus ac cursus commodo, tortor mauris 
            </p>

           

         
     
         <div id="owlslide" class="owl-carousel">
        
            <?php 
            $count_post_slide = count(query_posts("showposts=10&category_name=slide-posts"));
            query_posts("showposts=".$count_post_slide."&category_name=slide-posts")?>

             <?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
           
            <div>

             <div class="slide-featturettes">
              <?php the_post_thumbnail('slide', array('class' => 'img-miniatura img-responsive')); ?> 
             </div> 

              <p class="text1"><?php echo excerpt("30")?></p>

            </div>

          

        

             <?php endwhile;else : ?>

          <?php  endif; ?>

           </div>

       

         
       

          <?php if( $count_post_slide  > 1 ){?>

                    <span id="prev" class="prev hidden-sm hidden-xs  ">
                        <img src="<?php bloginfo("template_url")?>/img/left.png" alt="" />
                    </span>

                    <span id="next" class="next hidden-sm hidden-xs "> 
                         <img src="<?php bloginfo("template_url")?>/img/right.png" alt="" />
                    </span>

           <?php } ?>

        </section><!-- /.slide-posts -->