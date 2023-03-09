<?php
session_start();

include 'conn.php';

$user = $_POST['user'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$bio = $_POST['biometrica'];
$mac = $_POST['n_mac'];
$id = $_SESSION['id']; 

// usamos el update para indicar que el usuario quiere actualizar sus datos y estos datos nuevos quedaran 
//guardados en el ID.

$sql = "UPDATE empleados SET email = '$user', clave = '$clave', nombre = '$nombre', apellido = '$apellido', dni = '$dni',
 biometrica = '$bio', n_mac ='$mac' WHERE  id = '$id'";
$result = $conn->query($sql);

// ejecutamos la query y comprobamos si ha sido exitosa

if ($conn->query($sql)) {

    $_SESSION['user_type'] = $user;
} else {
    echo "error: " . $sql . "<br>" . $conn->error;

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUSH</title>
</head>

<body>
<div class="container">
        <p>Datos actualizados
            <?php echo $_POST['user'];
            echo  ' <a href="info-usuario.php"> <br>
    <button>Volver</button>
        </a>'; ?></p>

    </div>
</body>

</html>  