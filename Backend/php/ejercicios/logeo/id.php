<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla-getuser</title>
   
</head>

<body>

    <?php
    // recogemos la variable enviada por GET
    $q = "%" . $_GET['q'] . "%";

    // realizamos la conexión a la BD
    $conn = mysqli_connect('localhost', 'root', 'maria8221');

    mysqli_select_db($conn, 'registro');
    $sql = "SELECT * FROM usuarios WHERE id LIKE '$q%' ";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0){
    // Imprimimos los datos en una tabla
    echo "<table>
        <tr>
            <th>Id</th>
            <th>Usuario</th>
            <th>Email</th>
            <th>Usertype</th>
        </tr>";
    // Contenido de la tabla
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['clave'] . "</td>";
        echo "<td>" . $row['usertype'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>Usuario no existe</p>";
}

    mysqli_close($conn);
    ?>
</body>

</html>