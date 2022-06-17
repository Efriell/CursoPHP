<?php

class Medico extends Controller{
    public function __construct()
    {
        
    }

    public function index(){
        $data=[];
        $this->getView('Medico',$data);
    }

    public function generarFormula(){
        echo 'este es el metodo generar formula del medico';
    }
}