<?php

session_start();

include 'conn.php';

// con las variables que tenemos agregamos una nueva variable 'ID' que es la que nos permitira
// guardar los datos nuevos cuando se realice el cambio
$estado = $_POST['estado']; 
$id = $_POST['id'];

if (isset($_POST['update'])) {
    $sql = "UPDATE empleados SET estado = '$estado'  WHERE  id ='$id'";
    $result = $conn->query($sql);
}
// if ($conn->query($sql)) {

//     $_SESSION['id'] = $user;
    
// }else {
//     echo "error: " . $sql . "<br>" . $conn->error;

//     $conn->close();
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="stylesheet" href="style.css">
    </head>

<body>

    <div class="container">

        <p>Datos actualizados 
            <?php 
            // echo $_POST['user'];
            echo  '<a href="info-colab.php"> 
            <br><button>Volver</button>
            </a>'; ?></p>

    </div>

</body>

</html>