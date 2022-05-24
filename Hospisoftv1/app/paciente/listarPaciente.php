<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP

//Hacer el proceso de request - reponse

$sql = 'select * from `paciente`;';
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute();
$pacientes = $sentencia ->fetchAll(PDO::FETCH_OBJ); //Almacena el resultado de la consulta en formato OBJETO de PHP

/* echo '<pre>';
var_dump($resultado);
echo '</pre>';  */



?>