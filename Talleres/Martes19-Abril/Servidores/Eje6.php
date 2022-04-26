<?php

$numeroUnoDelFormulario = $_POST['numero'];
$numeroDosDelFormulario = $_POST['numero2'];
$numeroTresDelFormulario = $_POST['numero3'];

if ($numeroUnoDelFormulario>0){
    echo $numeroUnoDelFormulario."<br>";
}

if ($numeroDosDelFormulario>0){
    echo $numeroDosDelFormulario."<br>";
}

if ($numeroTresDelFormulario>0){
    echo $numeroTresDelFormulario."<br>";
}


