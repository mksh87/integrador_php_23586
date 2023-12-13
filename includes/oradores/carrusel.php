<?php

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

// Consulta para obtener los oradores
$sql = 'SELECT * FROM oradores WHERE aproved = 1'; // Selecciona solo oradores aprobados

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $counter = 0;
    while ($row = $result->fetch_assoc()) {
        if ($counter % 3 == 0) {
            // Abre un nuevo conjunto de filas (nuevo slide en el carrusel)
            echo '<div data-bs-interval="4000" class="carousel-item ';
            if ($counter == 0) {
                echo ' active';
            }
            echo '"><div class="row" style="display: flex; justify-content: space-evenly">';
        }
        // Muestra el contenido del orador en una tarjeta
        echo '<div class="col-md-4 mb-3">
                <div class="card">
                  <img src="./uploads/'.$row['foto'].'" class="img-fluid" alt="100%x280" />
                  <div class="card-body">
                    <h4 class="card-title">'.$row['nombre'].' '.$row['apellido'].'</h4>
                    <h5 class="card-title">'.$row['tema'].'</h5>
                    <p class="card-text">'.$row['descripcion_tema'].'</p>
                  </div>
                </div>
              </div>';

        ++$counter;

        if ($counter % 3 == 0) {
            // Cierra el conjunto de filas (slide) al mostrar tres oradores
            echo '</div></div>';
        }
    }

    // Verificar si quedan oradores que no formen parte de un slide completo
    if ($counter % 3 != 0) {
        echo '</div></div>';
    }
} else {
    echo 'No se encontraron oradores aprobados.';
}

// Cerrar la conexión
$conn->close();
