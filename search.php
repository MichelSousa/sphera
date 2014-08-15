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
  
  
  
  <section class="posts-search">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();  ?>

         <div class="col-lg-4">

            <a href="<?php the_Permalink()?>">

              <img class="col-sx col-sm col-lg col-sx img-responsive " src="<?php bloginfo("template_url")?>/img/img-search.png">
              
            </a>

         </div><!-- / col-lg-4  -->

         <div class="col-lg-8">

         <div class="col-lg-1">
            <img src="<?php bloginfo("template_url")?>/img/icon-search.png">
         </div><!-- / col-lg-1  -->

          <div class="col-lg-2">
            <h2><a href="<?php the_Permalink()?>"><?php the_title()?></a></h2>

           
         </div><!-- / col-lg-1  -->

          <div style="border-top:1px solid #fff;margin-top:20px;left:15px" class="col-lg-8">

          </div>

          </div>  <!-- / col-lg-8  -->
           <p>
              <?php the_content()?>  
            </p>

           <?php 
          
           endwhile;else :  ;
           endif; 
           
          
          ?>

  </section><!-- / posts-search  -->

 	</div><!-- / container-page  -->

 <div class="bottom">
  	 <div class="col-lg-6"></div>
  	 <div class="col-lg-1"><img src="<?php bloginfo("template_url")?>/img/comment.png"></div>
  	 <div class="col-lg-5"></div>
  </div><!-- / bottom  -->

<?php  get_footer() ?>