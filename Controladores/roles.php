<?php
//Incluimos el archivo Roles.php
require_once "../Modelos/Roles.php";
//Instanciamos la clase roles
$roles = new Roles();

//Definimos una variable para almacenar el id roles
$idroles=isset($_POST["idroles"]) ? limpiarCadena($_POST["idroles"]) : "";
//Definimos una varible para almacenar el nombre
$nombre = isset ($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";

//Definimos una variable para almacenar la condicon

$condicon = isset ($_POST["condicon"]) ? limpiarCadena($_POST["condicon"]) : "";


//Generamos un switch para determinar la accion a realizar
switch ($_GET["op"]){
    case 'guardaryeditar':
        if(empty($idroles)){
            $rspta = $roles->insertar($nombre,$condicon);
            echo $rspta ? "Rol registrado con exito" : "No se pudo registrar el rol a la base de datos";
        }
        else{
            $rspta= $roles->editar($idroles,$nombre,$condicon);
            echo $rspta ? "Rol editado con exito" :  "No se pudo editar el rol";
        }
}









?>