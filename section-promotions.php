        
        <div class="mainwrap" style="background:#f7f7f7 url();background-size: cover;border-top:1px solid #ededed;padding:0px 0 10px 0;">
          <div class="mainwrap-icon-background transition"></div>
          <div class="mainwrap-icon">
            <img src="<?php bloginfo("template_url")?>/img/icon-top-section-promocao.png">
          </div>

  
         <section id="section-promotions" class="col-lg-12 col-sm-12 col-xs-12 text-center full-width">

          <div class="container">

             <h1 class="title-section">Promoções</h1> 

             <div class="border-bottom-title"></div>  

                 
                 <div id="owl9" class="owl-carousel">
              

                        <?php 
                          $i=1;
                          $count_post_promotions = count(query_posts("category_name=promocao")); 
                           query_posts("showposts=".$count_post_promotions."&category_name=promocao");
                           if ( have_posts() ) : while ( have_posts() ) : the_post();
                           ?>

                             <?php if(($i++ % 2) ==0){?>
                              <div>  
                                <figure style="border-right:none;">

                                   <div class="bg-image-2" style="margin-left:140px;">
                                      <?php the_post_thumbnail('promocao',array('class' => 'img-responsive opacity transition')); ?>
                                   </div><!-- END bg-image --> 
                                </figure> 
                                  <p style="margin-left:195px;"><?php echo excerpt("10");?></p>
                                 
                              </div>

                              <?php 

                                }
                                else
                                {
                                  ?>

                                   <div>  
                                <figure>

                                   <div class="bg-image">
                                      <?php the_post_thumbnail('promocao',array('class' => 'img-responsive opacity transition')); ?>
                                   </div><!-- END bg-image --> 
                                </figure> 
                                  <p><?php echo excerpt("10");?></p>
                                 
                              </div>

                                  <?php
                                }



                              ?>
                                
                                 

                               <?php endwhile;else : ?>

                                <?php endif; ?>

                            </div><!-- /gallery-02 -->
                          <?php if($count_post_promotions > 2){?>
                            <span id="prev" class="prev  hidden-sm hidden-xs ">
                                <img src="<?php bloginfo("template_url")?>/img/left.png" alt="" />
                            </span>
                            <span id="next" class="next  hidden-sm hidden-xs  "> 
                                 <img src="<?php bloginfo("template_url")?>/img/right.png" alt="" />
                            </span>
                          <?php } ?>  

                            </div><!-- /crsl-wrap -->   

                             
             </div><!-- /container -->

         
         </section>  <!-- /.END section-promotions -->

          </div><!-- /container -->

