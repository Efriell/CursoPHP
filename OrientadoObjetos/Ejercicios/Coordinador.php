<?php

/**
*Clase Base del proyecto
*@author Mateo
*@version 1.0 junio de 2022
*@copyright Efriell s.a.s 
**/
require_once 'Persona.php';
class Coordinador extends Persona
{
    private string $area;
    public function __construct($area)
    {
        $this->area = $area;
    }
    public function organizarHorarios()
    {
        return "Se han enviado los horarios ";
    }
    public function contratarInstructores()
    {
        return "Contratado! ";
    }
    public function desercionAprendiz()
    {
        return "Se ha realizado la desercion con éxito! ";
    }
    public function registrarDesercion()
    {
        return "Se ha registrado la desercion del aprendiz #  ";
    }
}