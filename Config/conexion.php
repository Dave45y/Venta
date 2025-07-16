<?php
//Llamo al archivo global.php
require_once "global.php";
//Creo una variable de tipo conexion para
//Conectarme a la base de datos

// new = crear algo
$conexion = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
//creamos una varible para almacenar la conexion
mysqli_query($conexion,'SET NAMES"'.DB_ENCODE.'"');
// Verificamos si la conexion a la base de datos fue existosa
if(mysqli_connect_errno()){
    printf("Fallo la conexion a la base de datos: %s\n",mysql_connect_error());
    exit();
}else {
    printf("Conexion a la base de datos exitosa:
    %s\n",DB_NAME);
}

//Definimos un conjunto de funciones que nos ayude a la consuta de la base de datos
//!=no existe
if(!function_exists('ejecutarConsulta')){
    function ejecutarConsulta($sql){
        global $conexion;
        //creo una varible para almacenar el resultado de la consulta
        $query= $conexion->query($sql);
        //Retorno el resultado de la consulta
        return $query;
    }

    //Creo una funcion que me permita obtener una sola fila de una tabla
    //de la base de datos
    function ejecutarConsultaSimpleFila($sql){
        //Conectamos a la base de datos
        global $conexion;
        //Creo una variable  para almacenar el resultado de la consulta
        $query=$conexion->query($sql);

        //Obtengo una fila de la consulta
        $row=$query->fetch_assoc();
        //Retorno la fila obtenida
        return $row;
    }
    //Creo una funcion para obtener el id de una consulta o un registro
    function ejecutarConsulta_retornarID($sql){
        //Conectamos a la base de datosglobal
        global $conexion;
        //Creo una variable donde guardo la consulta
        $query = $conexion->$query($sql);
        return $conexion->insert_id;
        //Creamos una funcion para limpiar los campos de los imput
        function limpiarCadena($str){
            //Conectamos a la base de datos
            global $conexion;
            //Retornamos el valor del campo limpio
            $str =  mysqli_real__escape_string($conexion, trim($str));
            //Retornamos el valor
            return htmlspecialchars($str);
        }
    }
}







?>