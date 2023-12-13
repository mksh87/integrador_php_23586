<?php

// Verificar si se han enviado los datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recuperar los valores del formulario
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conectar a la base de datos
    $servername = 'localhost'; // Cambiar si es necesario
    $username = 'root';
    $password_db = '';
    $dbname = 'integrador_cac';

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        exit('Conexión fallida: '.$conn->connect_error);
    }

    // Consulta SQL para verificar el usuario y la contraseña
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario encontrado, verificar la contraseña
        $row = $result->fetch_assoc();
        $hashed_password = $row['password_hash'];

        if (password_verify($password, $hashed_password)) {
            // Iniciar sesión y redirigir a la página principal
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email; // Puedes almacenar otros datos de usuario en la sesión si es necesario

            $ruta = '../../index.php';
            header("Location: $ruta");
            exit;
        } else {
            // Contraseña incorrecta
            header('Location: login.html?error=Contraseña incorrecta');
            exit;
        }
    } else {
        // Usuario no encontrado
        header('Location: login.html?error=Usuario no encontrado');
        exit;
    }

    $conn->close();
}
