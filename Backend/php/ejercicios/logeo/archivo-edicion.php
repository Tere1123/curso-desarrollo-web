<?php
session_start();

include 'conn.php';
// con las variables que tenemos agregamos una nueva variable 'ID' que es la que nos permitira
// guardar los datos nuevos cuando se realice el cambio
$user = $_POST['user'];
$clave = $_POST['clave'];
$id = $_SESSION['username']; // esta variable la tomamos del documento login-usuario

// usamos el update para indicar que el usuario quiere actualizar sus datos y estos datos nuevos quedaran 
//guardados en el ID.

$sql = "UPDATE usuarios SET email = '$user', clave = '$clave'  WHERE  email = '$id'";
// $result = $conn->query($sql);
// ejecutamos la query y comprobamos si ha sido exitosa

if($conn->query($sql) ) {

    $_SESSION['username'] = $user;
    echo 'Actualizar datos';
    echo '<button><a href="pag-principal.php"></a> Salir</button>';
  
} else { echo "error: ".$sql . "<br>" .$conn->error;

}


$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>

<body>

    <p>Datos actualizados, <?php echo $_POST['user']; ?></p>
     <!-- <button><a href="pag-principal.php"></a> Salir</button> -->

</body>
</html>