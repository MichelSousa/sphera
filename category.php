<?php  get_header() ?>

<div class="container-page">
  
  <?php get_sidebar()?>
  
  <section class="posts">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

    <article class="col-lg-12">
        
       <a href="<?php the_Permalink()?>"><img class="img-responsive " src="<?php bloginfo("template_url")?>/img/img-category.gif" alt="Generic placeholder image">
       <h1><a title="<?php the_title()?>"  class="title-page" href="<?php the_Permalink()?>"><?php the_title()?></a></h1>
        <span class="info"><?php the_time("M d")?>, <?php the_time("Y")?> Escrito por <?php the_author()?> - <a href="">Nenhum Comentário</a></span>
         <span class="text-page">
			     <?php the_content()?>
         </span>

         <a href="<?php the_Permalink()?>" role="button" class="leia-mais-page">Leia Mais</a>

         <?php 
          
           endwhile;else :  ;
           endif; 
           
          
          ?>

    </article><!-- / col-lg-12  -->
  

 </section><!-- / posts  -->

 	</div><!-- / container-page  -->

 <div class="bottom">
  	 <div class="col-lg-6"></div>
  	 <div class="col-lg-1"><img src="<?php bloginfo("template_url")?>/img/comment.png"></div>
  	 <div class="col-lg-5"></div>
  </div>

<?php  get_footer() ?>