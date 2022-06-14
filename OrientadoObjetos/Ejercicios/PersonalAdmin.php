<?php

/**
*Clase Base del proyecto
*@author Mateo
*@version 1.0 junio de 2022
*@copyright Efriell s.a.s 
**/
require_once 'Persona.php';
class PersonalAdministrativo extends Persona
{
    public function registrarPersonas()
    {
        return 'Se ha registrado el personal "x" ';
    }
    public function modificarInformacion()
    {
        return 'Se ha modificado la informacion del personal "x" ';
    }
    public function verInformacion()
    {
        return 'Informacion del personal "x"';
    }
}