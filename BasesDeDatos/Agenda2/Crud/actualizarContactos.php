<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP

//Hacer el proceso de request - reponse

//Recibimos la data del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$tele = $_POST['tele'];
$movil = $_POST['movil'];

$sql = "update contactos set Nombre=?, Apellidos=?, Email=?, Telefono1=?, Movil=? where Id={$id};";
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute([$nombre,$apellido,$email,$tele,$movil]);


header('Location:../index.php')


?>