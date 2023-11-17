<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nom_cliente = $_POST['nom_cliente'];
    $tipo_tarjeta = $_POST['tipo_tarjeta'];
    $pago = $_POST['pago'];
    $calle = $_POST['calle'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $num_exterior = $_POST['num_exterior'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE cliente SET 
        nom_cliente = '$nom_cliente',
        tipo_tarjeta = '$tipo_tarjeta',
        pago = '$pago',
        calle = '$calle',
        ciudad = '$ciudad',
        pais = '$pais',
        num_exterior = '$num_exterior'
    WHERE id_cliente = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/marcas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
