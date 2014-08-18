     <?php get_header()?>

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

          <div id="thumbcarousel" class="carousel " data-interval="false">
            <div class="carousel-inner">
                <div class="item active">

                <div data-target="#carousel" data-slide-to="0" class="">
                    <div class="col-lg-4">
                      <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h2><a href="">Heading</a></h2>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                     
                    </div><!-- /.col-lg-4 -->
          
                </div><!-- /item -->

                <div class="item">
                   <div data-target="#carousel" data-slide-to="1" class="">
                        <div class="col-lg-4">
                          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                          <h2><a href="">Heading</a></h2>
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                         
                        </div><!-- /.col-lg-4 -->
                     </div>

            
                     <div data-target="#carousel" data-slide-to="2" class="">
                        <div class="col-lg-4">
                          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                          <h2><a href="">Heading</a></h2>
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        
                        </div><!-- /.col-lg-4 -->
                     </div>
                     
                </div><!-- /item -->

            </div><!-- /carousel-inner -->

           

          </div> <!-- /thumbcarousel -->

           <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                <span class=" glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                <span class=" glyphicon-chevron-right"></span>
            </a>

         </div> <!-- /container -->

         </div> <!-- /container -->

         </section> <!-- /.END section-clients --> 

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
                          <?php the_post_thumbnail('diferencial', array('id' => 'img-responsive')); ?> 
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
                       <p class="sub-title-section">DE ILUMINAÇÃO RESIDENCIAL, COMERCIAL À INDUSTRIAL. CONHEÇA NOSSOS PARCEIROS.</p>    
                       <!-- Nav tabs -->

                     <div class="col-lg-12">

                     

                      <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#iluminacao" role="tab" data-toggle="tab">ILUMINAÇÃO</a></li>
                        <li><a href="#estofados" role="tab" data-toggle="tab">ESTOFADOS</a></li>
                       
                      </ul>

                      
                      <!-- Tab panes -->

                      <div class="tab-content">

                        <div class="tab-pane active" id="iluminacao">

                          <div id="thumbcarousel2" class="carousel " data-interval="false">
                            <div class="carousel-inner">
                                <div class="item active">

                                <div data-target="#carousel" data-slide-to="0" class="">
                                    <div class="col-lg-2">
                                     <img src="<?php bloginfo("template_url")?>/img/img-products.png"  alt="" /></li>
                           
                                    </div><!-- /.col-lg-4 -->
                          
                                </div><!-- /item -->

                                <div class="item">
                                 <div data-target="#carousel" data-slide-to="1" class="">
                                      <div class="col-lg-2">
                                        <img src="<?php bloginfo("template_url")?>/img/img-products.png"  alt="" /></li>
                                       
                                      </div><!-- /.col-lg-4 -->
                                   </div>

            
                                 <div data-target="#carousel" data-slide-to="2" class="">
                                    <div class="col-lg-2">
                                     <img src="<?php bloginfo("template_url")?>/img/img-products.png"  alt="" /></li>
                                    </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="2" class="">
                                    <div class="col-lg-2">
                                     <img src="<?php bloginfo("template_url")?>/img/img-products.png"  alt="" /></li>
                                    </div><!-- /.col-lg-4 -->
                                 </div>
                     

                                 <div data-target="#carousel" data-slide-to="2" class="">
                                    <div class="col-lg-2">
                                     <img src="<?php bloginfo("template_url")?>/img/img-products.png"  alt="" /></li>
                                    </div><!-- /.col-lg-4 -->
                                 </div>
                     

                                  <div data-target="#carousel" data-slide-to="2" class="">
                                    <div class="col-lg-2">
                                     <img src="<?php bloginfo("template_url")?>/img/img-products.png"  alt="" /></li>
                                    </div><!-- /.col-lg-4 -->
                                 </div>
                     
                                   
                                          </div><!-- /item -->
                          
                                      </div><!-- /carousel-inner -->
                          
                                     
                          
                                    </div> <!-- /thumbcarousel -->
                          
                                     <a class="left carousel-control" href="#thumbcarousel2" role="button" data-slide="prev">
                                          <span class=" glyphicon-chevron-left"></span>
                                      </a>
                                      <a class="right carousel-control" href="#thumbcarousel2" role="button" data-slide="next">
                                          <span class=" glyphicon-chevron-right"></span>
                                      </a>
                          '
                    <!-- /CAROSEL  thumbcarousel3 -->
                          <div id="thumbcarousel3" class="carousel " data-interval="false">
                            <div class="carousel-inner">
                                <div class="item active">

                                <div data-target="#carousel" data-slide-to="0" class="">
                                    <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>

                                    

                                        <div class="top-box">
                                          <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                          
                                </div><!-- /item -->

                                <div class="item">
                                 <div data-target="#carousel" data-slide-to="1" class="">
                                      <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                             <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                   </div>

            
                                 <div data-target="#carousel" data-slide-to="2" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                           <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="3" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                             <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="4" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                             <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="5" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                            <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="6" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                             <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="7" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                             <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>
                     

                                
                     
                     
                </div><!-- /item -->

            </div><!-- /carousel-inner -->

           

          </div> <!-- /thumbcarousel -->

            <a style="margin-left:-80px" class="left carousel-control" href="#thumbcarousel3" role="button" data-slide="prev">
                <span class=" glyphicon-chevron-left"></span>
            </a>

            <a class="right carousel-control" href="#thumbcarousel3" role="button" data-slide="next">
                <span class=" glyphicon-chevron-right"></span>
            </a>


            <a class="btn-sphera" href="">SITE DESSE PARCEIRO</a>


                 </div>   <!-- END iluminacao --> 

                        </div>   <!-- END iluminacao --> 

                        </div>   <!-- END iluminacao -->


                        <div class="tab-pane" id="estofados">

                          ESTOFADOS

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

             <h1 class="title-section">Promoções</h1>  

             <div class="container">

             <div id="thumbcarousel-promotions" class="carousel " data-interval="false">
              
             <div class="carousel-inner">
                
              <?php

              $args = array( 'posts_per_page' => 100 ,'category_name'=>'promocao'  );
              $the_query = new WP_Query( $args );
              if ( $the_query->have_posts() ) :
              $i = 0;
              while ( $the_query->have_posts() ) : $the_query->the_post();
               $file = get_post_meta($post->ID, 'file', true);
              $i++;

              if ( $i == 1 ) {

              ?> 

              <div class="item active">

                      <?php } ?>

                   <div class="col-md-6">

                     
                     <div class="bg-image">

                       <?php the_post_thumbnail('promocao'); ?>

                     </div><!-- END bg-image -->  
            
                      <?php $content = get_the_content();?>
                 
                       <p><?php echo wp_trim_words($content, 40);?></p>

                   </div><!-- END col-md-6 -->  


                    <?php 

                      if ( $i % 3 == 0 && $i != 10 ) 

                           { 
                             
                              echo  '</div><div class="item">';

                           }

                      endwhile;

                               echo '</div>';

                      wp_reset_postdata();

                      endif;
                      
                      ?>
                  </div>
    

          </div><!-- /carousel-inner -->

           

          </div> <!-- /thumbcarousel -->

            <a class="left carousel-control" href="#thumbcarousel-promotions" role="button" data-slide="prev">
                <span class=" glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel-promotions" role="button" data-slide="next">
                <span class=" glyphicon-chevron-right"></span>
            </a>     

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
                        <li class="active"><a href="#all" role="tab" data-toggle="tab">Ver todos</a></li>
                        <li><a href="#primary" role="tab" data-toggle="tab">Lorem</a></li>
                        <li><a href="#estofados" role="tab" data-toggle="tab">ipson</a></li>
                        <li><a href="#estofados" role="tab" data-toggle="tab">Ipson</a></li>
              </ul>   
                <div class="tab-content">

                  <div class="tab-pane active" id="all">
                      <!-- /CAROSEL  thumbcarousel3 -->
                          <div id="thumbcarousel-recentes" class="carousel " data-interval="false">
                            <div class="carousel-inner">
                                <div class="item active">

                                <div data-target="#carousel" data-slide-to="0" class="">
                                    <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-recente.gif"  alt="" /></li>
                                        <div class="top-box">
                                             <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                          
                                </div><!-- /item -->

                                <div class="item">
                                 <div data-target="#carousel" data-slide-to="1" class="">
                                      <div class="col-lg-3">
                                      <img src="<?php bloginfo("template_url")?>/img/img-recente.gif"  alt="" /></li>
                                        <div class="top-box">
                                             <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                   </div>

            
                                 <div data-target="#carousel" data-slide-to="2" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-recente.gif"  alt="" /></li>
                                        <div class="top-box">
                                             <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="3" class="">
                                     <div class="col-lg-3">
                                        <img src="<?php bloginfo("template_url")?>/img/img-recente.gif"  alt="" /></li>
                                        <div class="top-box">
                                             <h2 class="title-article">titulo</h2>
                                          <h3 class="sub-title-article">subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>


                            </div><!-- /carousel-inner -->

           

                           </div> <!-- /thumbcarousel -->
                            </div>
                            <a class="left carousel-control" href="#thumbcarousel3" role="button" data-slide="prev">
                                <span class=" glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#thumbcarousel3" role="button" data-slide="next">
                                <span class=" glyphicon-chevron-right"></span>
                            </a>  
              
                    </div>
                 </div>

                  <div class="tab-pane" id="primary">segundo</div>
              
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

                          <div class="bg-image-service">
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

