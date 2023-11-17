<?php

include "../config/conexion.php";

$nom_cliente = $_POST['nom_cliente'];
$tipo_tarjeta = $_POST['tipo_tarjeta'];
$pago = $_POST['pago'];
$calle = $_POST['calle'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];
$num_exterior = $_POST['num_exterior'];

$sql = "INSERT INTO cliente(
    id_cliente,
    nom_cliente,
    tipo_tarjeta,
    pago,
    calle,
    ciudad,
    pais,
    num_exterior
) VALUES (
    null,
    '$nom_cliente',
    '$tipo_tarjeta',
    '$pago',
    '$calle',
    '$ciudad',
    '$pais',
    '$num_exterior'
)";


$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
