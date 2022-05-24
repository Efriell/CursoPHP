<?php
header('Location: index.php');
session_start();//Activa las variables de sesion
session_destroy();//Destruye el arreglo de variables de sesion
session_unset();//Crea el arreglo de variables de sesion vacio
