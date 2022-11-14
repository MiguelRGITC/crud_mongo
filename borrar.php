<?php 
require_once "./Conexion.php";
require_once "./clases/crud.php";
$crud= new Crud();
$id = $_POST['id'];

$respuesta = $crud->eliminar($id);

if ($respuesta->getDeletedCount()>0) {
    header("location: http://localhost/crud_mongo/inventario.php");
} else {
        print_r($respuesta);
    }



?>