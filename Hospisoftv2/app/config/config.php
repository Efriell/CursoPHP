<?php
/*
configuracion general del framework
constantes
*/

//DIRECTORIO RAIZ DEL FRAMEWORK
define('APPROOT',dirname(dirname(__FILE__)));
//echo APPROOT;
//URL DEL APLICATIVO
define('URLROUTE','http://localhost:8080/CursoPHP-master/MVC/');
//NOMBRE DE LA APLICACION
define('SITENAME','MICROFRAMEWORK MVC');
//CREDENCIALES PARA LA BASE DE DATOS
//FIXME: Cambiar a la forma nueva de hacer constantes const=
define('DB_HOST','localhost');//ojo: cambiarla en el deploy
define('DB_USER','root');//USUARIO DE LA BD
define('DB_PASSWORD','');//PASSWORD DE LA BD
define('DB_NAME','hospisoft');//NOMBRE DE LA BD A TRABAJAR