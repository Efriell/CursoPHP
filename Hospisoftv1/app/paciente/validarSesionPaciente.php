<?php
require_once 'bd.php';

$usuario = filter_var($_POST['usuario'],FILTER_DEFAULT);
$password = filter_var($_POST['password'],FILTER_DEFAULT);

/* echo "<pre>";
var_dump($usuario,$password);
echo "</pre>"; */

$sql = 'select * from paciente where usuarioPaciente=?';
$sentencia = $pdo -> prepare($sql); //Preparar la consulta
$sentencia -> execute([$usuario]);
$paciente = $sentencia->fetchAll(PDO::FETCH_OBJ);

//Validamos usuario y paciente
//VALIDACION BASADA EN EL EMAIL CON VALIDACION
foreach ($paciente as $i) {
    if(!password_verify($password,$i->passwordPaciente)){
        header('Location:../../index.php');
    }else{
        header('Location:../../panel.php');
        $_SESSION['usuarioActivo'] = $i->usuarioPaciente;
    }
}
