<?php

include 'conn.php';
// creamos las variables con los datos que pedimos en el formulario
$user = $_POST['user'];
$clave = $_POST['clave'];

// en insert intro van el encabezado que estan en la base de datos ejemp: email y clave

$sql = "INSERT INTO usuarios (email,clave)
     VALUES ('$user','$clave')";

     
// ejecutamos la query y comprobamos si ha sido exitosa

if($conn->query($sql) === TRUE) {
    echo 'Datos guardados con exito';
} else { echo "error: ".$sql . "<br>" .$conn->error;

}

// creamos la conxion con la base de datos
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

    <p>Bienvenido, <?php echo $_POST['user']; ?> </p>

</body>
</html>