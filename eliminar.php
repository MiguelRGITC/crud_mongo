<?php include "./header.php";
$id = $_POST['id'];
require_once "./Conexion.php";
require_once "./clases/crud.php";
$crud = new Crud();
$datos = $crud->obtenerDocumento($id);
?>
<link rel="stylesheet" href="./recursos/estilosInventario.css">

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body">

                        <a href="./inventario.php" class="btn btn-outline-info">
                            <i class="fa-solid fa-backward"></i> Regresar
                        </a>
                        <a href="./index.php" class="btn btn-danger">
                            <i class="fa-solid fa-house"></i> Salir
                        </a>

                        <h2>Eliminar vehiculo</h2>
                        <hr>
                        <table class="table table sm table-bordered">
                            <thead>
                                <th>Tipo de vehiculo</th>
                                <th>Marca</th>
                                <th>Linea</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th>Precio</th>

                            </thead>
                            <tbody>
                                <tr>
                                    <td> <?php echo $datos->vehiculo; ?> </td>
                                    <td> <?php echo $datos->marca; ?> </td>
                                    <td> <?php echo $datos->linea; ?> </td>
                                    <td> <?php echo $datos->Modelo; ?> </td>
                                    <td> <?php echo $datos->color; ?> </td>
                                    <td> <?php echo $datos->Precio; ?> </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="alert alert-danger" role="alert">
                            ¿Esta seguro que desea eliminar el vehiculo?
                        </div>
                        <form action="./borrar.php" method="POST">
                            <input type="text" name="id" value="<?php echo $datos->_id ?>" hidden >
                            <button class="btn btn-danger">
                                <i class="fa-solid fa-user-xmark"></i> Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>