
    

   <div class="mainwrap" style="background-size: cover;border-top:1px solid #ededed;">
          <div class="mainwrap-icon-background transition"></div>
          <div class="mainwrap-icon">
            <img src="<?php bloginfo("template_url")?>/img/icon-bottom-section-promocao.png">
        </div>

       
       

         <section id="section-recents" class="col-lg-12 col-sm-12 col-xs-12 text-center">
          <div class="container">
             <h1 class="title-section">Projetos recentes</h1>  
             <div class="border-bottom-title"></div>    
               <p class="sub-title-section">DE ILUMINAÇÃO RESIDENCIAL, COMERCIAL À INDUSTRIAL. CONHEÇA NOSSOS PARCEIROS.</p> 

               
                 <div class="resposta"></div>


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
                          $b=1;
                      

                            foreach ( $categories as $row ) 
                                {
                                        
                           ?>     



                                <div class="tab-pane" id="<?php echo  $row->slug;?>">

                                       

                                  <div id="owl<?php echo $a++?>" class="owl-carousel">

                                              
                                 <?php 
                                   query_posts("showposts=20&category_name=.'".$row->slug."'");
                                   if ( have_posts() ) : while ( have_posts() ) : the_post();
                                   $urlimage = get_post_meta($post->ID, 'urlimage', true);
                                   $cliente = get_post_meta($post->ID, 'cliente', true);
                                   $categorias = get_post_meta($post->ID, 'categorias', true);
                                   $empresa = get_post_meta($post->ID, 'empresa', true);

                                  $linguagens = get_post_meta($post->ID, 'linguagens', true);


                                 ?>
                                        <div class="column">  

                                          <div  class="overdefult" id="<?php echo get_the_ID(); ?>" style="display:none"></div>

                                          <?php the_post_thumbnail('recente',array("class"=>"image")); ?>
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
  </div> <!-- /container -->