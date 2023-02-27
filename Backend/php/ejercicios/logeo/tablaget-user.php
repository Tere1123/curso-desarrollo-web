
<?php

session_start();

include 'conn.php';

$user = $_SESSION['id'];

    // recogemos la variable enviada por GET
    $value =  $_GET['value'] . "%";
    $filtro = $_GET['filtro'];

    // realizamos la conexión a la BD
    $conn = mysqli_connect('localhost', 'root', 'maria8221');


    mysqli_select_db($conn, 'registro');
    $sql = "SELECT * FROM usuarios WHERE $filtro LIKE '$value'";
    // $sql = "SELECT*FROM usuarios WHERE usertype LIKE '$q%'";
    // se elimina esta sql para optimizar los filtros creando otra variable llamada $filtro

    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {

        // Imprimimos los datos en una tabla
        
        echo "<table>
        <tr>
        <th>Id</th>
        <th>Correo</th>
        <th>Contraseña</th>
        <th>Tipo de usuario</th>
        <th>Acciones</th>
        <th>Eliminar</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
            $user = $row['email'];
            $clave = $row['clave'];
            $usertype = $row['usertype'];
            $id = $row['id'];
            $usertype1 = 'admin';
            $usertype2 = 'user';

            if ($usertype != 'admin') {
                $usertype1 = 'user';
                $usertype2 = 'admin';
            }

            echo "<tr>
            <form action='archivo-edi-admi.php' method='post'>
            <td>
            <input type='text'  placeholder='id' name='id' value='$id'>
            </td><td>
            <input type='text' placeholder='Email' name='user' value='$user' required>
            </td><td>
            <input type='text' placeholder='contraseña' name='clave' value='$clave' required>
            </td><td>
            <select  name='usertype'>
            <option value='$usertype1'>$usertype1</option>
            <option value='$usertype2'>$usertype2</option>
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
    } else {
        echo "<p>Usuario no existe</p>";
    }

    mysqli_close($conn);
    ?>