<?php

//Recibimos la variable
$opcion = 3;

//Estructura Switch
switch ($opcion){
    case '1':
        echo "Ordenaste un Perro Caliente";
        break;
    case '2':
        echo "Ordenaste una Pizza";
        break;
    case '3':
        echo "Ordenaste una Hamburguesa";
        break;
    case '4':
        echo "Ordenaste una Gaseosa";
        break;
    case '5':
        echo "Ordenaste una Empanada";
        break;
    default:
        echo "Eliga una opción del menú válida!!";
        break;
}

echo "<br>";