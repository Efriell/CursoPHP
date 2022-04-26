<?php

$numeroUnoDelFormulario = $_POST['numero'];
$numeroDosDelFormulario = $_POST['numero2'];
$suma = $numeroUnoDelFormulario+$numeroDosDelFormulario;

echo "Los numeros ingresados fueron: ".$numeroUnoDelFormulario." y ".$numeroDosDelFormulario."<br>"."La suma de los dos numeros es: ".$suma;