<?php
//Incluimos el archivo Cliente.php
require_once "../Modelos/Cliente.php";
//Instanciamos la clase cliente
$cliente = new Cliente();

//Definimos una variable para almacenar el id cliente
$idcliente=isset($_POST["idcliente"]) ? limpiarCadena($_POST["idcliente"]) : "";
//Definimos una varible para almacenar el nombre
$nombre = isset ($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";

//Definimos una variable para almacenar el apellido

$condicon = isset ($_POST["apellido"]) ? limpiarCadena($_POST["apellido"]) : "";

//Definimos una variable para almacenar el tipo_documento

$condicon = isset ($_POST["tipo_documento"]) ? limpiarCadena($_POST["tipo_documento"]) : "";

//Definimos una variable para almacenar el tipo_documento

$condicon = isset ($_POST["tipo_documento"]) ? limpiarCadena($_POST["tipo_documento"]) : "";




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
        break;
        //Si elijo la opcion desactivar ejecuta esta seccion del código
        case 'desactivar':
            $rspta = $roles->desactivar($idroles);
            echo $rspta ? "Rol desactivado" : "No se pudo desactivar";
            break;

        case 'activar':
            $rspta = $roles->activar($idroles);
            echo $rspta ?"Rol activado" : "No se pudo activar";
            break;

        case 'mostrar' :
            $rspta= $roles->mostrar($idroles);
            //Convertir en resultado en json
            echo json_encode($rspta);
            break;
}









?>