<?php
/**
 * mksystem functions and definitions
 *
 * @package  mksystem
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

 /*
  *
  * =================== Slider main FUNCIONA ======================
  *
  */


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
  * ===================================DATA index=======================================
  *
  */
  $wp_customize->add_section(
        'mksystem_inicio',
        array(
            'title' => __('Pagina inicio', 'mksystem'),
            'priority' => 100
        )
    );
  
  // titulo 1
  $wp_customize->add_setting('inicio_titulo1',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('inicio_titulo1',array(
    'label' => __('Título 1','mksystem'),
    'section' => 'mksystem_inicio',
    'setting' => 'inicio_titulo1',
    'type'    => 'text'
  ));
  

  //imagen 1
  $wp_customize->add_setting('inicio_imagen1',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'inicio_imagen1' , array(
    'label' => __('Imagen 1' , 'mksystem'),
    'section' => 'mksystem_inicio',
    'settings' => 'inicio_imagen1'
  )));

  // titulo 2
  $wp_customize->add_setting('inicio_titulo2',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('inicio_titulo2',array(
    'label' => __('Título 2','mksystem'),
    'section' => 'mksystem_inicio',
    'setting' => 'inicio_titulo2',
    'type'    => 'text'
  ));
  
  //imagen 2
  $wp_customize->add_setting('inicio_imagen2',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'inicio_imagen2' , array(
    'label' => __('Imagen 2' , 'mksystem'),
    'section' => 'mksystem_inicio',
    'settings' => 'inicio_imagen2'
  )));

  
  // titulo 3
  $wp_customize->add_setting('inicio_titulo3',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('inicio_titulo3',array(
    'label' => __('Título 3','mksystem'),
    'section' => 'mksystem_inicio',
    'setting' => 'inicio_titulo3',
    'type'    => 'text'
  ));
  

  //imagen 3
  $wp_customize->add_setting('inicio_imagen3',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'inicio_imagen3' , array(
    'label' => __('Imagen 3' , 'mksystem'),
    'section' => 'mksystem_inicio',
    'settings' => 'inicio_imagen3'
  )));



    // titulo 4
  $wp_customize->add_setting('inicio_titulo4',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('inicio_titulo4',array(
    'label' => __('Título 4','mksystem'),
    'section' => 'mksystem_inicio',
    'setting' => 'inicio_titulo4',
    'type'    => 'text'
  ));
  

  //imagen 4
  $wp_customize->add_setting('inicio_imagen4',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'inicio_imagen4' , array(
    'label' => __('Imagen 4' , 'mksystem'),
    'section' => 'mksystem_inicio',
    'settings' => 'inicio_imagen4'
  )));

  // titulo 5
  $wp_customize->add_setting('inicio_titulo5',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('inicio_titulo5',array(
    'label' => __('Título 5','mksystem'),
    'section' => 'mksystem_inicio',
    'setting' => 'inicio_titulo5',
    'type'    => 'text'
  ));
  

  //imagen 5
  $wp_customize->add_setting('inicio_imagen5',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'inicio_imagen5' , array(
    'label' => __('Imagen 5' , 'mksystem'),
    'section' => 'mksystem_inicio',
    'settings' => 'inicio_imagen5'
  )));

  // titulo 6
  $wp_customize->add_setting('inicio_titulo6',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('inicio_titulo6',array(
    'label' => __('Título 6','mksystem'),
    'section' => 'mksystem_inicio',
    'setting' => 'inicio_titulo6',
    'type'    => 'text'
  ));
  

  //imagen 6
  $wp_customize->add_setting('inicio_imagen6',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'inicio_imagen6' , array(
    'label' => __('Imagen 6' , 'mksystem'),
    'section' => 'mksystem_inicio',
    'settings' => 'inicio_imagen6'
  )));

//----------------- presentacion  
  // titulo 7
  $wp_customize->add_setting('inicio_titulo7',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('inicio_titulo7',array(
    'label' => __('Título Presentacion','mksystem'),
    'section' => 'mksystem_inicio',
    'setting' => 'inicio_titulo7',
    'type'    => 'text'
  ));
  

  //imagen 7
  $wp_customize->add_setting('inicio_imagen7',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'inicio_imagen7' , array(
    'label' => __('Imagen Presentacion' , 'mksystem'),
    'section' => 'mksystem_inicio',
    'settings' => 'inicio_imagen7'
  )));

  //text area 7
   $wp_customize->add_setting('inicio_texto7',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('inicio_texto7',array(
    'label' => __('Texto Presentacion','mksystem'),
    'section' => 'mksystem_inicio',
    'setting' => 'inicio_texto7',
    'type'    => 'textarea'
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
  * ===================    Página servicios     ==============================
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
  * ========================== Pagina nosotros  ======================================
  *
  */
  $wp_customize->add_section(
        'mksystem_nosotros',
        array(
            'title' => __('Pagina nosotros', 'mksystem'),
            'priority' => 100
        )
    );
  
  // titulo 1
  $wp_customize->add_setting('nosotros_titulo1',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('nosotros_titulo1',array(
    'label' => __('Título 1','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_titulo1',
    'type'    => 'text'
  ));
  
  //text area 1
   $wp_customize->add_setting('nosotros_texto1',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('nosotros_texto1',array(
    'label' => __('Texto 1','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_texto1',
    'type'    => 'textarea'
  ));
  //imagen 1
  $wp_customize->add_setting('nosotros_imagen1',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_imagen1' , array(
    'label' => __('Imagen 1' , 'mksystem'),
    'section' => 'mksystem_nosotros',
    'settings' => 'nosotros_imagen1'
  )));

  // titulo 2
  $wp_customize->add_setting('nosotros_titulo2',array(
    'default' => __('','mksystem')
  ));
  
  $wp_customize->add_control('nosotros_titulo2',array(
    'label' => __('Título 2','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_titulo2',
    'type'    => 'text'
  ));
  
  //text area 2
   $wp_customize->add_setting('nosotros_texto2',array(
    'default' => __('','mksystem')
  ));
  $wp_customize->add_control('nosotros_texto2',array(
    'label' => __('Texto 2','mksystem'),
    'section' => 'mksystem_nosotros',
    'setting' => 'nosotros_texto2',
    'type'    => 'textarea'
  ));
  //imagen 2
  $wp_customize->add_setting('nosotros_imagen2',array(
    'default' => ''
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nosotros_imagen2' , array(
    'label' => __('Imagen 2' , 'mksystem'),
    'section' => 'mksystem_nosotros',
    'settings' => 'nosotros_imagen2'
  )));

  






}


add_action('customize_register','mksystem_customizer_register');


/**
 * slider main slider main FUNCIONA /llamado por index
 */
function devit_featured_slider() {
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