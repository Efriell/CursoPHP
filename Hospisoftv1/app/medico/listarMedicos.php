<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP

//Hacer el proceso de request - reponse

$sql = 'select * from `medico`;';
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute();
$resultado = $sentencia ->fetchAll(PDO::FETCH_OBJ); //Almacena el resultado de la consulta en formato OBJETO de PHP

/* echo '<pre>';
var_dump($resultado);
echo '</pre>';  */



?>