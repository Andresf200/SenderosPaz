<?php
//Configuración de acceso a la base de datos
define('DB_HOST', 'localhost');
define('DB_USUARIO', 'root');
define('DB_PASSWORD', '');
define('DB_NOMBRE', 'senderos');
define('DB_CHARSET', 'utf8');
define('DB_PORT', 3306);
//Ruta de la aplicación
define('RUTA_APP', dirname(dirname(__FILE__)));

//Ruta url ejemplo :http//localhost/render2web_mvc/
//Rutas externas dedicadas al direccionamiento de la aplicación
define('RUTA_URL', 'http://localhost:/SenderosPaz/');
define('DIRECTORIO','C:\\xampp\\htdocs\\SenderosPaz\\public\\UploadImagenes\\');
define('RUTA_PUBLIC', dirname(dirname(dirname(__FILE__))). '\public\ ');
define('SITIO', 'MVC');
