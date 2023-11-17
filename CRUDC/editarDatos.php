<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $nom_producto = $_POST['nom_producto'];
    $descripcion = $_POST['descripcion'];
    $desarolladora = $_POST['desarolladora'];
    $fecha_salida = $_POST['fecha_salida'];
    $edi_fisicas = $_POST['edi_fisicas'];
    $tip_prod = $_POST['tip_prod'];
    $precio = $_POST['precio'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE productos SET 
        nom_producto = '$nom_producto',
        descripcion = '$descripcion',
        desarolladora = '$desarolladora',
        fecha_salida = '$fecha_salida',
        edi_fisicas = '$edi_fisicas',
        tip_prod = '$tip_prod',
        precio = '$precio' 
    WHERE id_producto = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
