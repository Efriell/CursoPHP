<?php
//Comentario de una linea

/*
Comentario multilinea o bloque
Comentario multilinea o bloque
*/

//Definicion de variables y asignacion
$nombreCliente = "Juan Perez"; //Tipo cadena
$edadCliente = 18; //Tipo entero
$activo = true; //Tipo booleano
$deuda = 10.5; //Tipo double

$totalSuma;
$totalResta;
$totalMultiplicacion;
$totalDivision;
$totalResiduo;
$valor1 = 5;
$valor2 = 15;

$totalSuma = $valor1+$valor2;
$totalResta = $valor1-$valor2;
$totalMultiplicacion = $valor1*$valor2;
$totalDivision = $valor1/$valor2;
$totalResiduo = $valor1%$valor2;

//Salidas

echo $edadCliente;

//Concatenacion

echo "<br>".$nombreCliente.' '.$edadCliente;
echo "<br>"."El total de la suma es: ".$totalSuma;
echo "<br>"."El total de la resta es: ".$totalResta;
echo "<br>"."El total de la multiplicacion es: ".$totalMultiplicacion;
echo "<br>"."El total de la division es: ".$totalDivision;
echo "<br>"."El total del residuo es: ".$totalResiduo;

