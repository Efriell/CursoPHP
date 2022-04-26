<?php

$numeroUnoDelFormulario = $_POST['numero'];
$numeroDosDelFormulario = $_POST['numero2'];

if ($numeroUnoDelFormulario!=0 and $numeroDosDelFormulario!=0){
    echo $numeroUnoDelFormulario."<br>".$numeroDosDelFormulario;
}