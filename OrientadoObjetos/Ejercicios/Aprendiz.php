<?php

/**
*Clase Base del proyecto
*@author Mateo
*@version 1.0 junio de 2022
*@copyright Efriell s.a.s 
**/
require_once 'Persona.php';
class Aprendiz extends Persona
{
    public function consultarNotas()
    {
        return "Sus notas son: ";
    }
    public function inscripcionCurso()
    {
        return "Se ha inscrito al curso! ";
    }
    public function cancelacionInscripcion()
    {
        return "Se ha cancelado con éxito la inscripcion ";
    }
    public function cancelarRegistroCurso()
    {
        return "Se ha realizado su cancelación al curso! ";
    }
    public function cargarEvidencias()
    {
        return "Se ha cargado con éxito la evidencia! ";
    }
    public function consultarCertificaciones()
    {
        return "Sus certificados son: ";
    }
    public function consultarInscripciones()
    {
        return "Su inscripciones son: ";
    }
    public function registroEnSistema()
    {
        return "Se ha registrado con en el sistema con éxito! ";
    }
}