<?php
//Incluimos el archivo categoria.php
require_once "../Modelos/Categoria.php";
//Instanciamos la clase categoria
$categoria = new Categoria();

//Definimos una variable para almacenar el id categoria
$idcategoria=isset($_POST["idcategoria"]) ? limpiarCadena($_POST["idcategoria"]) : "";
//Definimos una varible para almacenar el nombre
$nombre = isset ($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) : "";

//Definimos una variable para almacenar la descripcion

$descripcion = isset ($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) : "";


//Generamos un switch para determinar la accion a realizar
switch ($_GET["op"]){
    case 'guardaryeditar':
        if(empty($idcategoria)){
            $rspta = $categoria->insertar($nombre,$descripcion);
            echo $rspta ? "Categoria registrada con exito" : "No se pudo registrar la categoria a la base de datos";
        }
        else{
            $rspta= $categoria->editar($idcategoria,$nombre,$descripcion);
            echo $rspta ? "Categoria editada con exito" :  "No se pudo editar la categoria";
        }
        break;
        //Si elijo la opcion desactivar ejecuta esta seccion del código
        case 'desactivar':
            $rspta = $categoria->desactivar($idcategoria);
            echo $rspta ? "Categoria desactivada" : "No se pudo desactivar";
            break;

        case 'activar':
            $rspta = $categoria->activar($idcategoria);
            echo $rspta ?"Categoria activada" : "No se pudo activar";
            break;

        case 'mostrar' :
            $rspta= $categoria->mostrar($idcategoria);
            //Convertir en resultado en json
            echo json_encode($rspta);
            break;
            // Creamos el caso listar
            case 'listar':
                $rspta =$categoria->listar();
                //vamos a declarar un array para guardar toda la información en el arreglo
                $data=Array();
                while($reg=$rspta->fecth_object()){
                    $data[]=array(
                        "0"=>$reg->idcategoria,
                        "1"=>$reg->nombre,
                        "2"=>$reg->descripcion,
                        "3"=>$reg->($reg->condicion)?'<span class="label bg-green">Activado</span>':
                        '<span class="label bg-red">Desactivado</span>',
                        "4"=>($reg->condicion)?'<button class="btn btn-warning" onclick="mostrar('.$reg->idcategoria.')"><i class="fa fa-pencil"></i></button>'.
                        ' <button class="btn btn-danger" onclick="desactivar('.$reg->idcategoria.')"><i class="fa fa-close"></i></button>':
                        ' <button class="btn btn-warning onclick="mostrar"('.$reg->idcategoria.')"><i class="fa fa-pencil"></i></button>'.
                        ' <button class="btn btn-primary" onclick="activar('.$reg->idcategoria.')"><i class="fa fa-check"></i></button>'
                    );
                }

                //Vamos a generar informacion sobre datatable

                $results=array(
                    "sEcho"=>1, //Informacion para el data table
                    "iTotalRecords"=>count($data) //enviamos el total de registros al data table
                    "iTotalDisplayRecords"=>($data) // enviamos el total de registros a visualizar
                    "aaData"=>$data);
                    echo json_encode($results);
                    break;
                
}









?>