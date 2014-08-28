<?php  get_header() ?>

<div class="container-page">
  
  <?php get_sidebar()?>
  
  <section class="posts">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <?php $comments_count = wp_count_comments();?>
    <article class="col-lg-12">
        
       <a href="<?php the_Permalink()?>"> <?php the_post_thumbnail('single', array('class' => 'col-sx col-sm col-lg col-sx img-responsive')); ?> </a>
       <h1><a title="<?php the_title()?>"  class="title-page" href="<?php the_Permalink()?>"><?php the_title()?></a></h1>
        <span class="info"><?php the_time("M d")?>, <?php the_time("Y")?> Escrito por <?php the_author()?> - 
          <a href="">
             <?php if($comments_count->total_comments <=0 ){
                 echo "Nenhum comentário";
               }
               elseif($comments_count->total_comments == 1)
                { 
                  echo $comments_count->total_comments . " comentário";
                }
                else
                {
                   echo $comments_count->total_comments . " comentários";
                }
              ?>
          </a></span>
         <span class="text-page">
			     <?php the_content()?>
         </span>

         <a href="<?php the_Permalink()?>" role="button" class="leia-mais-page">Leia Mais</a>
        </article><!-- / col-lg-12  -->
         <?php 
          
           endwhile;else :  ;
           endif; 
           
          
          ?>


     <div class="paginator">
      <?php wp_pagenavi() ?> 
     </div>

 </section><!-- / posts  -->

 	</div><!-- / container-page  -->

 <div class="bottom">
  	 <div class="col-lg-6"></div>
  	 <div class="col-lg-1"><img src="<?php bloginfo("template_url")?>/img/comment.png"></div>
  	 <div class="col-lg-5"></div>
  </div>

<?php  get_footer() ?>