<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PEDIDOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">CLIENTES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR PEDIDO</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM pedido WHERE id_pedido =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id_pedido'] ?>">

                            <!-- TRAER DATOS CATEGORIAS -->
                            <div class="mb-3">
                                <label for="num_envio" class="form-label">Numero de envio</label>
                                <input type="text" class="form-control" id="num_envio" name="num_envio" placeholder="Numero de envio" value="<?php echo $row['num_envio'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="marcasU" class="form-label">CLIENTE</label>
                                <select class="form-select form-select-lg" name="cliente" id="cliente">
                                    <option selected disabled>Seleccione un Cliente</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql3 = "SELECT * FROM cliente WHERE id_cliente=" . $row['id_cliente'];
                                    $resultado3 = $conexion->query($sql3);

                                    $row3 = $resultado3->fetch_assoc();

                                    echo "<option selected value='" . $row3['id_cliente'] . "'>" . $row3['nom_cliente'] . "</option>";

                                    $sql4 = "SELECT * FROM cliente";
                                    $resultado4 = $conexion->query($sql4);

                                    while ($fila = $resultado4->fetch_array()) {
                                        if ($fila['id_cliente'] !== $row3['id_cliente']) {
                                            echo "<option value='" . $fila['id_cliente'] . "'>" . $fila['nom_cliente'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="marcasU" class="form-label">Producto</label>
                                <select class="form-select form-select-lg" name="producto" id="producto">
                                    <option selected disabled>Seleccione un producto</option>
                                    <?php
                                    include_once("../../config/conexion.php");

                                    $sql3 = "SELECT * FROM productos WHERE id_producto=" . $row['id_producto'];
                                    $resultado3 = $conexion->query($sql3);

                                    $row1 = $resultado3->fetch_assoc();

                                    echo "<option selected value='" . $row1['id_producto'] . "'>" . $row1['nom_producto'] . "</option>";

                                    $sql4 = "SELECT * FROM productos";
                                    $resultado4 = $conexion->query($sql4);

                                    while ($fila = $resultado4->fetch_array()) {
                                        if ($fila['id_producto'] !== $row1['id_producto']) {
                                            echo "<option value='" . $fila['id_producto'] . "'>" . $fila['nom_producto'] . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="repartidor" class="form-label">Repartidor</label>
                                <input type="text" class="form-control" id="repartidor" name="repartidor" placeholder="Nombre del repartidor" value="<?php echo $row['repartidor'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="fecha_entrega" class="form-label">Fecha de entrega</label>
                                <input type="date" class="form-control" name="fecha_entrega" id="fecha_entrega" placeholder="Fecha de entrega" value="<?php echo $row['fecha_entrega'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="telefono" value="<?php echo $row['telefono'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="gmail" class="form-label">Gmail</label>
                                <input type="text" class="form-control" name="gmail" id="gmail" placeholder="gmail" value="<?php echo $row['gmail'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>