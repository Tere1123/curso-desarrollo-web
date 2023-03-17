<?php

session_start();

include 'conn.php';

$user = $_SESSION['id'];

$sql = "SELECT * From empleados WHERE id = '$user'";

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUSH</title>
    <link rel="stylesheet" href="style-colab.css">
</head>

<body>
<?php require "header.php"; ?>
    <div class="container">

        <?php
        if ($result->num_rows > 0) {

            echo "<table>
            <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Clave</th>
            <th>Dni</th>
            <th>Biometrica</th>
            <th>N.mac</th>
            <th>Estado</th>
            <th>Actualizar</th>
            </tr>";

            while ($row = $result->fetch_assoc()) {
                $apellido = $row['apellido'];
                $nombre = $row['nombre'];
                $user = $row['email'];
                $clave = $row['clave'];
                $dni = $row['dni'];
                $bio = $row['biometrica'];
                $mac = $row['n_mac'];
                $estado = $row['estado'];

                $fila = '<tr>';
    //usando un switch
                switch ($estado) {
                    case 'ok' :
                        $fila = '<tr class= "fila" >';
                        break;
                    case 'pe' :
                        $fila = '<tr class= "fila-dos" >';
                        break;
                    case 'nd' :
                        $fila = '<tr class= "fila-tres" >';
                        break;

                    default:
                    $fila = '<tr>';
                        break;
                }
         //usando un switch
                // if ($row['estado'] == 'ok' ) {
                //     $fila = '<tr class= "fila" >';
                // }
                // if ($row['estado'] == 'pe' ) {
                //     $fila = '<tr class= "fila-dos" >';
                // }
                // if ($row['estado'] == 'nd' ) {
                //     $fila = '<tr class= "fila-tres" >';
                // }


                echo "<tr>
                <h1>Tus datos</h1>
            <form action='archivo-usuario.php' method='post'>
            $fila
            <td>
            <input type='text' placeholder='Nombre' name='nombre' value='$nombre'> <br>
            </td><td>
            <input type='text' placeholder='Apellido' name='apellido' value='$apellido'> <br>
            </td><td>
            <input type='text' placeholder='Email' readonly name='user' value='$user'> <br>
            </td><td>
            <input type='text' placeholder='contraseña' name='clave' value='$clave'> <br>
            </td><td>
            <input type='text' placeholder='N.Dni' name='dni' value='$dni'> <br>
            </td><td>
            <input type='text' placeholder='Foto' name='biometrica' value='$bio'> <br>
            </td><td>
            <input type='text' placeholder='# Mac' name='n_mac' value='$mac'> <br>
            </td><td>
            <input type='text' placeholder='estado' name='estado' value='$estado'> <br>
            </td><td>
            <input class='button' name='update' type='submit' value='actualizar'>
            </td>
            </form>

             </tr>";
            }
            echo "</table>";
        }
        mysqli_close($conn);
        ?>
        <a href="pag.principal.php"><input type="button" class="button" value='inicio'></a>

    </div>

</body>

</html>