<?php
$servername = 'localhost';
$username = 'root';
$password = 'maria8221';
$dbname = 'academia';

// Crear la conexión a la BD
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobamos la conexión
if ($conn->connect_error) {
    die("Fallo en la conexión: " . $conn->connect_error);
}
echo "Conectado con éxito <br>";

?>
