<?php
session_start();

include 'conn.php';

$user = $_SESSION['id']; 

$sql = "SELECT * From usuarios WHERE id = '$user'";

$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formilario de edicion</title>
    <style>
         html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#578cee, #6dddc7);
        }

        .box {
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            text-align: center;
            
        }

 

        input {
            border: none;
            background-color: #aabbcc;
        }

       
    </style>
</head>

<body>
<div class="box">  

<?php
    
    while ($row = $result->fetch_assoc()) {
        $user = $row['email'];
        $clave = $row['clave'];

    echo "<form action='archivo-edicion.php' method='post'>
     <h1> Edicion de datos</h1>
    <input type='text' placeholder='Email' name='user' value='$user'>
    <input type='text' placeholder='contraseña' name='clave' value='$clave'>
    <input type='submit' value='actualizar'>
    </form>";

}

?>
</div> 
</body>

</html>