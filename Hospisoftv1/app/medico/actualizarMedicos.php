<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP

//Hacer el proceso de request - reponse

//Recibimos la data del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$especialidad = $_POST['especialidad'];

$sql = "update medico set nombreMedico=?, apellidosMedico=?, email=?, especialidad=? where idMedico={$id};";
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute([$nombre,$apellido,$email,$especialidad]);


header('Location:../../medicos.php')


?>