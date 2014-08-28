<?php  get_header() ?>


<header class="header-page">

  <div class="container-page-header" style="">
    <?php $categories = get_categories('$post-ID'); ?>
     <span><?php the_title()?></span> <span>  
     <?php $cat = get_the_category( $post->ID );
           foreach($cat as $category) {?>
            <span><img src="<?php bloginfo("template_url")?>/img/separator.png"> </span><span> <a href="<?php get_category_link( $cat->term_id )?>"> <?php echo $category->cat_name; ?></a> </span>
          <?php } ?>
  </div>  <!-- / container-page  --> 

</header><!-- / header-page  -->

<div class="container-page">
  
  <?php get_sidebar()?>
  
  <section class="posts">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>
    <article class="col-lg-12">
        <?php the_post_thumbnail('single', array('class' => 'col-sx col-sm col-lg col-sx img-responsive')); ?> 
       <h1><a title="<?php the_title()?>"  class="title-page" href=""><?php the_title()?></a></h1>
        <span class="info"><?php the_time("M d")?>, <?php the_time("Y")?> Escrito por <?php the_author()?> </span>
         <span class="text-page">
			       <?php the_content()?>
         </span>
        
       

       
    </article><!-- / col-lg-12  -->
  
    
         <?php 
          
           endwhile;else :  ;
           endif; 

       ?>

    


 </section><!-- / posts  -->
  


     </div><!-- / shared  -->

  </div><!-- / col-lg-6  -->

 	</div><!-- / container-page  -->

 <div class="bottom">
  	 <div class="col-lg-6"></div>
  	 <div class="col-lg-1"><img src="<?php bloginfo("template_url")?>/img/comment.png"></div>
  	 <div class="col-lg-5"></div>
  </div>

<?php  get_footer() ?>