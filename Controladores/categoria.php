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
}









?>