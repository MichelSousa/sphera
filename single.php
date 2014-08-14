<?php  get_header() ?>

<div class="container-page">
  
  <?php get_sidebar()?>
  
  <section class="posts">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <article class="col-lg-12">
        <a href="<?php the_Permalink()?>"><img class="img-responsive " src="<?php bloginfo("template_url")?>/img/img-category.gif" alt="Generic placeholder image">
       <h1><a title="<?php the_title()?>"  class="title-page" href=""><?php the_title()?></a></h1>
        <span class="info"><?php the_time("M d")?>, <?php the_time("Y")?> Escrito por <?php the_author()?> - <a href="">Nenhum Comentário</a></span>
         <span class="text-page">
			<?php the_content()?>
         </span>
        
       

       
    </article><!-- / col-lg-12  -->
  
    
         <?php 
          
           endwhile;else :  ;
           endif; 

       ?>

    


 </section><!-- / posts  -->
  
  <div class="col-lg-8">

    <div class="shared">

      <div class="col-lg-7">
           <h1 class="text-left">compartilhar publicação</h1>
      </div><!-- / col-lg-6  -->

       <div class="col-lg-5">
        <div class="icon-social text-right">
           <a href="" class="face"><img src="<?php bloginfo("template_url")?>/img/face-single.png"></a>
           <a href="" class="twitter"><img src="<?php bloginfo("template_url")?>/img/twitter-single.png"></a>
        </div><!-- / shared  -->

          </div><!-- / col-lg-6  -->

     </div><!-- / shared  -->

  </div><!-- / col-lg-6  -->

 	</div><!-- / container-page  -->

 <div class="bottom">
  	 <div class="col-lg-6"></div>
  	 <div class="col-lg-1"><img src="<?php bloginfo("template_url")?>/img/comment.png"></div>
  	 <div class="col-lg-5"></div>
  </div>

<?php  get_footer() ?>