<?php

/**
*Clase Base del proyecto
*@author Mateo
*@version 1.0 junio de 2022
*@copyright Efriell s.a.s 
**/
require_once 'Persona.php';
class Instructor extends Persona
{
    public function registrarInasistencias()
    {
        return "Se ha registrado la inasistencia del aprendiz: ";
    }
    public function evaluarEvidencias()
    {
        return "Evidencia # ha sido evaluada ";
    }
    public function cargarContenidoDelCurso()
    {
        return "Se ha cargado con éxito el contenido ";
    }
    public function enviarHoras()
    {
        return "Se han enviado las horas  ";
    }
}