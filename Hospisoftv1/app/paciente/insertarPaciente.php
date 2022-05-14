<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP

//Hacer el proceso de request - reponse

//Recibimos la data del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$clave = $_POST['clave'];

$sql = 'insert into medico (nombre_paciente,apellidos_paciente,email,clave) values (?,?,?,?);';
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute([$nombre,$apellido,$email,$clave]);

header('Location:../../pacientes.php')


?>