
<?php
session_start();

include 'conn.php';
// validamos que tipo de usuario es el que quiere acceder para saber que informacion mostrar

// si eres admi mostrar todos los datos de la tabla
if (isset($_SESSION['logged']) && $_SESSION['usertype'] == 'admin') {
  
    $sql = 'SELECT * FROM usuarios';
    echo "<form action='panel-edicion-admi.php' method='post'></form>";

// si eres usuario solo mostrar sus datos
} elseif ($_SESSION['usertype'] == 'user') {

     $user = $_SESSION['username']; 

     $sql = "SELECT * From usuarios WHERE email = '$user'";

}
  $result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datos</title>
    <style>

        table {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 5px 2px;
            display: flex;
            justify-content: start;
        }

        th {
            text-align: center;
            background-color: #aabbcc;
            border: 2px solid black;
            padding: 2px 5px;
        }

        td {
            text-align: center;
            border: 1px solid black;
            padding: 2px 5px;
        }

    </style>
</head>
<body>
    
<h1>Usuarios de la BD</h1>
    <table>
  
 <?php

    if ($result->num_rows > 0) {
  
    echo "<tr>
    <th>nombre</th>
    <th>contraseña</th>
    <th>tipo de usuario</th>
    <th>id</th>

    </tr>";

  //imprimir datos de cada fila
    while ($row = $result->fetch_assoc()) {
    echo "<tr> <td>". $row['email']."</td>".
             "<td>" . $row['clave'] . "</td>" . 
             "<td>". $row['user_type'] . "</td> </tr>";
    }


} 

$conn->close();

?>

</table>
</body>
</html>

