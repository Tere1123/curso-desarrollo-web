<?php
session_start();

include 'conn.php';

$user = $_SESSION['id'];

if (isset($_SESSION['logged']) && $_SESSION['user_type'] == 'admin') {

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

<?php require "header.php"; ?>
<div class="container">
    <?php
   
    if ($result->num_rows > 0) {

        // Imprimimos los datos en una tabla

        echo "  <h1>Hola Admi</h1>
        <table>
        <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>User_type</th>
        <th>Actualizar</th>
        <th>Eliminar</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $apellido = $row['apellido'];
            $nombre = $row['nombre'];
            $user = $row['email'];
            $usertype = $row['user_type'];
           
          // creamos variables para usuarios para el selector
            $usertype1 = 'usuario';
            $usertype2 = 'admin';
            $usertype3 = 'colaborador';

        //     if ($usertype != 'usuario'){
        //     if ($usertype == 'admin') $usertype1 = 'admin';
        //     if ($usertype == 'usuario') 
        //     if ($usertype == 'colaborador') $usertype3 = 'colaborador';
        // }
            if ($usertype == 'admin' ) {
            
                $usertype1 = 'admin';
                $usertype2 = 'usuario';
                $usertype3 = 'colaborador';

            }elseif ($usertype == 'colaborador') {
                $usertype1 = 'colaborador';
                $usertype2 = 'usuario';
                $usertype3 = 'admin';
            }

            echo "<tr>
            <form action='archivo-admi.php' method='post'>
            <td>
            <input type='text' placeholder='Id' readonly name='id' value='$id'> <br>
            </td><td>
            <input type='text' placeholder='Nombre' readonly name='nombre' value='$nombre'> <br>
            </td><td>
            <input type='text' placeholder='Apellido' readonly name='apellido' value='$apellido'> <br>
            </td><td>
            <input type='text' placeholder='Email' readonly name='user' value='$user'> <br>
            </td><td>
            <select  name='user_type'>
            <option value='$usertype1'>$usertype1</option>
            <option value='$usertype2'>$usertype2</option>
            <option value='$usertype3'>$usertype3</option>
            </select>
            </td><td>
            <input type='submit' class='button'name='update' value='Actualizar'>
            </td><td>
            <input type='submit'class='button' name='delete' value='Eliminar'> 
            </td>
            </form>
            </tr>";
            
        }
        echo "</table>";
    } 


    mysqli_close($conn);
    ?>
   

   <a href="pag.principal.php"><input type="button" class="button" value='volver'></a>
    
</div>
</body>

</html>