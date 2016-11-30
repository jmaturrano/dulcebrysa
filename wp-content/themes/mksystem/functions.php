<?php
/**
 * mksystem functions and definitions
 *
 * @package  mksystem
 */


/**
 * Mk system slider no sirve 
 */
function mksystem_featured_slider1() {
    if(get_theme_mod('devit_slider_checkbox')):
      echo '<div class="flexslider">';
        echo '<ul class="slides">';

          $count = get_theme_mod('devit_slide_number');
          $slidecat = get_theme_mod('devit_slide_categories');

            if ( $count && $slidecat ) {
            $query = new WP_Query( array( 'cat' => $slidecat, 'posts_per_page' => $count ) );
            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();
              echo '<li>';
                if ( has_post_thumbnail() ) { // Check if the post has a featured image assigned to it.
                  the_post_thumbnail('full');
                }
                echo '<div class="flex-caption custom-caption">';
                  //echo '<a href="'. get_permalink() .'">';
                  echo '<div class="text-center">';
                    if ( get_the_title() != '' ) echo '<h2 class="entry-title">'. get_the_title().'</h2>';
                    if ( get_the_excerpt() != '' ) echo '<div class="excerpt">' . get_the_excerpt() .'</div>';
                  echo '</div>';
                echo '</div>';

                endwhile;
              endif;

            } else {
                echo "Slider no configurado...";
            }
            echo '</li>';
        echo '</ul>';
      echo ' </div>';
  endif;
}
add_action('featured_slider','mksystem_featured_slider');

/**
 * FIN Mk system slider no sirve 
 */




function mksystem_header_styles() {
?>
  <style type="text/css">
    .navbar-mksystem{
      /*background: #FFC700; */
      background: <?php echo get_theme_mod('color_mksystem_theme'); ?>;
    }
    .navbar-mksystem a{
      color: #000; 
    }
    
    }
  </style>
<?php
}
add_action( 'wp_enqueue_scripts', 'mksystem_header_styles' );













