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
      <?php $comments_count = wp_count_comments();?>
    <article class="col-lg-12">
       
       <?php the_post_thumbnail('single', array('class' => 'col-sx col-sm col-lg col-sx img-responsive')); ?> 
       <h1><?php the_title()?></h1>
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
           <a href="" class="face">

            <b:if cond='data:blog.pageType == "item"'>
            <a href="<?php the_Permalink()?>"
            onclick="
            window.open(
            'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href),
            'facebook-share-dialog',
            'width=626,height=436');
            return false;">
              <img border="0" src="<?php bloginfo("template_url")?>/img/face-single.png"></img></a>
              </b:if> 
            
           
            
             <a href="http://twitter.com/home?status=<?php the_title(); ?>+<?php the_permalink(); ?>" title="Share on Twitter" target="_blank">
                 <img src="<?php bloginfo("template_url")?>/img/twitter-single.png">
            </a>
        </div><!-- / shared  -->

          </div><!-- / col-lg-6  -->

     </div><!-- / shared  -->

  </div><!-- / col-lg-6  -->

  <section class="comments col-lg-8">
     
    <?php wp_related_posts()?>
  </section>

    <section class="comments col-lg-8">
      <?php comments_template(); ?>
    </section>

 	</div><!-- / container-page  -->

 <div class="bottom">
  	 <div class="col-lg-6"></div>
  	 <div class="col-lg-1"><img src="<?php bloginfo("template_url")?>/img/comment.png"></div>
  	 <div class="col-lg-5"></div>
  </div>

<?php  get_footer() ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>