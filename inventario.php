<?php
require_once "./Conexion.php";
require_once "./clases/crud.php";
$crud= new Crud();
$datos= $crud->mostrarDatos(); 
?>

<!DOCTYPE html>
<html lang="en">
<?php include "./header.php"; ?>
<link rel="stylesheet" href="./recursos/estilosInventario.css">
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">
                        <h2>Inventario de vehiculos</h2>
                        <a href="./agregar.php" class="btn btn-primary">
                            <i class="fa-solid fa-user-plus"></i> Agregar un vehiculo
                        </a>
                        <a href="./index.php" class="btn btn-danger">
                            <i class="fa-solid fa-house"></i> Salir
                        </a>
                        <hr>
                        <table class="table table-sm table-hover table-bordered">
                            <thead>
                                <th>Tipo de vehiculo</th>
                                <th>Marca</th>
                                <th>Linea</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th>Precio</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($datos as $item){
                                
                                ?>
                                <tr>
                                    <td> <?php echo $item->vehiculo; ?> </td>
                                    <td> <?php echo $item->marca; ?> </td>
                                    <td> <?php echo $item->linea; ?> </td>
                                    <td> <?php echo $item->Modelo; ?> </td>
                                    <td> <?php echo $item->color; ?> </td>
                                    <td> <?php echo $item->Precio; ?> </td>
                                    <td>
                                        <form action="actualizar.php" method="POST">
                                        <input type="text" hidden value="<?php echo $item->_id?>" name="id">
                                            <button class="btn btn-warning"><i class="fa-solid fa-user-pen"></i>Editar</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="./eliminar.php" method="POST">
                                            <input type="text" hidden value="<?php echo $item->_id?>" name="id">
                                            <button class="btn btn-danger"><i class="fa-solid fa-user-xmark"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>