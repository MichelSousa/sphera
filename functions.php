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

add_image_size( 'recente', 248,188); 



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


//===================== Endereço

$wp_customize->add_section( 'sushiai_endereco' , array(
     'title'     => __( 'Endereço', 'sushiai' ),
      'description'   => 'Digite o seu endereço',
) );

$wp_customize->add_setting( 'text_endereco' , array(
    'default'     => 'Rua Lucia Madalena Strapassoni, 154 | Sala 5, Quatro Barras',
) );

$wp_customize->add_control('sushiai_endereco_text', array(
  'label'        => __( 'url', 'sushiai' ),
  'section'    => 'sushiai_endereco',
  'settings'   => 'text_endereco',
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




?>  


	 
	 
	