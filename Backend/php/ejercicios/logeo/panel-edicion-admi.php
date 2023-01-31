<?php
session_start();

include 'conn.php';

$user = $_SESSION['id']; 

$sql = "SELECT * From usuarios'";

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formilario de usuarios</title>
</head>

<body>
   
<?php
    if ($result->num_rows > 0) {
  
        echo "<tr>
        <th>nombre</th>
        <th>contraseña</th>
        <th>tipo de usuario</th>
        <th>id</th>
        </tr>";

    while ($row = $result->fetch_assoc()) {
        $user = $row['email'];
        $clave = $row['clave'];

    echo "<form action='archivo-edicion.php' method='post'>
     <h1> Login</h1>
    <input type='text' placeholder='Emaili' name='user' value='$user'>
    <input type='text' placeholder='contraseña' name='clave' value='$clave'>
    <input type='submit' value='actualizar'>
    </form>";

}
}
?>

</body>

</html>