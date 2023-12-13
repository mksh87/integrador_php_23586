<?php

// Conexión a la base de datos (reemplaza con tus propios datos)
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'integrador_cac';

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si se han enviado datos por el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verificar que las contraseñas coincidan
    if ($_POST['password'] !== $_POST['confirmar_password']) {
        echo 'Las contraseñas no coinciden';
        exit; // Detener la ejecución si las contraseñas no coinciden
    }

    // Verificar la conexión
    if ($conn->connect_error) {
        exit('Conexión fallida: '.$conn->connect_error);
    }

    // Recuperar y almacenar datos del formulario
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashear la contraseña
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['fecha_nacimiento']))); // Convertir a formato YYYY/MM/DD

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO users (email, password_hash, nombre, apellido, fecha_nacimiento) 
        VALUES ('$email', '$password', '$nombre', '$apellido', '$fecha_nacimiento')";

    if ($conn->query($sql) === true) {
        echo '<p>Registro exitoso. Puedes ingresar haciendo clic <a href="../login/login.php">AQUI</a>.</p>';
    } else {
        echo 'Error: '.$sql.'<br>'.$conn->error;
    }
}
$conn->close();
