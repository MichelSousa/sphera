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

            <h1>SPHERA</h1>

            <p>fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris </p>

         <div class="slide-featturettes" style="width:642px;height:380px">

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

         <section id="section-quotes" class="col-lg-12 col-sm-12 col-xs-12">
            
           <div class="container"> 
            <div class="col-lg-5">
              <img class="img-circle img-responsive" src="<?php bloginfo("template_url")?>/img/img.png" alt="Generic placeholder image" style="width: 483px; height: 483px;">
              
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-4">

              <h2>Heading</h2>
              <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>

            </div>

           </div><!-- /.container --> 

         </section> <!-- /.END section-quotes --> 

         <div class="container">

         <section id="section-team" class="col-lg-12 col-sm-12 col-xs-12 text-center">

          <div id="thumbcarousel" class="carousel " data-interval="false">
            <div class="carousel-inner">
                <div class="item active">

                <div data-target="#carousel" data-slide-to="0" class="">
                    <div class="col-lg-4">
                      <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                      <h2>Heading</h2>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                     
                    </div><!-- /.col-lg-4 -->
          
                </div><!-- /item -->

                <div class="item">
                   <div data-target="#carousel" data-slide-to="1" class="">
                        <div class="col-lg-4">
                          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                          <h2>Heading</h2>
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                         
                        </div><!-- /.col-lg-4 -->
                     </div>

            
                     <div data-target="#carousel" data-slide-to="2" class="">
                        <div class="col-lg-4">
                          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
                          <h2>Heading</h2>
                          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        
                        </div><!-- /.col-lg-4 -->
                     </div>
                     
                </div><!-- /item -->

            </div><!-- /carousel-inner -->
            <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>

          </div> <!-- /thumbcarousel -->

         </div> <!-- /container -->

         </section> <!-- /.END section-clients --> 

         <section id="section-differential" class="col-lg-12 col-sm-12 col-xs-12 text-center">

         </section>  <!-- /.END section-differential -->

         <section id="section-products" class="col-lg-12 col-sm-12 col-xs-12 text-center">

         </section>  <!-- /.END section-products -->

         <section id="section-promotions" class="col-lg-12 col-sm-12 col-xs-12 text-center">

         </section>  <!-- /.END section-promotions -->


         <section id="section-recents" class="col-lg-12 col-sm-12 col-xs-12 text-center">

         </section>  <!-- /.END section-recents -->


         <section id="section-service" class="col-lg-12 col-sm-12 col-xs-12 text-center">

         </section>  <!-- /.END section-service -->


        <section id="recent-publications" class="col-lg-12 col-sm-12 col-xs-12 text-center">

        </sction>  <!-- /.END recent-publications -->


        <footer id="footer">
           

         <section id="contact" class="col-lg-12 col-sm-12 col-xs-12 text-center">

         </sction>  <!-- /.END contact -->


        </footer><!-- /.END footer -->

      <?php get_footer()?>