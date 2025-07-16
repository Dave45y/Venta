<?php
//Incluimos el archivo a la conexion de la base de datos
//-----../------- sale de un nivel de un lugar de donde estamos es como salir de la carpeta en la que esta el archivo
require "../Config/conexion.php";

//Creo la clase Roles
class Roles{
    //Definimos un constructor
    //El constructor se va a ejecutar por primera vez al ejecutar la clase
    public function __construct(){

    }
    //Definimos un metodo para insertar un rol a la base de datos
    public function insertar($nombre,$condicon){
        //Definimos una variable para almacenar la consulta
        $sql = "INSERT INTO roles (nombre,condicon)
        VALUES ($nombre, $condicon, 1)";
        //retornamos el resultado de la consulta
        return ejecutarConsulta($sql);



    }
    //Definimos un metodo para editar el rol
    public function editar ($idroles,$nombre,$condicon){
        //Definimos una variable para almacenar la consulta
        $sql = "UPDATE roles SET nombre='$nombre', condicon='$condicon'WHERE idroles='$idroles'";
        return ejecutarConsulta($sql);
    }

    //Definimos una funcion para activar un rol
    public function activar($idroles){
        //Definimos una varible para almacenar la consulta
        $sql = "UPDATE roles SET condicion = 1 WHERE idroles = 'idroles'";
        return ejecutarConsulta($sql);
    }
    //Definimos una funcion para desactivar el rol
    public function desactivar($idroles){
        //Definimos una varible para almacenar la consulta
        $sql = "UPDATE roles SET condicion = 0 WHERE idroles = '$idroles'";
        //Retornamos la consulta
        return ejecutarConsulta($sql);
    }
    //Definimos una consulta para mostrar una fila de la base de datos 
    public function mostrar($idroles){
        //DEfinimos una variable para almacenar la consulta
        $sql = "SELECT * FROM roles WHERE idroles = '$idroles'";
        //Retornamos la consulta
        return ejecutarConsultaSimpleFila($sql)
    }
    //Definimos una funcion para listar los roles
    public function listar(){
        //Definimos una variable donde se va a guardar la consulta
        $sql = "SELECT * FROM roles";
        //Retornamos la consulta
        return ejeutarConsulta($sql);
        
    }
    //Definimos una funcion para listar los roles activos
    public function select(){
        $sql = "SELECT * FROM roles WHERE condicion = 1";
        //Retornamos la consulta
        return ejecutarConsulta($sql);
    }
}



?>