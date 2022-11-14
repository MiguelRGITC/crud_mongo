<?php include "./header.php"; ?>
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

                        <h2>Agregar vehiculo</h2>
                        <hr>
                        <form action="./insertar.php" method="post">
                            <label for="tipo">Tipo de vehiculo</label>
                            <input type="text" class="form-control" id="vehiculo" name="vehiculo" required>
                            <label for="Marca">Marca del vehiculo</label>
                            <input type="text" class="form-control" id="marca" name="marca" required>
                            <label for="linea">linea del vehiculo</label>
                            <input type="text" class="form-control" id="linea" name="linea" required>
                            <label for="Modelo">Modelo de vehiculo</label>
                            <input type="int" class="form-control" id="Modelo" name="Modelo" required>
                            <label for="Color">Color de vehiculo</label>
                            <input type="text" class="form-control" id="color" name="color" required>
                            <label for="Precio">Precio de vehiculo</label>
                            <input type="double" class="form-control" id="Precio" name="Precio" required>
                            <hr>
                            <button class="btn btn-primary mt-3">
                                <i class="fa-solid fa-floppy-disk"></i> Guardar
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>