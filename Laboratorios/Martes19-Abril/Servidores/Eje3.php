<?php

$nombreDelFormulario = $_POST['nombre'];
$edadDelFormulario = $_POST['edad'];
$sexoDelFormulario = $_POST['sexo'];

if ($edadDelFormulario>=18 and $sexoDelFormulario==1){
    echo "El nombre ingresado en el formulario es: ".$nombreDelFormulario."<br>"."La edad de ".$nombreDelFormulario." es: ".$edadDelFormulario."<br>"."El sexo de ".$nombreDelFormulario." es: Masculino";
}