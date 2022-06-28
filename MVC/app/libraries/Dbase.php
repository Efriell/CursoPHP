<?php
/*
clase base para manipular el gestor de base de datos
ORM Basico
*/
class Dbase{
    
private $host = DB_HOST;
private $user = DB_USER;
private $password = DB_PASSWORD;
private $bdatos = DB_NAME;

private $dbh; //para almacenar la conexion
private $stmt; //para los resultados de los querys statements
private $error; //para los errores


//hacemos la conexion
public function __construct()
{
    //FIXME: agregar opciones de mysql
    //dsn = almacenamos la ruta
    $dsn = "mysql:host=".$this->host.";dbname=".$this->bdatos;
    try {
        $this->dbh = new PDO($dsn,$this->user,$this->password);
    } catch (PDOException $e) {
        $this->error = $e->getMessage();
        echo "Se ha generado un error en la conexion: ".$this->error;
    }
}

//metodo para parametrizar las consultas
/*  le deben llegar 3 parametros: 
    el parametro, el valor adjunto y el tipo de parametro
    @return parametro
*/

public function bind($parameter,$value,$type=null){
    if(is_null($type)){
        switch(true){
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
                default:
                $type = PDO::PARAM_STR;
                break;
            }
        }
        $this->stmt->bindValue($parameter,$value,$type);
    }

//procesar las consultas y aplicar el prepare
public function query($sql){
    $this->stmt = $this->dbh->prepare($sql);
}

//ejecuta la consulta
public function execute(){
    return $this->stmt->execute();
}

//ejecuta la consulta y devuelve un arreglo de objetos
public function getAll(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
}

//ejecuta la consulta y devuelve una fila del arreglo
public function getOne(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
}

//para la paginación se necesita contar el número de registros de la consulta
public function rowCount(){
    $this->execute();
    return $this->stmt->rowCount();
}

}