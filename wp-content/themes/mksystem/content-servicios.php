<?php
/**
 * The template used for displaying page content in page-servicios.php
 *
 * @package dazzling
 */
?>

content servicio
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header page-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>

    </header><!-- .entry-header -->






 <div class="gServiciosBox">
        <hr class="gSeparator gSeparatorTrans gSeparator35">
        
        <div class="gFondoGrisClaro content-block ">
            <div class="row">   
                    <?php if(get_theme_mod('servicios_imagen1','') != ''): ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="" src="<?= get_theme_mod('servicios_imagen1',''); ?>">
                    </div>
                    <?php endif; ?>
                
                    <?php if(get_theme_mod('servicios_imagen1','') != ''): ?>
                    <?php $class_block = 'col-md-6 col-sm-6'; ?>
                    <?php else: ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php endif; ?>
                
                    <div class="<?= $class_block ?> col-xs-12 text-justify">
                        <?php if(get_theme_mod('servicios_titulo1','') != ''): ?>
                        <h2 style="color:black;"><?= get_theme_mod('servicios_titulo1');?></h2>
                        <hr class="gSeparator gSeparatorTrans gSeparator10">
                        <?php endif; ?>
                        <?php if(get_theme_mod('servicios_texto1','') != ''): ?>
                        <div class="gLineHeight25 gPadding0-10"><?= get_theme_mod('servicios_texto1'); ?> </div>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
        <hr>
        <div class="gFondoBlanco content-block">
            <div class="row">
                
                    <?php if(get_theme_mod('servicios_imagen1','') != ''): ?>
                    <?php $class_block = 'col-md-6 col-sm-6'; ?>
                    <?php else: ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php endif; ?>
                
                    <div class="<?= $class_block ?>  col-xs-12 text-justify">
                        <?php if(get_theme_mod('servicios_titulo2','') != ''): ?>
                        <h2 style="color: black;"><?= get_theme_mod('servicios_titulo2');?></h2>
                        <hr class="gSeparator gSeparatorTrans gSeparator10">
                        <?php endif; ?>
                        <?php if(get_theme_mod('servicios_texto2','') != ''): ?>
                        <div class="gLineHeight25 gPadding0-10"> <?= get_theme_mod('servicios_texto2'); ?></div>
                         <?php endif; ?>
                    </div>
                    <?php if(get_theme_mod('servicios_imagen2','') != ''): ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img class="" src="<?= get_theme_mod('servicios_imagen2',''); ?>">
                    </div>
                    <?php endif; ?>
            </div>
        </div>
<hr>
        <div class="gFondoGrisClaro content-block">
            <div class="row">
                   <?php if(get_theme_mod('servicios_imagen3','') != ''): ?>
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <img class="" src="<?= get_theme_mod('servicios_imagen3',''); ?>">
                    </div>
                    <?php endif; ?>
                
                    <?php if(get_theme_mod('servicios_imagen3','') != ''): ?>
                    <?php $class_block = 'col-md-6 col-sm-6'; ?>
                    <?php else: ?>
                    <?php $class_block = 'col-md-12 col-sm-12'; ?>
                    <?php endif; ?>
                    <?php if(get_theme_mod('servicios_titulo3','') != ''): ?>
                
                    <div class=" <?= $class_block ?> col-xs-12 text-justify">
                        <h2 style="color:black;"><?= get_theme_mod('servicios_titulo3');?></h2>
                        <hr class="gSeparator gSeparatorTrans gSeparator10">
                         <?php endif; ?>
                        <?php if(get_theme_mod('servicios_texto3','') != ''): ?>
                        <div class="gLineHeight25 gPadding0-10"><?= get_theme_mod('servicios_texto3'); ?>  </div>
                       <?php endif; ?>
                    </div>
                
            </div>
        </div>
    </div>  
    
    
    


</article><!-- #post-## -->