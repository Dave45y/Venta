<?php
//Incluimos el archivo a la conexion de la base de datos
//-----../------- sale de un nivel de un lugar de donde estamos es como salir de la carpeta en la que esta el archivo
require "../Config/conexion.php";

//Creo la clase cliente
class Cliente{
    //Definimos un constructor
    //El constructor se va a ejecutar por primera vez al ejecutar la clase
    public function __construct(){

    }
    //Definimos un metodo para insertar un cliente a la base de datos
    public function insertar($nombre,$apellido,$tipo_documento,$num_documento,$dieccion,$telefono,$email){
        //Definimos una variable para almacenar la consulta
        $sql = "INSERT INTO cliente (nombre,apellido,tipo_documento,num_documento,dieccion,telefono,email)
        VALUES ($nombre,$apellido,$tipo_documento,$num_documento,$dieccion,$telefono,$email, '1')";
        //retornamos el resultado de la consulta
        return ejecutarConsulta($sql);



    }
    //Definimos un metodo para editar el cliente
    public function editar ($idcliente,$nombre,$apellido,$tipo_documento,$num_documento,$dieccion,$telefono,$email){
        //Definimos una variable para almacenar la consulta
        $sql = "UPDATE cliente SET nombre='$nombre', apellido='$apellido', tipo_documento='$tipo_documento', num_documento='$num_documento', dieccion='$dieccion', telefono='$telefono', email='$email'WHERE idcliente='$idcliente'";
        return ejecutarConsulta($sql);
    }

    //Definimos una funcion para activar unun cliente
    public function activar($idcliente){
        //Definimos una varible para almacenar la consulta
        $sql = "UPDATE cliente SET condicion = 1 WHERE idcliente = 'idcliente'";
        return ejecutarConsulta($sql);
    }
    //Definimos una funcion para desactivar el cliente
    public function desactivar($idcliente){
        //Definimos una varible para almacenar la consulta
        $sql = "UPDATE cliente SET condicion = 0 WHERE idcliente = '$idcliente'";
        //Retornamos la consulta
        return ejecutarConsulta($sql);
    }
    //Definimos una consulta para mostrar una fila de la base de datos 
    public function mostrar($idcliente){
        //DEfinimos una variable para almacenar la consulta
        $sql = "SELECT * FROM cliente WHERE idcliente = '$idcliente'";
        //Retornamos la consulta
        return ejecutarConsultaSimpleFila($sql)
    }
    //Definimos una funcion para listar los clientes
    public function listar(){
        //Definimos una variable donde se va a guardar la consulta
        $sql = "SELECT * FROM cliente";
        //Retornamos la consulta
        return ejeutarConsulta($sql);
        
    }
    //Definimos una funcion para listar los clientes activos
    public function select(){
        $sql = "SELECT * FROM cliente WHERE condicion = 1";
        //Retornamos la consulta
        return ejecutarConsulta($sql);
    }
}



?>