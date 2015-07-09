<?php
/**
* Configuración básica de WordPress.
* Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
* claves secretas, idioma de WordPress y ABSPATH. Para obtener más información.
*/

/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'l6000089_posthis');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'l6000089_posthis');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'daTUki63di');

/** Host de MySQL */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. */
define('DB_COLLATE', '');

/** Claves únicas de autentificación. */
define('AUTH_KEY', 'EEsHOAnFqTqhsAA2ZEbVK7AixsNSvGk0Ty5ZsPdbrC9');
define('SECURE_AUTH_KEY', 'G0mOP4TkY5cVIO2yPm9MVsVv42c95Y7QjWxDGaD4UdTqzqpk');
define('LOGGED_IN_KEY', 'dkZj9TA34AJbTA2qTgq2eX30VdS9u0PRv8ge4YxSMfN6wiYxIR');
define('NONCE_KEY', 'MAYC099QEa2uckox44vESsBXdddA26jNUKMOOONy3vOhMp90SW');
define('AUTH_SALT', '8iUZtYWXh3EcZU50aSgfv7STpQPAD9iFJOUXjpppBVwNM');
define('SECURE_AUTH_SALT', 'Kk2YJCciWahprmp6Z8npiB6w2QFniqbUFwFbZy7dSBcW90owjI');
define('LOGGED_IN_SALT', 'XfToiXQYEEkBaQEZWRjMI03yvZk0bGihTBBQXKcJ95SYxtq24');
define('NONCE_SALT', '5G9OGIXN6EkJUFnAri2pZTKzrYRKjFz5RiHpvf9QiN9ImFAt');


/** Idioma de WordPress. */
define ('WPLANG', 'es_ES');

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

if (!defined('WP_TEMP_DIR')) {
    define('WP_TEMP_DIR', dirname(__FILE__) . '/tmp');
}
?>
