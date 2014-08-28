<?php ob_start(); 
if ( function_exists( 'add_theme_support' ) ) { 
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)
 

add_image_size( 'blog', null,null); 
add_image_size( 'diferencial', 183,156); 
add_image_size( 'bio', 483,483); 
add_image_size( 'icon-servico', 43,41); 
add_image_size( 'recent-publications', 324,157); 
add_image_size( 'promocao', 398,303); 
add_image_size( 'team', 186,186); 
add_image_size( 'single', 695,333); 
add_image_size( 'search', 369,282); 


add_image_size( 'recente', 248,188); 

add_image_size( 'slide', 690,277); 



if ( function_exists( 'register_nav_menu' ) ) {
register_nav_menu( 'primary', 'Este é meu primeiro menu' );

}


function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
array_pop($excerpt);
$excerpt = implode(" ",$excerpt).'...';
} else {
$excerpt = implode(" ",$excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
return $excerpt;
}


}





add_action( 'customize_register', 'gamesquare_customize_register' );

wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery.js');
wp_enqueue_script('jquery');

//====================== bootstrap
 wp_register_script('bootstrap', get_bloginfo('template_url').'/js/bootstrap.min.js');
 wp_enqueue_script('bootstrap');

 //====================== team
 wp_register_script('team', get_bloginfo('template_url').'/js/team.js');
 wp_enqueue_script('team');

 //====================== tab
 wp_register_script('tab', get_bloginfo('template_url').'/js/tab.js');
 wp_enqueue_script('tab');

  //====================== products
 wp_register_script('productsjs', get_bloginfo('template_url').'/js/products.js');
 wp_enqueue_script('productsjs');

   //======================  carouselow.js
 wp_register_script('carouselow', get_bloginfo('template_url').'/js/carouselow.js');
 wp_enqueue_script('carouselow');


   //======================  carouselow.js
 wp_register_script('owl.carousel', get_bloginfo('template_url').'/js/owl.carousel.js');
 wp_enqueue_script('owl.carousel');

   //======================  animate
 wp_register_script('animate', get_bloginfo('template_url').'/js/animate.js');
 wp_enqueue_script('animate');


   //======================  obmeter
 wp_register_script('odometer', get_bloginfo('template_url').'/js/odometer.js');
 wp_enqueue_script('odometer');



//====================== ancora-deslizante
 wp_register_script('ancora-deslizante', get_bloginfo('template_url').'/js/ancora-deslizante.js');
 wp_enqueue_script('ancora-deslizante');


//====================== number
 wp_register_script('number', get_bloginfo('template_url').'/js/number.js');
 wp_enqueue_script('number');




//====================== top
 wp_register_script('top', get_bloginfo('template_url').'/js/top.js');
 wp_enqueue_script('top');



/* Desenvolvido por Michel Damasceno */

function gamesquare_customize_register( $wp_customize )
{
    

//===================== Upload do logotipo

$wp_customize->add_section( 'theme_image' , array(
     'title'     => __( 'Logo', 'theme' ),
      'description'   => 'Modifique o logo',
) );

$wp_customize->add_setting( 'theme_logo_image' , array(
    'default'     => '',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_logo_image', array(
	'label'        => __( 'Logo', 'theme' ),
	'section'    => 'theme_image',
	'settings'   => 'theme_logo_image',
) ) );




//===================== Número de telefone

$wp_customize->add_section( 'theme_text' , array(
     'title'     => __( 'Digite o texto de boas vindas', 'theme' ),
      'description'   => 'Digite o um texto',
) );

$wp_customize->add_setting( 'text_welcome' , array(
    'default'     => 'Fazemos do nosso um ambiente único',
) );

$wp_customize->add_control('welcome_text', array(
  'label'        => __( '', 'theme' ),
  'section'    => 'theme_text',
  'settings'   => 'text_welcome',
)  );



}


// Registrar áreas de widgets
function theme_widgets_init() {
 // Área 1
 register_sidebar( array (
 'name' => 'Primary Widget Area',
 'id' => 'primary_widget_area',

  ) );
 

 register_sidebar( array (
 'name' => 'Secondary Widget Area',
 'id' => 'secondary_widget_area',
 
  ) );

 register_sidebar( array (
 'name' => 'Sidebar',
 'id' => 'sidebar',
 'before_title' => '<h2  class="title-sidebar">',
  'after_title'  => '</h2>'

  ) );

  register_sidebar( array (
 'name' => 'Sidebar404',
 'id' => 'sidebar404',
 'before_title' => '<h2  class="title-sidebar">',
  'after_title'  => '</h2>'

  ) );



} // end theme_widgets_init
 
add_action( 'init', 'theme_widgets_init' );



if ( isset( $_GET['activated'] ) ) {
 update_option( 'sidebars_widgets', $preset_widgets );
}
// update_option( 'sidebars_widgets', NULL );

// Verificar widgets nas áreas de widgets
function is_sidebar_active( $index ){
  global $wp_registered_sidebars;
 
  $widgetcolums = wp_get_sidebars_widgets();
 
  if ($widgetcolums[$index]) return true;
 
 return false;
} 


/**
 * Filters wp_title to print a neat <title> tag based on what is being viewed.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function theme_name_wp_title( $title, $sep ) {
  if ( is_feed() ) {
    return $title;
  }
  
  global $page, $paged;

  // Add the blog name
  $title .= get_bloginfo( 'name', 'display' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) ) {
    $title .= " $sep $site_description";
  }

  // Add a page number if necessary:
  if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
    $title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
  }

  return $title;
}
add_filter( 'wp_title', 'theme_name_wp_title', 10, 2 );



?>  


	 
	 
	