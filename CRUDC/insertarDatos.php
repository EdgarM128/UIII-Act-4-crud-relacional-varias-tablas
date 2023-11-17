<?php

include "../config/conexion.php";

$nom_producto = $_POST['nom_producto'];
$descripcion = $_POST['descripcion'];
$desarolladora = $_POST['desarolladora'];
$fecha_salida = $_POST['fecha_salida'];
$edi_fisicas = $_POST['edi_fisicas'];
$tip_prod = $_POST['tip_prod'];
$precio = $_POST['precio'];

$sql = "INSERT INTO productos(
        id_producto,
        nom_producto,
        descripcion,
        desarolladora,
        fecha_salida,
        edi_fisicas,
        tip_prod,
        precio
    )
    VALUES (
        null,
        '$nom_producto',
        '$descripcion',
        '$desarolladora',
        '$fecha_salida',
        '$edi_fisicas',
        '$tip_prod',
        '$precio' 
)";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
