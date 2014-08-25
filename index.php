<?php

       get_header();

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

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
 
        <div class="col-lg-12 col-sm-12 col-xs-12 text-center ">

         <div class="highlight">

          <h2 class="highlight-title">

              <?php echo get_theme_mod("text_welcome") ?>

          </h2>

          <p class="text-highlight"> 
            
               fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris 
          </p>
         
         </div><!-- /.END highlight -->

        </div><!-- /.col-lg-4 -->

      <!-- START THE FEATURETTES -->
         
        <section id="slide-posts" class="col-lg-12 col-sm-12 col-xs-12 text-center">

            <h1 class="title-section">SPHERA</h1>

            <p class="sub-title-section">fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris </p>

         <div class="slide-featturettes">

          <?php query_posts("showposts=1&category_name=slide-posts")?>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
             <?php the_content()?>

          <?php endwhile;else : ?>

          <?php endif; ?>

         
         </div><!-- /.END slide-featturettes -->

        </section><!-- /.slide-posts -->

      

        <section id="section-stats" class="col-lg-12 col-sm-12 col-xs-12 text-center">

           <!-- Three columns of text below the carousel -->
            <div class="row">

         

          <?php 

               query_posts("showposts=3&category_name=estatisticas");
               if ( have_posts() ) : while ( have_posts() ) : the_post();
                $valor = get_post_meta($post->ID, 'valor', true); 

           ?>
     
              <article class="col-lg-4">
            
                <h1><?php echo $valor;?></h1>
                <h2><?php the_title()?></h2>
                
              </article><!-- /.col-lg-4 -->

          <?php endwhile;else : ?>

          <?php endif; ?>

             </div> <!-- /.row -->  

        </div> <!-- /.container -->  

         </section>   <!-- /.END section-stats -->

           <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
           <span class="icon-top">
            <img src="<?php bloginfo("template_url")?>/img/icon-top-section-bio.png">
           </span><!-- /.END icon-top -->
         </div><!-- /.END col-lg-12 col-sm-12 col-xs-12 text-center -->

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


           <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
           <span class="icon-bottom">
            <img src="<?php bloginfo("template_url")?>/img/icon-bottom-section-bio.png">
           </span><!-- /.END icon-top -->
         </div><!-- /.END col-lg-12 col-sm-12 col-xs-12 text-center -->

         <div class="container">

         <section id="section-team" class="col-lg-12 col-sm-12 col-xs-12 text-center">

            <h1 class="title-section">NOSSA EQUIPE</h1>

              <div id="owl10" class="owl-carousel">
                        
                     
                    <?php 

                      $count_post_team = count(query_posts("showposts=200&category_name=equipe")); 
                      query_posts("showposts=".$count_post_team."&category_name=equipe");
                      if ( have_posts() ) : while ( have_posts() ) : the_post();

                    ?>


                        <div>
                         <?php the_post_thumbnail('team', array('class' => 'img-circle zoom')); ?> 
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

           <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
           <span class="icon-top">
            <img src="<?php bloginfo("template_url")?>/img/icon-top-section-diferencial.png">
           </span><!-- /.END icon-top -->
         </div><!-- /.END col-lg-12 col-sm-12 col-xs-12 text-center -->

         <section id="section-differential" class="col-lg-12 col-sm-12 col-xs-12 text-center full-width">
             <h1 class="title-section">Nosso diferencial</h1>   
              <div class="container">

                   <?php 
                     query_posts("showposts=3&category_name=diferencial");
                     if ( have_posts() ) : while ( have_posts() ) : the_post();
                     ?>

                  <div class="col-lg-4">

                         <div class="featured-image">
                          <?php the_post_thumbnail('diferencial'); ?> 
                         </div>

                          <h2><a href=""><?php the_title()?></a></h2>
                          <?php the_content();?>

                          <span class="col-lg-12 border-bottom"></span>
                         
                   </div><!-- /.col-lg-4 -->


                    <?php endwhile;else : ?>

                    <?php endif; ?>
                
                </div><!-- /.container-->

          </section>  <!-- /.END section-differential -->

           <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
            <span class="icon-bottom">
            <img src="<?php bloginfo("template_url")?>/img/icon-bottom-section-diferencial.png">
           </span><!-- /.END icon-top -->

         </div><!-- /.END col-lg-12 col-sm-12 col-xs-12 text-center -->

         <section id="section-products" class="col-lg-12 col-sm-12 col-xs-12 text-center">
             <h1 class="title-section">Produtos</h1>   

              <div class="container">
                       <p class="sub-title-section">
                           DE ILUMINAÇÃO RESIDENCIAL, COMERCIAL À INDUSTRIAL. CONHEÇA NOSSOS PARCEIROS.
                       </p>    
                       <!-- Nav tabs -->

                     <div class="col-lg-12">

                     

                      <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#iluminacao" role="tab" data-toggle="tab">ILUMINAÇÃO</a></li>
                        <li><a href="#estofados" role="tab" data-toggle="tab">ESTOFADOS</a></li>
                       
                      </ul>

                      
                      <!-- Tab panes -->

                      <div class="tab-content">

                        <div class="tab-pane active" id="iluminacao">

                           
                                <?php

                                 $category_id_products = get_category_by_slug( 'iluminacao');
                            
                           
        
                                  $args = array(
                                    'orderby' => 'name',
                                    'order' => 'DESC',
                                    'child_of'=>  $category_id_products->term_id,
                                    'hide_empty'=> 0,
                                    'exclude'  => '',
                                    );

                                   $categories_products_iluminacao = get_categories($args);
                                   ?>
                                 <span class="item-aba">

                                   <div id="owl0" class="owl-carousel">
                                    <?php
                                   foreach ($categories_products_iluminacao  as $value)  { ?>
                                    
                                        <div> 
                                          <span class="<?php echo $value->slug?>">
                                               <?php echo $value->name?>
                                          </span>
                                        </div>

                                    <?php   

                                       }

                                    ?>

                                     </div>
                                  </span>
                               


                                <?php foreach ($categories_products_iluminacao as $row) { ?>

                               <span class="item-aba post-products" >

                                  <span  style="display:none;"  class="<?php echo $row->slug?>">
                                     
                                    


                                      <?php 

                                        $count_post = count(query_posts("showposts=10&category_name=.'".$row->slug."'"));

                                          if( $count_post <= 0)
                                          {
                                            echo "<h3 class='alert alert-info'>Você está em ".$row->slug.", Essa categoria não possui nenhum post.</h3>";
                                          
                                          }else{?>
                                         
                                              <div id="owl4" class="owl-carousel">
                                                <?php 
                                                 query_posts("showposts=10&category_name=.'".$row->slug."'");
                                                 if ( have_posts() ) : while ( have_posts() ) : the_post();
                                               ?>

                                                  <div>  
                                                    <?php the_post_thumbnail('recente'); ?>
                                                     <div class="top-box">
                                                      <h2 class="title-article">
                                                          <a href="<?php the_Permalink()?>">
                                                             <?php the_title()?>
                                                          </a>
                                                      </h2>
                                                      <h3 class="sub-title-article"><?php echo excerpt("3")?></h3>
                                                    </div>  <!-- top-box-->    
                                                  </div><!-- item -->    
                                                <?php  endwhile;else : ?>
                                                <?php endif; ?>
                                         
  
                                              </div>

                                          <?php } ?>
                                  </span>
                                  </span>

                                      <?php  
                                         

                                       }

                                    ?>
                               
                                
                                     <a class="btn-sphera" href="">SITE DESSE PARCEIRO</a>


               

                        </div>   <!-- END iluminacao -->


                        <div class="tab-pane" id="estofados">

                         


                                    <?php

                                 $category_id_products = get_category_by_slug( 'estofados');
                            
                           
        
                                  $args = array(
                                    'orderby' => 'name',
                                    'order' => 'DESC',
                                    'child_of'=>  $category_id_products->term_id,
                                    'hide_empty'=> 0,
                                    'exclude'  => '',
                                    );

                                   $categories_products_estofados = get_categories($args);

                                  ?>

                                   <span class="item-aba">

                                   <div id="owl6" class="owl-carousel">
                                    
                                 <?php 
                                 
                                   foreach ($categories_products_estofados  as $value)  { ?>
                                    
                                        <div> 
                                          <span class="<?php echo $value->slug?>">
                                               <?php echo $value->name?>
                                          </span>
                                        </div>
                                    <?php } ?>
                                     </span>
                                   </div>

                                    <?php 

                                      foreach ($categories_products_estofados  as $row)  { 

                                        $count_post_estofados= count(query_posts("showposts=10&category_name=.'".$row->slug."'"));

                                        ?>

                                        <span class="item-aba post-products" >

                                          <span  style="display:none;"  class="<?php echo $row->slug?>">
                                    <?php

                                          if( $count_post_estofados <= 0)
                                          {
                                            echo "<h3 class='alert alert-info'>Você está em ".$row->slug.", Essa categoria não possui nenhum post.</h3>";
                                          
                                          }else{?>

                                            <div id="owl7" class="owl-carousel">
                                                <?php 
                                                 query_posts("showposts=10&category_name=.'".$row->slug."'");
                                                 if ( have_posts() ) : while ( have_posts() ) : the_post();
                                               ?>

                                                  <div>  
                                                    <?php the_post_thumbnail('recente'); ?>
                                                     <div class="top-box">
                                                      <h2 class="title-article"><a href="<?php the_Permalink()?>"><?php the_title()?></a></h2>
                                                      <h3 class="sub-title-article"><?php echo excerpt("3")?></h3>
                                                    </div>  <!-- top-box-->    
                                                  </div><!-- item -->    
                                                <?php  endwhile;else : ?>
                                                <?php endif; ?>

                                         
  
                                              </div>

                                              <?php } ?>
                                    </span>
                                  </span>
                                <?php   

                                       }

                                    ?>

                             
                        </div><!-- END estofados -->
                        

                      </div>
                </div>

               </div><!-- END col-lg-12 -->  

         </section>  <!-- /.END section-products -->
             
        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
           <span class="icon-top">
            <img src="<?php bloginfo("template_url")?>/img/icon-top-section-promocao.png">
           </span><!-- /.END icon-top -->
         </div><!-- /.END col-lg-12 col-sm-12 col-xs-12 text-center -->
  
         <section id="section-promotions" class="col-lg-12 col-sm-12 col-xs-12 text-center full-width">

          <div class="container">

             <h1 class="title-section">Promoções</h1>  

                 
                 <div id="owl9" class="owl-carousel">
              

                        <?php 

                          $count_post_promotions = count(query_posts("category_name=promocao")); 
                           query_posts("showposts=".$count_post_promotions."&category_name=promocao");
                           if ( have_posts() ) : while ( have_posts() ) : the_post();
                           ?>

                     
                              <div>  
                                <figure>

                                   <div class="bg-image">
                                      <?php the_post_thumbnail('promocao',array('class' => 'img-responsive')); ?>
                                   </div><!-- END bg-image --> 
                                </figure> 
                                  <p><?php echo excerpt("10")?></p>
                                 
                              </div>
                                
                                 

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

         <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
           <span class="icon-bottom">
            <img src="<?php bloginfo("template_url")?>/img/icon-bottom-section-promocao.png">
           </span><!-- /.END icon-top -->
         </div><!-- /.END col-lg-12 col-sm-12 col-xs-12 text-center -->


         <section id="section-recents" class="col-lg-12 col-sm-12 col-xs-12 text-center">
          <div class="container">
             <h1 class="title-section">Projetos recentes</h1>  
               <p class="sub-title-section">DE ILUMINAÇÃO RESIDENCIAL, COMERCIAL À INDUSTRIAL. CONHEÇA NOSSOS PARCEIROS.</p> 


                 <ul class="nav nav-tabs" role="tablist">

                        <script type="text/javascript">
                              $(document).ready(function(){
                                   $("#section-recents li").eq(0).attr("class","active");
                                   $("#section-recents .tab-pane").eq(0).attr("class","tab-pane active");
                              })
                        </script>

                       <?php   

                            $category_id = get_category_by_slug( 'abas-projetos-recentes');
                            
                           
        
                          $args = array(
                            'orderby' => 'name',
                            'order' => 'DESC',
                            'child_of'=> 32,
                            'hide_empty'=> 0,
                            'exclude'  => '',
                            );

                           $categories = get_categories($args);

                        

                           $count_abas_recents = count($categories);
                           
                           foreach ( $categories as $row ) 
                                {
                                        
                           ?>  
                         
                           <li>
                            <a href="#<?php echo  $row->slug;?>" role="tab" data-toggle="tab">
                               <?php echo  $row->name;?>
                            </a>
                           </li>

                         <?php

                           }
                             
                          ?>

                      </ul>      

                    

                          <div class="tab-content">

                          <?php 
                          $a=1;
                      

                            foreach ( $categories as $row ) 
                                {
                                        
                           ?>  

                                <div class="tab-pane" id="<?php echo  $row->slug;?>">

                                       

                                  <div id="owl<?php echo $a++?>" class="owl-carousel">

                                              
                                 <?php 
                                   query_posts("showposts=20&category_name=.'".$row->slug."'");
                                   if ( have_posts() ) : while ( have_posts() ) : the_post();
                                 ?>
                                        <div>  
                                          <?php the_post_thumbnail('recente'); ?>
                                           <div class="top-box">
                                            <h2 class="title-article"><?php the_title()?></h2>
                                            <h3 class="sub-title-article"><?php excerpt("10")?></h3>
                                          </div>  
                                        </div>

                                  <?php endwhile;else : ?>

                                <?php endif; ?>
   

                                       
                              
                                </div>

                                         <span id="prev" class="prev  hidden-sm hidden-xs"> <img src="<?php bloginfo("template_url")?>/img/left.png" alt="" /></span>
                                         <span id="next" class="next  hidden-sm hidden-xs"> <img src="<?php bloginfo("template_url")?>/img/right.png" alt="" /></span>

                                </div>   


                                <?php 
                                 }
                             
                             ?>

                           </div>


                        
             </div> <!-- /container -->
               
         </section>  <!-- /.END section-recents -->

         <!-- /.home section-service-->

        <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
           <span class="icon-top">
            <img src="<?php bloginfo("template_url")?>/img/icon-topsection-servico.png">
           </span><!-- /.END icon-top -->
         </div><!-- /.END col-lg-12 col-sm-12 col-xs-12 text-center -->

         <section id="section-service" class="col-lg-12 col-sm-12 col-xs-12 text-center full-width">
          <div class="container">
             <h1 class="title-section">Nossos serviços</h1>   
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

         <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
           <span class="icon-bottom">
            <img src="<?php bloginfo("template_url")?>/img/icon-bottom-section-servico.png">
           </span><!-- /.END icon-top -->
         </div><!-- /.END col-lg-12 col-sm-12 col-xs-12 text-center -->


        <section id="recent-publications" class="col-lg-12 col-sm-12 col-xs-12 text-center">
          <div class="container">
             <h1 class="title-section">Publicações recentes</h1>   

                 <div class="container">

                   <div id="owl12" class="owl-carousel">
                    


                    <?php 

                     $count_post_publications = count(query_posts("category_name=publicacoes-recentes")); 

                      query_posts("showposts=".$count_post_publications."&category_name=publicacoes-recentes");
                      if ( have_posts() ) : while ( have_posts() ) : the_post();

                     ?>

                    <div> 
                       <?php the_post_thumbnail('recent-publications'); ?> 
                        <div class="date triangular-icon">
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

         <div class="col-lg-12 col-sm-12 col-xs-12 text-center">
           <span class="icon-top">
            <img src="<?php bloginfo("template_url")?>/img/comment.png">
           </span><!-- /.END icon-top -->
         </div><!-- /.END col-lg-12 col-sm-12 col-xs-12 text-center -->

        
         <section id="contact" class="col-lg-12 col-sm-12 col-xs-12 text-center full-width">
          
             <h1 class="title-section">Entre em contato</h1>      
             <p class="sub-title-section">se você precisar de um orçamento sobre um produto ou serviço não hesite em nos contactar</p> 
            <div class="container">
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



     

      <?php get_footer()?>



    