<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

/* var_dump($nombre,$edad); */
echo json_encode($nombre,$edad); //Devuelve parseado en json