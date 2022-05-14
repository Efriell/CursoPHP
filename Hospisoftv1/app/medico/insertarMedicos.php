<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP

//Hacer el proceso de request - reponse

//Recibimos la data del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$especialidad = $_POST['especialidad'];

$sql = 'insert into medico (nombre_medico,apellidos_medico,email,especialidad) values (?,?,?,?);';
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute([$nombre,$apellido,$email,$especialidad]);

header('Location:../../medicos.php')


?>