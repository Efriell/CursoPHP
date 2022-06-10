<?php

/**
*Clase Base del proyecto
*@author Mateo
*@version 1.0 junio de 2022
*@copyright Efriell s.a.s 
**/
require_once 'Vehiculo.php';
class Campero extends Vehiculo
{
    private int $capacidadCarga;

    public function __construct($numeroRuedas,$placa,$numeroPuertas,$tieneTraccion,$color,$capacidadCarga)
    {
        parent::__construct($numeroRuedas,$placa,$numeroPuertas,$tieneTraccion,$color);
        $this->capacidadCarga = $capacidadCarga;
    }

    public function mostrarCapacidadDeCarga()
    {
        return "La capacidad de carga es: ".$this->capacidadCarga;
    }
}

$willis = new Campero(2,"AFH-124",0,false,"Rojo",500);
echo $willis->mostrarColor();
echo "<br>";
echo $willis->mostrarCapacidadDeCarga();