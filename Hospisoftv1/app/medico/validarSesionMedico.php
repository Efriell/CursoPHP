<?php
require_once 'bd.php';

$idMedico = filter_var($_POST['idMedico'],FILTER_SANITIZE_NUMBER_INT);
$password = filter_var($_POST['passwordMedico'],FILTER_DEFAULT);

/* echo "<pre>";
var_dump($usuario,$password);
echo "</pre>"; */

$sql = 'select * from medico where idMedico=?';
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute([$idMedico]);
$medico = $sentencia->fetchAll(PDO::FETCH_OBJ);

//Validamos usuario y paciente
//VALIDACION BASADA EN EL EMAIL CON VALIDACION
foreach ($medico as $datos) {
    if(!password_verify($password,$datos->passwordMedico)){
        header('Location:../../index.php');
    }else{
        $_SESSION['idMedico'] = $datos->idPaciente;
        $_SESSION['usuarioActivo'] = $datos->nombreMedico.' '.$datos->apellidosMedico;
        header('Location:../../panelMedico.php');
    }
}
