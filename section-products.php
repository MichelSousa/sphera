


        <div class="mainwrap" style="background-size: cover;border-top:1px solid #ededed;padding:0px 0 0px 0;">
          <div class="mainwrap-icon-background transition"></div>
          <div class="mainwrap-icon">
               <img src="<?php bloginfo("template_url")?>/img/icon-bottom-section-diferencial.png">
        </div>


<section id="section-products" class="col-lg-12 col-sm-12 col-xs-12 text-center">
            
              <div class="container">

               <h1 class="title-section">Produtos</h1>   
               <div class="border-bottom-title"></div>  

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
                                                    
                                                    <figcaption class="middle" style="background-color: rgba(52, 152, 219, 0.8); display: block; transition: all 300ms ease 0s; left: 0px; top: 100%;">
                                                        <div>
                                                        <a class="icon circle medium lightbox" title="" href="">
                                                        <i class="fa fa-search"></i>
                                                        </a>
                                                        <a class="icon circle medium" href="http://innovarepublic.com.br/drnelson/droga-nao-e-brinquedo/">
                                                        <i class="fa fa-link"></i>
                                                        </a>
                                                        </div>
                                                    </figcaption>

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
             