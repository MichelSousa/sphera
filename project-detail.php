

<?php 

 $id = $_POST['id'];


include "model/model.php";

$sql ="SELECT 
        p.post_title, 
        p.post_content, 
        p.post_date_gmt,
        m.meta_key, 
        m.meta_value 
      FROM 
        wp_posts p , 
        wp_postmeta m 
      WHERE 
        p.ID = $id
      AND 
       post_type = 'post' 
      AND 
       p.ID= m.post_id ";


	 
	 $model =new Model();
	 $model->ConectaDB();

	 $result =$model->SelecionarDados($sql);

	  $domain =  'http://'.$_SERVER['SERVER_NAME'];

     

	 foreach ( $result as $key ) {

	 	      $content =  $key['post_content'];
	 	      $data    =  $key['post_date_gmt'];

	 	      $timestamp = strtotime($data);
	            
	          if($key['meta_key']=='empresa'){

	                 $empresa =	$key['meta_value'];

	            

	                 



	          }

	          elseif($key['meta_key']=='urlimage'){
   					$url =	$key['meta_value'];

   					 if(empty($url))
	          		   {
	          		   	  $url 	=   $domain.'/wordpress/wp-content/themes/sphera/img/default.jpg';
	          		   }

	          }

	        

	         elseif($key['meta_key']=='cliente'){

	          		   $cliente	= $key['meta_value'];

	          		  

	          		   if(empty($cliente))
	          		   {
	          		   	  $cliente	="Sem informação";
	          		   }
	         }

	          elseif($key['meta_key']=='linguagens'){

	          		   $linguagens	= $key['meta_value'];

	          		  

	         }
	  };

?>

  <!------------------------------------------------------------------------>


            <div class="container fechar" style="display:block;margin-bottom:100px">

                <div class="closehomeshow-portfolio port closeajax text-left">
                    <i class="glyphicon glyphicon-remove"></i>
                </div>



                <div class="blogsingleimage">



                <img class="check transition opacity img-responsive " src=
                <?php 
                		 if(empty($url))
	          		   {
	          		   	  echo $url 	=   $domain.'/wordpress/wp-content/themes/sphera/img/default.jpg';
	          		   }
	          		   else
	          		   {
	          		   	echo $url;
	          		   }
                	?>
                >
                </div>

                <div class="projectdescription">
                <div class="datecomment  text-left">
                <p>
                <i class="icon-user"></i>
                Desenvolvido por :
                <span class="authorp port">
                	<?php  if(empty($empresa))
	          		   {
	          		   	   echo $empresa	= "Sem informação";
	          		   }
	          		   else
	          		   {
	          		   	echo $empresa;
	          		   }
	          		   ?>
	          		</span>
                <br>
                <i class="icon-calendar"></i>
                Data do projeto:
                <span class="posted-date port"><?php echo date('M d Y', $timestamp);?></span>
                <br>
                <i class="icon-user"></i>
                Cliente:
                <span class="author port">
                	<?php  if(empty($cliente))
	          		   {
	          		   	   echo $cliente	= "Sem informação";
	          		   }
	          		   else
	          		   {
	          		   	echo $cliente;
	          		   }
	          		   ?>
                </span>
                <br>
                </p>
                </div>
                <div class="posttext  text-left">
                <div>
                <p>
                   <?php echo   $content;?>
                <p>
                <strong>Duis autem vel</strong>
                 eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore.
                </p>
                </div>
                </div>
                <div class="single-portfolio-skils  text-left">
                <ul>


	          		<?php  
	          		 if(empty($linguagens))
	          		   {
	          		   	 echo $linguagens	="<i class='glyphicon glyphicon-plus-sign'></i> <b>Sem informação</b>";
	          		   
	          		  
			            } else{
			      		        
			       	 	    echo "<i class='glyphicon glyphicon-plus-sign'></i> <b>Técnicas usadas: " .$linguagens.'</b>';
			       	 	}
			       	   ?>
                </ul>
                </div>
                </div>
               
              
          </div>



         <!------------------------------------------------------------------------>    

          <script type="text/javascript">

          $(document).ready(function(){


            $(".closehomeshow-portfolio").click(function(){
                            
                       $(".fechar").css({display:"none"})
                    
                  })
             }) 
           </script>   