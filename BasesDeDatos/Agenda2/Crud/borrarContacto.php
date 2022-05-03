<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP

//Hacer el proceso de request - reponse

//Recibimos la data del formulario
$id = $_GET['id'];

$sql = "delete from contactos where Id={$id};";
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute();


header('Location:../index.php')


?>