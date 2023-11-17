<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $num_envio = $_POST['num_envio'];
    $id_cliente = $_POST['cliente'];
    $id_producto = $_POST['producto'];
    $fecha_entrega = $_POST['fecha_entrega'];
    $repartidor = $_POST['repartidor'];
    $telefono = $_POST['telefono'];
    $gmail = $_POST['gmail'];
    
    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE pedido SET 
        id_producto = '$id_producto',
        id_cliente = '$id_cliente',
        fecha_entrega = '$fecha_entrega',
        repartidor = '$repartidor',
        telefono = '$telefono',
        num_envio = '$num_envio',
        gmail = '$gmail'
    WHERE id_pedido = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
