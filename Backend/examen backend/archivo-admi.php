<?php
session_start();

include 'conn.php';

$user_type = $_POST['user_type'];

$id = $_POST['id']; // esta variable la tomamos del documento login-usuario


if (isset($_POST['update'])) {
    $sql = "UPDATE empleados SET  user_type = '$user_type' WHERE  id = '$id'";
    echo  '<div class="login-box">
           <p>Datos actualizados<a href="info-admi.php"> 
        <br> <button>Volver</button>
        </a></p></div>';
}
//para poder eliminar un usuario debemos crear un delete donde se eliminara toda la info
if (isset($_POST['delete'])) {

    $sql = "DELETE FROM empleados WHERE id = '$id'";

    echo  '<div class="login-box">
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