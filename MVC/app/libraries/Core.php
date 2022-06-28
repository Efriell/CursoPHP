<?php
/*
Clase base que arma las rutas del mvc
controlador/metodo/parametro
Ej: medico/crearFormulaMedica/$id
*/
class Core
{
    //setear los controladores, metodos, y parametros inciales del MVC
    protected $defaultController = 'Inicio';
    protected $defaultMethod = 'index';
    protected $parameters = [];
    public function __construct()
    {
        //construye la clase y setea la url del mvc
        $url = $this->getUrl();
        //1.0 verificamos si existe el controlador y lo invocamos
        if(file_exists('../app/controllers/'.ucwords($url[0].'.php'))){
            //seteamos como controlador el invocado en la url
            $this->defaultController = ucwords($url[0]);
            unset($url[0]);
        }
        //invocamos el controlador
        require_once '../app/controllers/'.$this->defaultController.'.php';
        $this->defaultController = new $this->defaultController;

        //2.0 invocamos el metodo correspondiente
        if(isset($url[1])){
            if(method_exists($this->defaultController,$url[1])){
                $this->defaultMethod = $url[1];
                unset($url[1]);
            }
        }
        //3.0 invocar los parametros que pasemos por la url
        $this->parameters = $url ? array_values($url) : []; //si existen parametros los extrae del arreglos
        //asigna los parametros usando la funcion callback
        call_user_func_array([$this->defaultController,$this->defaultMethod],$this->parameters); 
    }

    /*
    *toma la ruta de la url, la vuelve un arreglo y posteriormente en una
    *ruta abreviada
    * @return $url
    */
    public function getUrl(){
        $url = ""; //esta para almacenar la ruta abreviada
        if(isset($_GET['url'])){
            //separa la ruta por porciones de acuerdo al seperador en este caso '/'
            $url = rtrim($_GET['url'],'/');
            //sanitiza la ruta para asegurarse que sea una url
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
        return ['Inicio'];
    }
}