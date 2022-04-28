<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP

//Hacer el proceso de request - reponse

$sql = 'select * from `contactos`;';
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute();
$resultado = $sentencia ->fetchAll(); //Almacena el resultado de la consulta en formato array de PHP



?>