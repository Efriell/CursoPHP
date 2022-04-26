<?php

//Bandera
$edadMateo = 17;
echo "La edad de Mateo es: ".$edadMateo."<br>";
$edadEfren = 20;
echo "La edad de Efren es: ".$edadEfren."<br>";
//Decision simple

if ($edadMateo<18){
    echo "Mateo es menor de edad"."<br>";
}

if ($edadEfren<18){
    echo "Efren es menor de edad"."<br>";
}

//Decision compuesta

if ($edadMateo<20){
    echo "Mateo es menor de edad"."<br>";
} else {
    echo "Mateo es mayor de edad"."<br>";
}

if ($edadEfren<20){
    echo "Efren es menor de edad"."<br>";
} else {
    echo "Efren es mayor de edad"."<br>";
}
