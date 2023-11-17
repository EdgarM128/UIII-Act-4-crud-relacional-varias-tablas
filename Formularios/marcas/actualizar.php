<?php
require_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">

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
                        <h5 class="card-title text-center">ACTUALIZAR CLIENTE</h5>
                        <form action="<?php echo base_url; ?>CRUDM/editarDatos.php" method="post">
                            <?php
                            include_once("../../config/conexion.php");

                            $sql = "SELECT * FROM cliente WHERE id_cliente =" . $_REQUEST['Id'];
                            $resultado = $conexion->query($sql);

                            $row = $resultado->fetch_assoc();
                            ?>
                            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $row['id_cliente'] ?>">
                            <div class="mb-3">
                                <label for="nom_cliente" class="form-label">Nombre del cliente</label>
                                <input type="text" class="form-control" id="nom_cliente" name="nom_cliente" placeholder="Nombre del cliente" value="<?php echo $row['nom_cliente'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="tipo_tarjeta" class="form-label">Tipo de tarjeta</label>
                                <input type="text" class="form-control" id="tipo_tarjeta" name="tipo_tarjeta" placeholder="Tipo de Tarjeta" value="<?php echo $row['tipo_tarjeta'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pago" class="form-label">Pago</label>
                                <input type="text" class="form-control" id="pago" name="pago" placeholder="Pago" value="<?php echo $row['pago'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="calle" class="form-label">Calle</label>
                                <input type="text" class="form-control" id="calle" name="calle" placeholder="Nombre de la calle" value="<?php echo $row['calle'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="ciudad" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Nombre de la ciudad" value="<?php echo $row['ciudad'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pais" class="form-label">Pais</label>
                                <input type="text" class="form-control" id="pais" name="pais" placeholder="Pais" value="<?php echo $row['pais'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="num_exterior" class="form-label">Numero exterior</label>
                                <input type="text" class="form-control" id="num_exterior" name="num_exterior" placeholder="Numero de la casa exterior" value="<?php echo $row['num_exterior'] ?>">
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

</body>

</html>