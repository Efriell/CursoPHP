<?php

/**
*Clase Base del proyecto
*@author Mateo
*@version 1.0 junio de 2022
*@copyright Efriell s.a.s 
**/
require_once 'Persona.php';
class PersonalContable extends Persona
{
    public function verActivos()
    {
        return "Activos: ";
    }
    public function mantenerPatrimonio()
    {
        return "Patrimonio.";
    }
    public function declararRenta()
    {
        return "Renta.";
    }
    public function verPasivos()
    {
        return "Pasivos: ";
    }
}