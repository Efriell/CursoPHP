<?php 

require_once 'bd.php'; //Incluyo la cadena de conexion PHP
/* error_reporting(E_ALL); */ //Activa el despliegue de errores para programador

//Hacer el proceso de request - reponse

//Recibimos la data del formulario y validamos
$fecha = filter_var($_POST['fechaCita'],FILTER_DEFAULT);
$hora =filter_var($_POST['horaCita'],FILTER_DEFAULT);
$idMedico =filter_var($_POST['medico'],FILTER_DEFAULT);
$motivo =filter_var(trim($_POST['motivoCita']),FILTER_DEFAULT);
$idPaciente =filter_var($_POST['idPaciente'],FILTER_DEFAULT);

$sql = 'insert into agenda (fecha,hora,idMedico,motivo,idPaciente) values (?,?,?,?,?);';
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute([$fecha,$hora,$idMedico,$motivo,$idPaciente]);

/* var_dump($sentencia->rowCount()); */
if($sentencia->rowCount()>=1){
    $_SESSION['tipo']="primary";
    $_SESSION['mensaje']="Cita Agendada!";
}else{
    $_SESSION['tipo']="danger";
    $_SESSION['mensaje']="No es posible registrar la cita, agenda ocupada";
}


header('Location:../../frmAgendarMedico.php')


?>