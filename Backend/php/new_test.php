<?php
$servername = 'localhost' ;
$username = 'root';
$password = 'academia';
$dbname = 'academia';

// Crear la conexión a la BD
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobamos la conexión
if ($conn->connect_error) {
    die("Fallo en la conexión: " . $conn->connect_error);
}
echo "Conectado con éxito <br>";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRUEBA DE PHP</title>
</head>
<body>
   <h1>prueba de php</h1>
</body>
</html>