function mksystem_customizer_register( $wp_customize ) {


/* Slider main */
  $wp_customize->add_section('devit_slider_options', array(
      'title' => __('Slider', 'dazzling'),
      'priority' => 31
  ));
  $wp_customize->add_setting( 'devit_slider_checkbox', array(
          'default' => 0
  ) );
  $wp_customize->add_control( 'devit_slider_checkbox', array(
          'label' => 'Habilitar slider?',
          'section' => 'devit_slider_options',
          'priority'  => 5,
          'type'      => 'checkbox',
  ) );
  global $options_categories;
  $wp_customize->add_setting('devit_slide_categories', array(
      'default' => ''
  ));
  $wp_customize->add_control('devit_slide_categories', array(
      'label' => 'Slider Categoría',
      'section' => 'devit_slider_options',
      'type'    => 'select',
      'description' => 'Seleccione una categoría para las imágenes del slider',
      'choices'    => $options_categories
  ));
  $wp_customize->add_setting('devit_slide_number', array(
      'default' => 3
  ));
  $wp_customize->add_control('devit_slide_number', array(
      'label' => 'Número de items',
      'section' => 'devit_slider_options',
      'description' => 'Ingrese el número de sliders',
      'type' => 'text'
  ));

















  /*
  *
  * Contactos
  *
  */
  
  $wp_customize->add_section(
        'mksystem_contacto',
        array(
            'title' => __('Contactos', 'mksystem'),
            'priority' => 100
        )
    );
   $wp_customize->add_setting('texto_cabecera',array(
    'default' => __('Texto por defecto','mksystem')
  ));
  $wp_customize->add_control('texto_cabecera',array(
    'label' => __('Texto de Cabecera','mksystem'),
    'section' => 'mksystem_contacto',
    'setting' => 'texto_cabecera',
    'type'    => 'textarea'
  ));




 /*
  *
  * Servicios
  *
  */
  $wp_customize->add_section(
        'mksystem_servicios',
        array(
            'title' => __('Página servicios', 'mksystem'),
            'priority' => 100
        )
    );
  
  // titulo 1
  $wp_customize->add_setting('servicios_titulo1',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('servicios_titulo1',array(
    'label' => __('Título 1','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_titulo1',
    'type'    => 'text'
  ));
  
  //text area 1
   $wp_customize->add_setting('servicios_texto1',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('servicios_texto1',array(
    'label' => __('Texto 1','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_texto1',
    'type'    => 'textarea'
  ));
  //imagen 1
  $wp_customize->add_setting('servicios_imagen1',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicios_imagen1' , array(
    'label' => __('Imagen 1' , 'mksystem'),
    'section' => 'mksystem_servicios',
    'settings' => 'servicios_imagen1'
  )));

  // titulo 2
  $wp_customize->add_setting('servicios_titulo2',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('servicios_titulo2',array(
    'label' => __('Título 2','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_titulo2',
    'type'    => 'text'
  ));
  
  //text area 2
   $wp_customize->add_setting('servicios_texto2',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('servicios_texto2',array(
    'label' => __('Texto 2','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_texto2',
    'type'    => 'textarea'
  ));
  //imagen 2
  $wp_customize->add_setting('servicios_imagen2',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicios_imagen2' , array(
    'label' => __('Imagen 2' , 'mksystem'),
    'section' => 'mksystem_servicios',
    'settings' => 'servicios_imagen2'
  )));

  
  // titulo 3
  $wp_customize->add_setting('servicios_titulo3',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('servicios_titulo3',array(
    'label' => __('Título 3','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_titulo3',
    'type'    => 'text'
  ));
  
  //text area 3
   $wp_customize->add_setting('servicios_texto3',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('servicios_texto3',array(
    'label' => __('Texto 3','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_texto3',
    'type'    => 'textarea'
  ));
  //imagen 3
  $wp_customize->add_setting('servicios_imagen3',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicios_imagen3' , array(
    'label' => __('Imagen 3' , 'mksystem'),
    'section' => 'mksystem_servicios',
    'settings' => 'servicios_imagen3'
  )));



 /*
  *
  * Principal
  *
  */
  $wp_customize->add_section(
        'mksystem_servicios',
        array(
            'title' => __('Página principal', 'mksystem'),
            'priority' => 100
        )
    );
  
  // titulo 1
  $wp_customize->add_setting('servicios_titulo1',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('servicios_titulo1',array(
    'label' => __('Título 1','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_titulo1',
    'type'    => 'text'
  ));
  
  //text area 1
   $wp_customize->add_setting('servicios_texto1',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('servicios_texto1',array(
    'label' => __('Texto 1','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_texto1',
    'type'    => 'textarea'
  ));
  //imagen 1
  $wp_customize->add_setting('servicios_imagen1',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicios_imagen1' , array(
    'label' => __('Imagen 1' , 'mksystem'),
    'section' => 'mksystem_servicios',
    'settings' => 'servicios_imagen1'
  )));

  // titulo 2
  $wp_customize->add_setting('servicios_titulo2',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('servicios_titulo2',array(
    'label' => __('Título 2','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_titulo2',
    'type'    => 'text'
  ));
  
  //text area 2
   $wp_customize->add_setting('servicios_texto2',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('servicios_texto2',array(
    'label' => __('Texto 2','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_texto2',
    'type'    => 'textarea'
  ));
  //imagen 2
  $wp_customize->add_setting('servicios_imagen2',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicios_imagen2' , array(
    'label' => __('Imagen 2' , 'mksystem'),
    'section' => 'mksystem_servicios',
    'settings' => 'servicios_imagen2'
  )));

  
  // titulo 3
  $wp_customize->add_setting('servicios_titulo3',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('servicios_titulo3',array(
    'label' => __('Título 3','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_titulo3',
    'type'    => 'text'
  ));
  
  //text area 3
   $wp_customize->add_setting('servicios_texto3',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('servicios_texto3',array(
    'label' => __('Texto 3','mksystem'),
    'section' => 'mksystem_servicios',
    'setting' => 'servicios_texto3',
    'type'    => 'textarea'
  ));
  //imagen 3
  $wp_customize->add_setting('servicios_imagen3',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'servicios_imagen3' , array(
    'label' => __('Imagen 3' , 'mksystem'),
    'section' => 'mksystem_servicios',
    'settings' => 'servicios_imagen3'
  )));






}


add_action('customize_register','mksystem_customizer_register');


/**
 * slider main
 */
function devit_featured_slider() {
//  if(get_theme_mod('devit_slider_checkbox')):
      echo '<div class="flexslider">';
        echo '<ul class="slides">';

          $count = get_theme_mod('devit_slide_number');
          $slidecat = get_theme_mod('devit_slide_categories');

            if ( $count && $slidecat ) {
            $query = new WP_Query( array( 'cat' => $slidecat, 'posts_per_page' => $count ) );
            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();
              echo '<li>';
                if ( has_post_thumbnail() ) { // Check if the post has a featured image assigned to it.
                  the_post_thumbnail('full');
                }
                echo '<div class="flex-caption custom-caption">';
                  //echo '<a href="'. get_permalink() .'">';
                  echo '<div class="text-center">';
                    if ( get_the_title() != '' ) echo '<h2 class="entry-title">'. get_the_title().'</h2>';
                    if ( get_the_excerpt() != '' ) echo '<div class="excerpt">' . get_the_excerpt() .'</div>';
                  echo '</div>';
                echo '</div>';

                endwhile;
              endif;

            } else {
                echo "Slider no configurado...";
            }
            echo '</li>';
        echo '</ul>';
      echo ' </div>';
 // endif;
}