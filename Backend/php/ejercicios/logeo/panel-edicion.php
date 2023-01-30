<?php
session_start();

include 'conn.php';

$user = $_SESSION['username']; 

$sql = "SELECT * From usuarios WHERE email = '$user'";

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formilario de edicion</title>
</head>

<body>
   
<?php
    
    while ($row = $result->fetch_assoc()) {
        $user = $_POST['user'];
        $clave = $_POST['clave'];

    }
    ?>
    
    <form action="archivo-edicion.php" method="post">
>       <h1> Login</h1>
        <input type="text"  name="user" required>
        <input type="text"  name="clave" required>
        <input type="submit" value="Enviar">


    </form>



</body>

</html>