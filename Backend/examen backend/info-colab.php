<?php
session_start();

include 'conn.php';

$user = $_SESSION['id'];

if (isset($_SESSION['logged']) && $_SESSION['user_type'] == 'colaborador') {

    $sql = "SELECT * From empleados";

    $result = $conn->query($sql);
}

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

<?php

if ($result->num_rows > 0) {

    // Imprimimos los datos en una tabla

    echo    "<h1>Tus datos</h1>
    <table>
    <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>User_type</th>
    <th>Dni</th>
    <th>Biometrica</th>
    <th>N.mac</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        $apellido = $row['apellido'];
        $nombre = $row['nombre'];
        $user = $row['email'];
        $usertype = $row['user_type'];
        $dni = $row['dni'];
        $bio = $row['biometrica'];
        $mac = $row['n_mac'];


        echo " <tr>
    <form action='archivo-colab.php' method='post'>
    <td>
    <input type='text' placeholder='Nombre' name='nombre' value='$nombre'> <br>
    </td><td>
    <input type='text' placeholder='Apellido' name='apellido' value='$apellido'> <br>
    </td><td>
    <input type='text' placeholder='Email' readonly name='user' value='$user'> <br>
    </td><td>
    <input type='text' placeholder='Email' readonly name='user' value='$usertype'> <br>
    </td><td>
    <input type='text' placeholder='N.Dni' name='dni' value='$dni'> <br>
    </td><td>
    <input type='text' placeholder='Foto' name='biometrica' value='$bio'> <br>
    </td><td>
    <input type='text' placeholder='# Mac' name='n_mac' value='$mac'> <br>
    </td><td>
    <input class='button' type='submit' value='actualizar'>
    </td>
    </form>
 
</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Usuario no existe</p>";
}

mysqli_close($conn);
?>
   <a href="pag.principal.php"><input type="button" class="button" value='cerrar sesion'></a>

</body>

</html> 