<?php

//Por defecto
$frutas = ["Manzana","Pera","Banano","Piña"];
//Impresion del arreglo
echo "<hr>";
echo "<pre>";
var_dump($frutas);
echo "<hr>";
print_r($frutas);
echo "</pre>";
echo "<hr>";

//Asociativo
echo "<br>";
echo "<hr>";
$equipos = [
    "n1" => "Millonarios",
    "n2" => 89,
    "c4" => 8.67,
    "estado" => true
];

echo "<pre>";
var_dump($equipos);
echo "</pre>";
echo "<hr>";

//Posicion especifica
echo "<br>";
echo "<hr>";
echo $equipos["c4"];
echo "<hr>";
echo $frutas[3].' '.$equipos["c4"];
echo "<hr>";

//Recorrer el array
echo "<br>";
echo "<hr>";
foreach($equipos as $i){
    echo $i;
    echo "<br>";
}
echo "<hr>";
