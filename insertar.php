<?php
require_once "./Conexion.php";
require_once "./clases/crud.php";
$crud= new Crud();

$datos = array(
    "vehiculo" => $_POST['vehiculo'],
    "marca" => $_POST['marca'],
    "linea" => $_POST['linea'],
    "Modelo" => $_POST['Modelo'],
    "color" => $_POST['color'],
    "Precio" => $_POST['Precio'],
);

$respuesta = $crud->insertarDatos($datos);

if ($respuesta->getInsertedId()>0) {
    header("Location:http://localhost/crud_mongo/inventario.php ");
}else {
    print_r($respuesta);
}
?>
