<?php
session_start();

include 'conn.php';

$user_type = $_POST['user_type'];

$id = $_POST['id']; // esta variable la tomamos del documento login-usuario


if (isset($_POST['update'])) {
    $sql = "UPDATE empleados SET  user_type = '$user_type' WHERE  id = '$id'";
    echo  '<div class="container">
           <p>Datos actualizados<a href="info-admi.php"> 
        <br> <button>Volver</button>
        </a></p></div>';
}
//para poder eliminar un usuario debemos crear un delete donde se eliminara toda la info
if (isset($_POST['delete'])) {

    $sql = "DELETE FROM empleados WHERE id = '$id'";

    echo  '<div class="container">
    <p>Usuario eliminado<a href="info-admi.php"> 
    <br> <button>Volver</button>
    </a></p></div>';
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
    <title>LUSH</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



</body>

</html>