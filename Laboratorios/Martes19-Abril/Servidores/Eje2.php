<?php

$nombreDelFormulario = $_POST['nombre'];
$edadDelFormulario = $_POST['edad'];

if ($edadDelFormulario>=18){
    echo "El nombre ingresado en el formulario es: ".$nombreDelFormulario."<br>"."La edad de ".$nombreDelFormulario." es: ".$edadDelFormulario;
}else{
    echo "Eres menor de edad, NO puedes usar esta app";
}