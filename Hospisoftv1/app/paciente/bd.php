<?php 
session_start(); //Activa la configuracion de arreglos para almacenar las sesiones
//Conexion a la BD de la forma clásica

//Usuario y clave de mysql
$usuario = 'root';
$password = '';

try{
    //Creamos el conector instanciando la clase PDO
    $pdo = new PDO('mysql:host=localhost;dbname=hospisoft',$usuario,$password); //Usamos la clase PDO con el conector mysql
    /* var_dump($pdo);
    echo '<br>';
    echo 'Conexion exitosa'; */
}catch(PDOException $e){
    echo 'Ha ocurrido un error en la conexion'; //Error para usuario final
    /* echo 'El error es: '.$e -> getMessage(); */ //Error para el programador
}


?>