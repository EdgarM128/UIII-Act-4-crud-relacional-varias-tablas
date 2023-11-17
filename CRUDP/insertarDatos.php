<?php

include "../config/conexion.php";

$num_envio = $_POST['num_envio'];
$id_cliente = $_POST['cliente'];
$id_producto = $_POST['producto'];
$fecha_entrega = $_POST['fecha_entrega'];
$repartidor = $_POST['repartidor'];
$telefono = $_POST['telefono'];
$gmail = $_POST['gmail'];

$sql = "INSERT INTO pedido(
    id_pedido,
    id_producto,
    id_cliente,
    fecha_entrega,
    repartidor,
    telefono,
    num_envio,
    gmail
) VALUES (
    null,
    '$id_producto',
    '$id_cliente',
    '$fecha_entrega',
    '$repartidor',        
    '$telefono',
    '$num_envio',
    '$gmail'
)";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
