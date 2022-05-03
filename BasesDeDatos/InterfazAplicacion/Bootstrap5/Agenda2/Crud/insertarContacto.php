<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP

//Hacer el proceso de request - reponse

//Recibimos la data del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$tele = $_POST['tele'];
$movil = $_POST['movil'];

$sql = 'insert into contactos (Nombre,Apellidos,Email,Telefono1,Movil,Activo) values (?,?,?,?,?,0);';
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute([$nombre,$apellido,$email,$tele,$movil]);

header('Location:../index.php')


?>