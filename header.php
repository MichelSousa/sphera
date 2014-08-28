
  


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php wp_title(); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo("template_url")?>/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php bloginfo("template_url")?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="<?php bloginfo("template_url")?>/css/carousel.css" rel="stylesheet">

    <link href="<?php bloginfo("template_url")?>/style.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/owl.carousel.css">
 
    <!-- Default Theme -->
    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/owl.theme.css">

    <script type="text/javascript" src="<?php bloginfo("template_url")?>/js/jquery-1.9.1.min.js"></script>
    <!-- Include js plugin -->
    <script src="<?php bloginfo("template_url")?>/js/owl.carousel.js"></script>

    <link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/odometer-theme-car.css" />

    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

<script>
window.odometerOptions = {
  format: '(ddd).dd'
};
</script>


 <?php wp_head()?>

  </head>
<!-- NAVBAR
================================================== -->
  <body>

  

      <div class="container">

          <div class="logo">
        <a href="<?php echo get_option("home")?>">
            <img  class="img-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12" src="<?php echo get_theme_mod("theme_logo_image") ?>">
        </a>
      </div>  <!--  end LOGO -->

        <div class="navbar  " role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            
            </div>
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

          </div>
        </div>

     
    </div>
 </div>

   

               
                
                 
                 <script type="text/javascript">


                        jQuery(document).ready(function($){
                              

                          $("#section-stats .col-lg-4 h1").eq(1).attr("class","title-center number4 odometer odometer-auto-theme ")

                         
                           

                           });

                         
                          
                      
                    </script>

