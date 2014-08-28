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
  

     <?php  if ( have_posts() ) : while ( have_posts() ) : the_post();
                           ?>

  <section class="posts-search">
     
        <?php the_post_thumbnail('search',array('class' => 'image-post transition')); ?>

      <div class="bg-top ">

       <?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?> 

    

          <a href="http://127.0.0.1/wordpress/heading-8/">Heading</a>

      
         <div class="" style="border-top:1px solid #fff;
         margin-top:20px;left:15px;max-width:1000px;position:relative;left:220px"> 

        </div>

        
        
      </div>

      <p>
<span class="text-page">Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna</span>
</p>

  </section>
  
<?php  endwhile;else : ?>
       <?php endif; ?>

     <div class="paginator"  style="margin-bottom:80px;">
      <?php wp_pagenavi() ?> 
     </div>


 	</div><!-- / container-page  -->



 <div class="bottom">
  	 <div class="col-lg-6"></div>
  	 <div class="col-lg-1"><img src="<?php bloginfo("template_url")?>/img/comment.png"></div>
  	 <div class="col-lg-5"></div>
  </div><!-- / bottom  -->

<?php  get_footer() ?>