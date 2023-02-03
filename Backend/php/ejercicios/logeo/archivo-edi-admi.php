<?php
session_start();

include 'conn.php';
// con las variables que tenemos agregamos una nueva variable 'ID' que es la que nos permitira
// guardar los datos nuevos cuando se realice el cambio
$user = $_POST['user'];

$clave = $_POST['clave'];

$user_type = $_POST['usertype'];

$id = $_POST['id']; // esta variable la tomamos del documento login-usuario

// usamos el update para indicar que el admi quiere actualizar datos y estos datos nuevos quedaran 
//guardados en el ID.

$sql = "UPDATE usuarios SET email = '$user', clave = '$clave', usertype = '$user_type' WHERE  id = '$id'";

// $result = $conn->query($sql);
// ejecutamos la query y comprobamos si ha sido exitosa

if ($conn->query($sql)) {

    $_SESSION['id'] = $user;

} else {
    echo "error: " . $sql . "<br>" . $conn->error;

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <style>

        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#3e2e70, #86def4);
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            width: 400px;
            padding: 40px;
            background: #53117c80;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        button {
           
            height:30px;
            width: 50px;

            border-radius: 5px;
            background: #6492fd;
            border-color: #494a4b;
            color: #35383c;
          
        }

        a {
            text-decoration: none;
       
        }

        button:hover {
            color: #bdf7f7; 
            background-color:#35383c;
        }
        p {
            display: flex;
            flex-direction: column;
            justify-content: center;

        }

    </style>
</head>

<body>
    <div class="login-box">
        <p>Datos actualizados
            <?php echo $_POST['user'];
            echo  ' <a href="pag-principal.php"> <br>
    <button>Salir</button>
        </a>'; ?></p>

    </div>

</body>

</html>