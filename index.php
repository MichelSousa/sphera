     <?php get_header()?>

 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
 
        <div class="col-lg-12 col-sm-12 col-xs-12 text-center ">

         <div class="highlight">

          <h2 class="highlight-title">Fazemos do nosso um ambiente único</h2>

          <p class="text-highlight"> fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris </p>
         
         </div><!-- /.END highlight -->

        </div><!-- /.col-lg-4 -->

      <!-- START THE FEATURETTES -->
         
        <section id="slide-posts" class="col-lg-12 col-sm-12 col-xs-12 text-center">

            <h1 class="title-section">SPHERA</h1>

            <p class="sub-title-section">fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris </p>

         <div class="slide-featturettes" style="max-width:642px;height:380px">

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

              <article class="col-lg-4">
            
                <h1>29</h1>
                <h2>projetos Desenvolvidos</h2>
                
              </article><!-- /.col-lg-4 -->

              <article class="col-lg-4">
             
                <h1 style="color:#fff">1,200</h1>
                <h2>Clientes Satisfeitos</h2>

              </article><!-- /.col-lg-4 -->

              <article class="col-lg-4">
                
                <h1>150</h1>
                <h2>artigos publicados</h2>
                
              </article><!-- /.col-lg-4 -->

             </div> <!-- /.row -->  

        </div> <!-- /.container -->  

         </section>   <!-- /.END section-stats -->

         <section id="section-quotes" class="col-lg-12 col-sm-12 col-xs-12 full-width">
            
           <div class="container"> 

            <div class="col-lg-5">

              <img class="img-circle img-responsive" src="<?php bloginfo("template_url")?>/img/img.png" alt="Generic placeholder image" style="width: 483px; height: 483px;">
              
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">

             <h2><a href="">Heading</a></h2>

             <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

            </div>

           </div><!-- /.container --> 

         </section> <!-- /.END section-quotes --> 

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

         <section id="section-differential" class="col-lg-12 col-sm-12 col-xs-12 text-center full-width">
             <h1 class="title-section">Nosso diferencial</h1>   
              <div class="container">
                  <div class="col-lg-4">

                         <div class="featured-image">
                         <img class="" src="<?php bloginfo("template_url")?>/img/img1-differential.png" alt="Generic placeholder image" >
                         </div>

                          <h2><a href="">Heading</a></h2>
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                         
                   </div><!-- /.col-lg-4 -->

                   <div class="col-lg-4">

                          <div class="featured-image">
                          <img class="" src="<?php bloginfo("template_url")?>/img/img2-differential.png" alt="Generic placeholder image" >
                          </div>
                          <h2><a href="">Heading</a></h2>
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                         
                   </div><!-- /.col-lg-4 -->

                   <div class="col-lg-4">
                          <div class="featured-image">
                          <img class="" src="<?php bloginfo("template_url")?>/img/img3-differential.png" alt="Generic placeholder image" >
                          </div>
                          <h2><a href="">Heading</a></h2>
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                         
                   </div><!-- /.col-lg-4 -->
              </div><!-- /.container-->
         </section>  <!-- /.END section-differential -->

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
                     
                          '         
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
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                          
                                </div><!-- /item -->

                                <div class="item">
                                 <div data-target="#carousel" data-slide-to="1" class="">
                                      <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                   </div>

            
                                 <div data-target="#carousel" data-slide-to="2" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="3" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="4" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="5" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="6" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="7" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
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
             

         <section id="section-promotions" class="col-lg-12 col-sm-12 col-xs-12 text-center full-width">
             <h1 class="title-section">Promoções</h1>  
             <div class="container">
             <div id="thumbcarousel-promotions" class="carousel " data-interval="false">
            <div class="carousel-inner">
                <div class="item active">

                <div data-target="#carousel" data-slide-to="0" class="">
                    <div class="col-lg-6">
                      <div class="bg-image">
                      <img  src="<?php bloginfo("template_url")?>/img/img-promotions.gif">
                      </div><!-- /.bg-image -->
                      
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                     
                    </div><!-- /.col-lg-4 -->
          
                </div><!-- /item -->

                <div class="item">
                   <div data-target="#carousel" data-slide-to="1" class="">
                        <div class="col-lg-6">
                           <div class="bg-image">
                           <img  src="<?php bloginfo("template_url")?>/img/img-promotions.gif">
                        </div><!-- /.bg-image -->
                        
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                         
                        </div><!-- /.col-lg-4 -->
                     </div>

            
                    
                     
                </div><!-- /item -->

            </div><!-- /carousel-inner -->

           

          </div> <!-- /thumbcarousel -->

        </div><!-- /container -->

           <a class="left carousel-control" href="#thumbcarousel-promotions" role="button" data-slide="prev">
                <span class=" glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel-promotions" role="button" data-slide="next">
                <span class=" glyphicon-chevron-right"></span>
            </a>     
         </section>  <!-- /.END section-promotions -->


         <section id="section-recents" class="col-lg-12 col-sm-12 col-xs-12 text-center">
          <div class="container">
             <h1 class="title-section">Projetos recentes</h1>  
               <p class="sub-title-section">DE ILUMINAÇÃO RESIDENCIAL, COMERCIAL À INDUSTRIAL. CONHEÇA NOSSOS PARCEIROS.</p> 
                <!-- /CAROSEL  thumbcarousel3 -->
                          <div id="thumbcarousel3" class="carousel " data-interval="false">
                            <div class="carousel-inner">
                                <div class="item active">

                                <div data-target="#carousel" data-slide-to="0" class="">
                                    <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                          
                                </div><!-- /item -->

                                <div class="item">
                                 <div data-target="#carousel" data-slide-to="1" class="">
                                      <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                   </div>

            
                                 <div data-target="#carousel" data-slide-to="2" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>

                                 <div data-target="#carousel" data-slide-to="3" class="">
                                     <div class="col-lg-3">
                                       <img src="<?php bloginfo("template_url")?>/img/img-products.gif"  alt="" /></li>
                                        <div class="top-box">
                                          <h2>titulo</h2>
                                          <h3>subtitulo</h3>
                                        </div>  
                                      </div><!-- /.col-lg-4 -->
                                 </div>


            </div><!-- /carousel-inner -->

           

          </div> <!-- /thumbcarousel -->

           <a style="margin-left:-80px" class="left carousel-control" href="#thumbcarousel3" role="button" data-slide="prev">
                <span class=" glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel3" role="button" data-slide="next">
                <span class=" glyphicon-chevron-right"></span>
            </a>       
             </div> <!-- /container -->
         </section>  <!-- /.END section-recents -->


         <section id="section-service" class="col-lg-12 col-sm-12 col-xs-12 text-center">
          <div class="container">
             <h1 class="title-section">Nossos serviços</h1>   
           <div class="col-lg-4">

                         <div class="featured-image">
                         <img class="" src="<?php bloginfo("template_url")?>/img/img1-differential.png" alt="Generic placeholder image" >
                         </div>

                          <h2><a href="">Heading</a></h2>
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                         
                   </div><!-- /.col-lg-4 -->

                   <div class="col-lg-4">

                          <div class="featured-image">
                          <img class="" src="<?php bloginfo("template_url")?>/img/img2-differential.png" alt="Generic placeholder image" >
                          </div>
                          <h2><a href="">Heading</a></h2>
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                         
                   </div><!-- /.col-lg-4 -->

                   <div class="col-lg-4">
                          <div class="featured-image">
                          <img class="" src="<?php bloginfo("template_url")?>/img/img3-differential.png" alt="Generic placeholder image" >
                          </div>
                          <h2><a href="">Heading</a></h2>
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                         
                   </div><!-- /.col-lg-4 -->
  
          </div>

         </section>  <!-- /.END section-service -->


        <section id="recent-publications" class="col-lg-12 col-sm-12 col-xs-12 text-center">
          <div class="container">
             <h1 class="title-section">Publicações recentes</h1>       
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
          </div>
        </sction>  <!-- /.END recent-publications -->


        <footer id="footer">
           

         <section id="contact" class="col-lg-12 col-sm-12 col-xs-12 text-center">
             <h1 class="title-section">Entre em contato</h1>       
         </sction>  <!-- /.END contact -->


        </footer><!-- /.END footer -->

      <?php get_footer()?>

