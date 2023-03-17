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
  <link rel="stylesheet" href="style-colab.css">
</head>

<body>
<?php require "header.php"; ?>

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
    <th>Dni</th>
    <th>Biometrica</th>
    <th>N.mac</th>
    </tr>";

      // creamos las variables
      while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $apellido = $row['apellido'];
        $nombre = $row['nombre'];
        $dni = $row['dni'];
        $bio = $row['biometrica'];
        $mac = $row['n_mac'];
        $estado = $row['estado'];

      

        $fila = '<tr>';

        if ($row['estado'] == 'ok' ) {
            $fila = '<tr class= "fila" >';
        }
        if ($row['estado'] == 'pe' ) {
            $fila = '<tr class= "fila-dos" >';
        }
        if ($row['estado'] == 'nd' ) {
            $fila = '<tr class= "fila-tres" >';
        }


        // incorporamos  el contenido de la tabla
        echo " 
                    <form action='archivo-colab.php' method='post'>
                    $fila
                        <td>
                        
                        <input type='text' placeholder='Id' name='id' readonly value='$id'> <br>    
                        </td><td>    
                        <input type='text' placeholder='Nombre' name='nombre' readonly value='$nombre'> <br>
                        </td><td>
                        <input type='text' placeholder='Apellido' name='apellido' readonly value='$apellido'> <br>
                        </td><td>
                        <input type='text' placeholder='N.Dni'name='dni' readonly value='$dni'> <br>
                        </td><td>
                        <input type='text' placeholder='Foto' name='biometrica' readonly value='$bio'> <br>
                        </td><td>
                        <input type='text' placeholder='# Mac' name='n_mac' readonly value='$mac'> <br>
                        </td><td>
                        <select name='estado'>
                                <option value='$estado' selected>$estado</option>
                                <option value='ok'>ok</option>
                                <option value='pe'>pe</option>
                                <option value='nd'>nd</option>
                      
                        </select>
                                </td><td>
                        <input type='submit' class='button' name='updatecolab' value='Actualizar'>
                        </td>
                        </tr>
                    </form>";
               
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