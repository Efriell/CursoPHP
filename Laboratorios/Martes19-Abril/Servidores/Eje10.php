<?php

$numeroUnoDelFormulario = $_POST['numero'];
$porcentaje = ($numeroUnoDelFormulario/100)*5;

echo "El numero ingresado es: ".$numeroUnoDelFormulario." y "."el porcentaje del numero es: ".$porcentaje;