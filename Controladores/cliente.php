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

$apellido = isset ($_POST["apellido"]) ? limpiarCadena($_POST["apellido"]) : "";

//Definimos una variable para almacenar el tipo_documento

$tipo_documento = isset ($_POST["tipo_documento"]) ? limpiarCadena($_POST["tipo_documento"]) : "";

//Definimos una variable para almacenar el num_documento

$num_documento = isset ($_POST["num_documento"]) ? limpiarCadena($_POST["num_documento"]) : "";

//Definimos una variable para almacenar el dieccion

$dieccion = isset ($_POST["dieccion"]) ? limpiarCadena($_POST["dieccion"]) : "";

//Definimos una variable para almacenar el telefono

$telefono = isset ($_POST["telefono"]) ? limpiarCadena($_POST["telefono"]) : "";

//Definimos una variable para almacenar el email

$email = isset ($_POST["email"]) ? limpiarCadena($_POST["email"]) : "";




//Generamos un switch para determinar la accion a realizar
switch ($_GET["op"]){
    case 'guardaryeditar':
        if(empty($idcliente)){
            $rspta = $cliente->insertar($nombre,$apellido,$tipo_documento,$num_documento,$dieccion,$telefono,$email);
            echo $rspta ? "cliente registrado con exito" : "No se pudo registrar el cliente a la base de datos";
        }
        else{
            $rspta= $roles->editar($idcliente,$nombre,$apellido,$tipo_documento,$num_documento,$dieccion,$telefono,$email);
            echo $rspta ? "Cliente editado con exito" :  "No se pudo editar el cliente";
        }
        break;
        //Si elijo la opcion desactivar ejecuta esta seccion del código
        case 'desactivar':
            $rspta = $cliente->desactivar($idcliente);
            echo $rspta ? "cliente desactivado" : "No se pudo desactivar";
            break;

        case 'activar':
            $rspta = $cliente->activar($idcliente);
            echo $rspta ?"cliente activado" : "No se pudo activar";
            break;

        case 'mostrar' :
            $rspta= $cliente->mostrar($idcliente);
            //Convertir en resultado en json
            echo json_encode($rspta);
            break;
}









?>