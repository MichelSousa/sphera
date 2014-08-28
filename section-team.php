

        <div class="mainwrap" style="background-size: cover;border-top:1px solid #ededed;padding:0px 0 10px 0;">
          <div class="mainwrap-icon-background transition"></div>
          <div class="mainwrap-icon">
             <img src="<?php bloginfo("template_url")?>/img/icon-bottom-section-bio.png">
        </div>

  <div class="container">

         <section id="section-team" class="col-lg-12 col-sm-12 col-xs-12 text-center">

            <h1 class="title-section">NOSSA EQUIPE</h1>
            <div class="border-bottom-title"></div>  

              <div id="owl10" class="owl-carousel">
                        
                     
                    <?php 

                      $count_post_team = count(query_posts("showposts=200&category_name=equipe")); 
                      query_posts("showposts=".$count_post_team."&category_name=equipe");
                      if ( have_posts() ) : while ( have_posts() ) : the_post();

                    ?>


                        <div>
                         <?php the_post_thumbnail('team', array('class' => 'img-circle rotate')); ?> 
                         <h2><a href="<?php the_Permalink()?>"><?php the_title()?></a></h2>
                       
                        <p> <?php echo excerpt("20")?></p>
                        </div>


                    
                      
                   

                       <?php endwhile;else : ?>
                    <?php endif; ?>
                 
                    </div>

                    <?php if($count_post_team > 3 ){?>

                    <span id="prev" class="prev  hidden-sm hidden-xs ">
                        <img src="<?php bloginfo("template_url")?>/img/left.png" alt="" />
                    </span>

                    <span id="next" class="next  hidden-sm hidden-xs  "> 
                         <img src="<?php bloginfo("template_url")?>/img/right.png" alt="" />
                    </span>

                    <?php } ?>


                    </div>

                
        

         </section> <!-- /.END section-clients --> 

          </div> <!-- /container -->
