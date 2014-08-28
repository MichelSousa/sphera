
   <div class="mainwrap" style="background-size: cover;border-top:1px solid #ededed;">
          <div class="mainwrap-icon-background transition"></div>
          <div class="mainwrap-icon">
            <img src="<?php bloginfo("template_url")?>/img/icon-bottom-section-servico.png">
        </div>


<section id="recent-publications" class="col-lg-12 col-sm-12 col-xs-12 text-center">
          <div class="container">
                  

                 <div class="container">

                  <h1 class="title-section">Publicações recentes</h1>
                    <div class="border-bottom-title"></div>  

                   <div id="owl12" class="owl-carousel">
                    


                    <?php 

                     $count_post_publications = count(query_posts("category_name=publicacoes-recentes")); 

                      query_posts("showposts=".$count_post_publications."&category_name=publicacoes-recentes");
                      if ( have_posts() ) : while ( have_posts() ) : the_post();

                     ?>

                    <div> 
                       <?php the_post_thumbnail('recent-publications',array("class"=>"transition")); ?> 
                        <div class="date triangular-icon">
                        </div>
                        <div class="leftholder-date">
                        <div class="day"><?php the_time("d")?></div>
                        <div class="months"><?php the_time("M")?></div>
                       </div>
                        <h2 ><a class="title-article" href="<?php the_Permalink()?>"><?php the_title()?></a></h2>
                        <p><?php echo excerpt("30")?></p>
                        <a href="<?php the_Permalink()?>" role="button" class="btn btn-default leia-mais">leia mais</a>
                    </div>

               
                    
              

                  <?php endwhile;else : ?>
                 <?php endif; ?>

                  
            

              </div>

                 <?php if($count_post_publications > 3){?>

                    <span id="prev" class="prev  hidden-sm hidden-xs ">
                        <img src="<?php bloginfo("template_url")?>/img/left.png" alt="" />
                    </span>
                    <span id="next" class="next  hidden-sm hidden-xs  "> 
                         <img src="<?php bloginfo("template_url")?>/img/right.png" alt="" />
                    </span>

                    <?php } ?>

          </div>

        </section>  <!-- /.END recent-publications -->
   </div>