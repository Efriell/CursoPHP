<?php

class Inicio extends Controller{
    public function __construct()
    {
        
    }

    public function index(){
        $data=[];
        $this->getView('Inicio',$data);
    }
}