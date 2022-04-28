# Proyecto agenda

Name Database: Agenda
Name Table: Contactos

Contactos
id autoincrementable integer
Nombre varchar(200)
Apellidos varchar(250)
Email varchar(200)
Telefono1 varchar(100)
Movil varchar(100)
Activo boolean

OJO: El boolean se transforma en un tinyint(1), donde true(1) y false(0)

## Conexion a la base de datos

PHP tiene varias clases predeterminadas para manejar conexiones con BASES DE DATOS

CLASE 1: mysqli() //Only mysql
CLASE 2: PDO() //Universal PHP DATA OBJECTS

## require, include, require_once, include_once

Todos incluyen un archivo externo, la diferencia esta en el manejo de errores. Si hay un error grave 'include' rompe o aborta la carga normal del programa.
El require genera el error pero permite la carga del aplicativo

## Patron de diseño Front_Controller

En el diseño del aplicativo tengo una sola "puerta de entrada" a las funcionalidades.