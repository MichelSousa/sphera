<?php wp_footer();?>
      <!-- FOOTER -->
        <footer id="footer">
        
            <div class="container" style="max-width: 600px;">	
            	
            <section class="social text-center">
            	
            
             
 			<div class="col-lg-7">	
               
                <a href=""><img src="<?php bloginfo("template_url")?>/img/facebook.png"></a> 
              
            </div>   
            
            <div class="col-lg-2">
               
                 <a href="" class="text-right"> <img src="<?php bloginfo("template_url")?>/img/twitter.png"></a> 
             
  			</div>  
  			
           
            	
               <img style="" class="hidden-sm hidden-xs text-right top" src="<?php bloginfo("template_url")?>/img/top.png">
               
         
            
          </section><!-- /.social -->
            
          </div>    
          
          
            
           <div class="container" style="max-width:750px;">
           	
            <section class="menu ">
            	
            	<div class="col-lg-8">
            	 <?php  

				           wp_nav_menu(array(
				            
				            'container' => 'div',
				            'container_class' => 'collapse navbar-collapse',
				            'container_id' => '',
				           'menu_class' => 'nav navbar-nav menu',
				            'echo' => true,
				            'menu_id' => '',
				            'before' => '',
				            'after' =>'',
				            'link_before' =>'',
				            'link_after' =>'',
				            'depth' => 0,
				            'walker' =>'',
				            ) );
				     ?>

            </section> <!-- /.menu -->
	        
	        
             <section class="logo-footer  ">
             	<div class="col-lg-6">
            	  <img src="<?php bloginfo("template_url")?>/img/logo-footer.png">
            	 </div><!-- /.col-lg-6 -->
            	 
            </section> <!-- /.logo -->
   			
   		  
   			 </div><!-- /.col-lg-6 -->
   			 
            <section class="copyright text-">
             <div class="container" style="max-width:300px;">	
             	
             <div class="col-lg-6">	
             	
             	<p>Desenvolvido por :</p>
             	
             </div> <!-- /.col-lg-1 -->
             
              <div class="col-lg-1">	
              	
              	<a href=""><img src="<?php bloginfo("template_url")?>/img/vi.png"></a>
               </div> <!-- /.col-lg-1 -->
               
              </div>
              
            </section> <!-- /.copyright -->
            
           <div class="col-lg-12">	
           	
           </div>  	

        </footer><!-- /.END footer -->

    </div><!-- /.container -->


   </div> 
    
  </body>
</html>
