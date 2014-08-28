<?php get_header() ?>

    <div class="container-page-404">
			  <div class="sidebar hidden-sm hidden-xs hidden-md">
				 <?php dynamic_sidebar( "sidebar404" ); ?> 
			  </div><!-- / sidebar -->
	   <div class="img0">
	   	 <img src="<?php bloginfo("template_url")?>/img/404.fw.png"/>
	   </div>
	   <div class="img1">	 
	<img src="<?php bloginfo("template_url")?>/img/bolinharoxa.fw.png"/>
	   </div>
	   <div class="img2"> 
		 <img src="<?php bloginfo("template_url")?>/img/ja.fw.png"/>
	   </div> 
	 
	 <div class="row">

	     <div class="col-lg-4 text-center">
		        
				<h2>DIFERENCIAL</h2>
			      <div class="bg">
			 	   	 <a href="<?php echo get_option("home")?>"><img src="<?php bloginfo("template_url")?>/img/1b.fw.png"/></a>
				  </div>	
		
			   
		 </div>	  
			  
		 <div class="col-lg-4 text-center">		 
		 		 
				 <h2>PROMOÇÕES</h2>
				
			   <div class="bg">
			 	   	 <a href="<?php echo get_option("home")?>"><img src="<?php bloginfo("template_url")?>/img/c.fw.png"/></a>
			  </div>	
					
			  
		 </div>
          
          <div class="col-lg-4 text-center">		  
				
				<h2>PROJETOS RECENTES</h2>
				
				  <div class="bg">
			 	   	 <a href="<?php echo get_option("home")?>"><img src="<?php bloginfo("template_url")?>/img/d.fw.png"/></a>
				  </div>	
		
		</div>	 
				

	 </div>

    </div>
<?php get_footer() ?>