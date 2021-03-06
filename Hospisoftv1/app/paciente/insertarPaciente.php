<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP

//Hacer el proceso de request - reponse

//Recibimos la data del formulario
$nombre = filter_var(trim($_POST['nombre']),FILTER_DEFAULT);
$apellido =filter_var(trim($_POST['apellidos']),FILTER_DEFAULT);
$email =filter_var(trim($_POST['email']),FILTER_VALIDATE_EMAIL);
$telefono =filter_var(trim($_POST['telefono']),FILTER_DEFAULT);
$movil =filter_var(trim($_POST['movil']),FILTER_DEFAULT);
$fechaNac =filter_var(trim($_POST['fechaNac']),FILTER_DEFAULT);
$epsPaciente =filter_var(trim($_POST['epsPaciente']),FILTER_DEFAULT);
$usuarioPaciente =filter_var(trim($_POST['usuarioPaciente']),FILTER_DEFAULT);
$clave =password_hash(filter_var(trim($_POST['clave']),FILTER_DEFAULT),PASSWORD_DEFAULT);

$sql = 'insert into paciente (nombrePaciente,apellidosPaciente,email,telefono,movil,fechaNac,epsPaciente,usuarioPaciente,passwordPaciente) values (?,?,?,?,?,?,?,?,?);';
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute([$nombre,$apellido,$email,$telefono,$movil,$fechaNac,$epsPaciente,$usuarioPaciente,$clave]);

/* var_dump($sentencia->rowCount()); */
if($sentencia->rowCount()>=1){
    $_SESSION['tipo']="primary";
    $_SESSION['mensaje']="Operacion exitosa";
}else{
    $_SESSION['tipo']="danger";
    $_SESSION['mensaje']="Ha ocurrido un error en la inserción";
}


header('Location:../../frmRegistroPaciente.php')


?>