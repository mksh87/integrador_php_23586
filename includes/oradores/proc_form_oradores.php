<?php

// Verificar si se recibieron datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conexión a la base de datos (ajusta los detalles de conexión)
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'integrador_cac';

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        exit('Conexión fallida: '.$conn->connect_error);
    }

    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tema = $_POST['tema'];
    $descripcion_tema = $_POST['descripcion_tema'];

    // Procesar la foto
    $fotoNombre = $_FILES['foto']['name'];
    $fotoTmpName = $_FILES['foto']['tmp_name'];
    $fotoSize = $_FILES['foto']['size'];
    $fotoError = $_FILES['foto']['error'];

    // Obtener la extensión del archivo
    $fotoExt = strtolower(pathinfo($fotoNombre, PATHINFO_EXTENSION));

    // Extensiones permitidas
    $extensionesPermitidas = ['jpg', 'jpeg', 'png'];

    // Verificar si la extensión está permitida
    if (in_array($fotoExt, $extensionesPermitidas)) {
        // Verificar el tamaño del archivo (500KB = 500 * 1024 bytes)
        if ($fotoSize <= 500 * 1024) {
            // Generar un nombre único para la foto
            $fotoNuevoNombre = uniqid('', true).'.'.$fotoExt;

            // Ruta donde se guardará la foto (ajusta la ruta según tu proyecto)
            $ruta = $_SERVER['DOCUMENT_ROOT'].'/cac_integrador_23586/uploads/'.$fotoNuevoNombre;

            // Mover la foto al directorio de uploads
            if (move_uploaded_file($fotoTmpName, $ruta)) {
                // Insertar datos en la tabla oradores
                $sql = "INSERT INTO oradores (nombre, apellido, tema, descripcion_tema, foto, aproved) VALUES ('$nombre', '$apellido', '$tema', '$descripcion_tema', '$fotoNuevoNombre', 1)";

                if ($conn->query($sql) === true) {
                    echo 'Datos ingresados correctamente.';
                } else {
                    echo 'Error al insertar datos: '.$sql.'<br>'.$conn->error;
                }
            } else {
                echo 'Hubo un error al subir el archivo en '.$ruta;
            }
        } else {
            echo 'El tamaño de la foto es demasiado grande. Debe ser menor a 500KB.';
        }
    } else {
        echo 'Formato de archivo no válido. Sube una imagen en formato JPG o PNG.';
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo 'Acceso denegado.';
}
