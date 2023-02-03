<?php

include 'conn.php';

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
            background: linear-gradient(#578cee, #6dddc7);
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            width: 400px;
            padding: 40px;
            background: #53117c80;
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

        .box p {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="box">

        <?php

        include 'conn.php';
        // creamos las variables con los datos que pedimos en el formulario
        $user = $_POST['user'];
        $clave = $_POST['clave'];

        // en insert intro van el encabezado que estan en la base de datos ejemp: email y clave

        $sql = "INSERT INTO usuarios (email,clave)
     VALUES ('$user','$clave')";


        // ejecutamos la query y comprobamos si ha sido exitosa

        if ($conn->query($sql) === TRUE) {
            echo 'Datos guardados con exito <br>';
        } else {
            echo "error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();

        // creamos la conxion con la base de datos


        ?>

        <p>Bienvenido, <?php echo $_POST['user'];
                        echo '<br>  <a href="login.php">
     <button>Iniciar sesión</button> </a>'; ?> </p>

    </div>

</body>

</html>