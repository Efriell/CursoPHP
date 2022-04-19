<?php

$nombreDelFormulario = $_POST['nombre'];
$apellidoDelFormulario = $_POST['apellido'];
$edadDelFormulario = $_POST['edad'];

echo "El nombre ingresado en el formulario es: ".$nombreDelFormulario.' '.$apellidoDelFormulario."<br>"."La edad de ".$nombreDelFormulario." es: ".$edadDelFormulario;
