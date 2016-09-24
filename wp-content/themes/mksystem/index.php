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
    <div class="container">
        <div class="row">
            <?php mksystem_featured_slider(); ?>
        </div><!--.row-->
    </div><!--.container-->
</div>	

        <div id="primary" class="content-area col-sm-12 col-md-12">
                <main id="main" class="site-main" role="main">

                   <h2 class="texto-evento1 text-center">Organizacion de Eventos</h2>
                   <h5 class="texto-evento2 text-center">Nuestro servicio de catering ofrece propuestas especificas para la realización de eventos de empresa.Nos adaptamos a la necesidad del cliente</h5>


                </main><!-- #main -->
        </div><!-- #primary -->
<?php get_template_part( 'content', 'pgeventos' ); ?>
<?php get_template_part( 'content', 'pgeventos2' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>