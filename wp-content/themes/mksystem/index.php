<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dazzling
 */

get_header(); ?>


        <div class="top-section">
        <!--slider creado-->
		<?php devit_featured_slider(); ?>
		<!-- sin funcionalidad-->
		<?php dazzling_call_for_action(); ?>
        </div>

  





<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header page-header">
        <h1 class="entry-title">Organizacion de Eventos</h1>

    </header><!-- .entry-header -->










 <div class="gServiciosBox">
        <hr class="gSeparator gSeparatorTrans gSeparator35">
        
        <div class="gFondoGrisClaro content-block ">
            <div class="row">   
                    <?php if(get_theme_mod('inicio_imagen1','') != ''): ?>
	                    <div class="col-sm-4 col-md-4">
	                    	<h2 style="color:black;"><?= get_theme_mod('inicio_titulo1');?></h2>
	                        <img class="" src="<?= get_theme_mod('inicio_imagen1',''); ?>">
	                    </div>
                    <?php endif; ?>
                    <?php if(get_theme_mod('inicio_imagen2','') != ''): ?>
	                    <div class="col-sm-4 col-md-4">
	                    	<h2 style="color:black;"><?= get_theme_mod('inicio_titulo2');?></h2>
	                        <img class="" src="<?= get_theme_mod('inicio_imagen2',''); ?>">
	                    </div>
                    <?php endif; ?>
                    <?php if(get_theme_mod('inicio_imagen3','') != ''): ?>
	                    <div class="col-sm-4 col-md-4">
	                    	<h2 style="color:black;"><?= get_theme_mod('inicio_titulo3');?></h2>
	                        <img class="" src="<?= get_theme_mod('inicio_imagen3',''); ?>">
	                    </div>
                    <?php endif; ?>
                

            </div>
        </div>
        <div class="gFondoBlanco content-block">
            <div class="row">   
                    <?php if(get_theme_mod('inicio_imagen4','') != ''): ?>
	                    <div class="col-sm-4 col-md-4">
	                    	<h2 style="color:black;"><?= get_theme_mod('inicio_titulo4');?></h2>
	                        <img class="" src="<?= get_theme_mod('inicio_imagen4',''); ?>">
	                    </div>
                    <?php endif; ?>
                    <?php if(get_theme_mod('inicio_imagen5','') != ''): ?>
	                    <div class="col-sm-4 col-md-4">
	                    	<h2 style="color:black;"><?= get_theme_mod('inicio_titulo5');?></h2>
	                        <img class="" src="<?= get_theme_mod('inicio_imagen5',''); ?>">
	                    </div>
                    <?php endif; ?>
                    <?php if(get_theme_mod('inicio_imagen6','') != ''): ?>
	                    <div class="col-sm-4 col-md-4">
	                    	<h2 style="color:black;"><?= get_theme_mod('inicio_titulo6');?></h2>
	                        <img class="" src="<?= get_theme_mod('inicio_imagen6',''); ?>">
	                    </div>
                    <?php endif; ?>
                

            </div>
        </div>

    </div>  
    
    
    


</article><!-- #post-## -->

   






        	<div class="col-md-12 ">
        	<div class="mk-eventos2" >
	        	<div class="mk-img2 col-sm-6">
                    	<h2 style="color:black;"><?= get_theme_mod('inicio_titulo7');?></h2>
                        <img class="" src="<?= get_theme_mod('inicio_imagen7',''); ?>">
	        	</div>

	        	<div class="col-md-6">


                   <h2 class="text-event1">
                   	<?= get_theme_mod('inicio_titulo7');?>
                   </h2>
                   <h5 class="text-event2">
						<?= get_theme_mod('inicio_texto7');?>
                   </h5>

	        	
	        	</div>
        	</div>
	        </div>













<?php get_footer(); ?>