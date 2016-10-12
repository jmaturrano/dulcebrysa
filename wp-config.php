<?php
$abspath	=	str_replace(array('\dulcebrysa', '/dulcebrysa'),'/wp-config',ABSPATH);
include($abspath.'/server.php');
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', $server['database']['dulcebrysa']);

/** Tu nombre de usuario de MySQL */
define('DB_USER', $server['main']['user']);

/** Tu contraseña de MySQL */
define('DB_PASSWORD', $server['main']['pass']);

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', $server['main']['host']);

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');



/** Lenguaje de wordpress **/
define('WPLANG', 'es_PE');
/** Revisiones de POSTS **/
define('WP_POST_REVISIONS', 5);
/** Auto guardado de POSTS **/
define('WP_POST_REVISIONS', false);
/** Guardar las consultas en una constante **/
define('SAVEQUERIES', true );
/** Desactivar las actualizaciones automáticas **/
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);
/** Desactivar el editor de temas y plugins **/
define('DISALLOW_FILE_EDIT', true);
/** Desactivar la instalación de temas y plugins **/
//define('DISALLOW_FILE_MODS', true);
/** No usar las versiones minificadas **/
define('CONCATENATE_SCRIPTS', false);


/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'VybId&@3vLFXrQc98l-pJ<a,WE%,Oi%K`uH%=>g{&Y[__Ms9(RE?(3$uz??PIl)%');
define('SECURE_AUTH_KEY', 'B8[geU3q?$g7F<hao_}g?iWCIB[|rv:oGYpSSU4}Q2c~fIGDqw5MM{H/6e}r*au*');
define('LOGGED_IN_KEY', 'IMui!yvNjP.]t9JU-CzVM~AZk[bUZC)%}m}#jVeltaFrJ65w0$:fGE}hQur;z~k ');
define('NONCE_KEY', '[BF&Jbl~(Wgx:.f=;B_>Ap@p)3H<E- p)U9V*l=~ygG-RZ[%;0+xu{@RZ8eydt4m');
define('AUTH_SALT', 'UNBJU<ffyos~(!JADFI5[IG:!(.e0w|7]&jrAa85NG:5>/c=r7%xYB)=.%q9O,yK');
define('SECURE_AUTH_SALT', 'c,WM{q854BYO2r7kTI{w3kM)I:#OLOL7he.0:<{;K{nA,Bu|acs-GmMX-<u@>dwL');
define('LOGGED_IN_SALT', '+ya8i66^dnx//yUnW!NTj]xizla>y&8-u17`,DU#^:M,_nezMHRbdjf>)HO(rJ3b');
define('NONCE_SALT', 'I:^=Rp+<-PJeaz`iJFCi22=24WS KxuKLt`quaC2_>#1iIV^(yo9UqaOc4Y!]<Lo');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

