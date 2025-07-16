<?php
//Incluimos el archivo a la conexion de la base de datos
//-----../------- sale de un nivel de un lugar de donde estamos es como salir de la carpeta en la que esta el archivo
require "../Config/conexion.php";

//Creo la clase categoria
class Categoria{
    //Definimos un constructor
    //El constructor se va a ejecutar por primera vez al ejecutar la clase
    public function __construct(){

    }
    //Definimos un metodo para insertar una categoria a la base de datos
    public function insertar($nombre,$descripcion){
        //Definimos una variable para almacenar la consulta
        $sql = "INSERT INTO categoria (nombre,descripcion,condicion) VALUES ('$nombre', '$descripcion', 1)";
        //retornamos el resultado de la consulta
        return ejecutarConsulta($sql);



    }
    //Definimos un metodo para editar la categoria
    public function editar ($idcategoria,$nombre,$descripcion){
        //Definimos una variable para almacenar la consulta
        $sql = "UPDATE categoria SET nombre='$nombre', descripcion='$descripcion'WHERE idcategoria='$idcategoria'";
        return ejecutarConsulta($sql);
    }

    //Definimos una funcion para activar una categoria
    public function activar($idcategoria){
        //Definimos una varible para almacenar la consulta
        $sql = "UPDATE categoria SET condicion = 1 WHERE idcategoria = 'idcategoria'";
        return ejecutarConsulta($sql);
    }
    //Definimos una funcion para desactivar la categoria
    public function desactivar($idcategoria){
        //Definimos una varible para almacenar la consulta
        $sql = "UPDATE categoria SET condicion = 0 WHERE idcategoria = '$idcategoria'";
        //Retornamos la consulta
        return ejecutarConsulta($sql);
    }
    //Definimos una consulta para mostrar una fila de la base de datos 
    public function mostrar($idcategoria){
        //DEfinimos una variable para almacenar la consulta
        $sql = "SELECT * FROM categoria WHERE idcategoria = '$idcategoria'";
        //Retornamos la consulta
        return ejecutarConsultaSimpleFila($sql);
    }
    //Definimos una funcion para listar las categorias
    public function listar(){
        //Definimos una variable donde se va a guardar la consulta
        $sql = "SELECT * FROM categoria";
        //Retornamos la consulta
        return ejeutarConsulta($sql);
        
    }
    //Definimos una funcion para listar las categorias activas
    public function select(){
        $sql = "SELECT * FROM categoria WHERE condicion = 1";
        //Retornamos la consulta
        return ejecutarConsulta($sql);
    }
}



?>