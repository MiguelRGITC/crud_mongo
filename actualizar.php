<?php include "./header.php";
$id = $_POST['id'];
require_once "./Conexion.php";
require_once "./clases/crud.php";
$crud = new Crud();
$datos = $crud->obtenerDocumento($id);
$idMongo = $datos->_id;
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

                        <h2>Actualizar vehiculo</h2>
                        <hr>
                        <form action="./modificar.php" method="POST">
                            <input type="text" hidden value="<?php echo $idMongo?>" name="id">
                            <label for="tipo">Tipo de vehiculo</label>
                            <input type="text" class="form-control" id="vehiculo" name="vehiculo" value="<?php echo $datos->vehiculo ?>">
                            <label for="Marca">Marca del vehiculo</label>
                            <input type="text" class="form-control" id="Marca" name="marca" value="<?php echo $datos->marca ?>">
                            <label for="linea">linea del vehiculo</label>
                            <input type="text" class="form-control" id="linea" name="linea" value="<?php echo $datos->linea ?>">
                            <label for="Modelo">Modelo de vehiculo</label>
                            <input type="int" class="form-control" id="Modelo" name="Modelo" value="<?php echo $datos->Modelo ?>">
                            <label for="Color">Color de vehiculo</label>
                            <input type="text" class="form-control" id="Color" name="color" value="<?php echo $datos->color ?>">
                            <label for="Precio">Precio de vehiculo</label>
                            <input type="double" class="form-control" id="Precio" name="Precio" value="<?php echo $datos->Precio ?>">
                            <hr>
                            <button class="btn btn-warning mt-3">
                                <i class="fa-solid fa-floppy-disk"></i> Actualizar
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>