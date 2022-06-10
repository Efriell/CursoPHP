<?php

/**
*Clase Base del proyecto
*@author Mateo
*@version 1.0 junio de 2022
*@copyright Efriell s.a.s 
**/

class Vehiculo
{
    //atributos de la clase
    //tenga en cuenta la visibilidad de los atributos
    public int $numeroRuedas;
    private string $placa;
    protected int $numeroPuertas;
    private bool $tieneTraccion;
    public static string $color; //el vehiculo tiene traccion en las 4 ruedas (true or false)
     

    //métodos de la clase 


    //método mágico para crear la clase - metodo constructor (setter)
    public function __construct($numeroRuedas,$placa,$numeroPuertas,$tieneTraccion,$color)
    {
        $this->numeroRuedas = $numeroRuedas;            
        $this->placa = $placa;            
        $this->numeroPuertas = $numeroPuertas;
        $this->numeroPuertas = $numeroPuertas;
        $this->tieneTraccion = $tieneTraccion;
        self::$color = $color;
    }

    //metodo getter
    //return string
    public function mostrarPlaca()
    {
        return "La placa de su vehiculo es: ".$this->placa;
    }

    //retorna bool
    public function mostrarEstadoTraccion()
    {
        if(!$this->tieneTraccion){
            return "No tiene traccion";
        }
        else{
            return "Tiene traccion";
        }
    }

    public function mostrarColor()
    {
        return "El color del vehiculo es: ".self::$color;
    }
    

    //estilo tradicional de java
   /*  public function getNumeroRuedas()
    {
        return $this->numeroRuedas;
    }

    /**
     * Set the value of numeroRuedas
     *
     * @return  self
     */ 
    /* public function setNumeroRuedas($numeroRuedas)
    {
        $this->numeroRuedas = $numeroRuedas;

        return $this;
    } */
}
//fin de la clase
/* $suzuki = new Vehiculo(4,"BDK-892",2,true);
$mazda3 = new Vehiculo(4,"QDG-125",4,false);
$bws = new Vehiculo(4,"AGS-43G",0,false);
var_dump($suzuki);  */

/* $moto = new Vehiculo(2,"AFH-124",0,false,"Azul");

echo $moto->mostrarColor(); */



