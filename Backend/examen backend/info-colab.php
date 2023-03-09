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
<div class="container">
<?php

if ($result->num_rows > 0) {

    // Imprimimos los datos en una tabla

    echo    "<h1>Hola colaborador</h1>
    <table>
    <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>User_type</th>
    <th>Dni</th>
    <th>Biometrica</th>
    <th>N.mac</th>
    </tr>";

// creamos las variables
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $apellido = $row['apellido'];
        $nombre = $row['nombre'];
        $user = $row['email'];
        $usertype = $row['user_type'];
        $dni = $row['dni'];
        $bio = $row['biometrica'];
        $mac = $row['n_mac'];
        $estado = $row['estado']; 

        $estado1 = 'ok';
        $estado2 = 'pe';
        $estado3 = 'nd';

        if ( $estado != 'admin' ) {      
            $estado1 = 'ok';
            $estado2 = 'pe';
            $estado3 = 'nd';

        }

        $fila = '<tr>';

        if ($row['estado'] == 'ok' ) {
            $fila = '<tr style=background-color: green; >';
        }
        if ($row['estado'] == 'pe' ) {
            $fila = '<tr style=background-color: yellow; >';
        }
        if ($row['estado'] == 'nd' ) {
            $fila = '<tr style=background-color: red; >';
        }

// incorporamos  el contenido de la tabla
        echo " <tr>
    <form action='archivo-colab.php' method='post'>
    <td>
    
    <input type='text' placeholder='Id' readonly name='id' value='$id'> <br>    
    </td><td>    
    <input type='text' placeholder='Nombre' readonly name='nombre' value='$nombre'> <br>
    </td><td>
    <input type='text' placeholder='Apellido' readonly name='apellido' value='$apellido'> <br>
    </td><td>
    <input type='text' placeholder='Email' readonly name='user' value='$user'> <br>
    </td><td>
    <input type='text' placeholder='Email' readonly name='user_type' value='$usertype'> <br>
    </td><td>
    <input type='text' placeholder='N.Dni'readonly name='dni' value='$dni'> <br>
    </td><td>
    <input type='text' placeholder='Foto' readonlyname='biometrica' value='$bio'> <br>
    </td><td>
    <input type='text' placeholder='# Mac'readonly name='n_mac' value='$mac'> <br>
    </td><td>
    <select  name='estado'>
            <option value='$estado1'>$estado1</option>
            <option value=' $estado2'>$estado2</option>
            <option value=' $estado3'> $estado3</option>
    </select>
            </td><td>
    <input type='submit' class='button'name='update' value='Actualizar'>
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
   <a href="pag.principal.php"><input type="button" class="button" value='Inicio'></a>
   </div>
</body>

</html> 