<?php

$edad = 18;

//Clasica
if($edad<=17){
    echo "Eres menor de edad";
}else{
    echo "Eres mayor de edad";
}

//Ternario
echo "<br>";
var_dump($edad<=17);
echo "<br>";
echo $edad<=17 ? "Eres menor de edad": "Eres mayor de edad";
/*
    El simbolo '?' es la bifurcación TRUE, : es la bifurcacion FALSE
*/