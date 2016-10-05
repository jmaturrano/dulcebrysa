<?php
/**
 * mksystem functions and definitions
 *
 * @package  mksystem
 */


/**
 * Mk system slider
 */
function mksystem_featured_slider() {
    // if ( is_front_page() && of_get_option('dazzling_slider_checkbox') == 1 ) {
      echo '<div class="flexslider">';
        echo '<ul class="slides">';

          $count = of_get_option('dazzling_slide_number');
          $slidecat = of_get_option('dazzling_slide_categories');

            if ( $count && $slidecat ) {
            $query = new WP_Query( array( 'cat' => $slidecat, 'posts_per_page' => $count ) );
//            print_r($query);
            if ($query->have_posts()) :
              while ($query->have_posts()) : $query->the_post();

              echo '<li>';
                if ( has_post_thumbnail() ) { // Check if the post has a featured image assigned to it.
                  the_post_thumbnail();
                }

                echo '<div class="flex-caption">';
                  echo '<a href="'. get_permalink() .'">';
                    if ( get_the_title() != '' ) echo '<h2 class="entry-title">'. get_the_title().'</h2>';
                    if ( get_the_excerpt() != '' ) echo '<div class="excerpt">' . get_the_excerpt() .'</div>';
                  echo '</a>';
                echo '</div>';

                endwhile;
              endif;

            } else {
                echo "Slider is not properly configured";
            }

            echo '</li>';
        echo '</ul>';
      echo ' </div>';
    // }
}
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


}


add_action('customize_register','mksystem_customizer_register');
