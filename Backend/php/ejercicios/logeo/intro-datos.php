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

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            min-width: 250px;
            height: 200px;
            padding: 40px;
            background: #53117c80;
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
            color: #bdf7f7;
        }

        .box p {

            margin: 0 0 30px;
            padding: 0;
            color: #bdf7f7;
            text-align: center;
            font-size: 16px;
            font-family: sans-serif;
        }


        button {

            text-align: center;
            width: 110px;
            height: 30px;
            padding: 10px 20px;
            border-radius: 5px;
            border: 1px solid #8bb2df;

            background: transparent;
            font-size: 16px;
            color: #bdf7f7;

        }

        button:hover {

            background: #6492fdAD;
        }

        a {
            text-decoration: none;
            color: #bdf7f7;
        }

        a:hover {
            background: #6492fdAD;
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


        $sql = "SELECT * From usuarios WHERE email = '$user'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<p>Error correo ya existente.</p>';
            echo  '<a href="registro-de-datos.php"><button>Regresar</button></a>';
        } else {


            $sql = "INSERT INTO usuarios (email,clave)
         VALUES ('$user','$clave')";

            // ejecutamos la query y comprobamos si ha sido exitosa

            if ($conn->query($sql) === TRUE) {
                echo '<p>Datos guardados con exito.</p>';
            
            } else {
                echo "error: " . $sql . "<br>" . $conn->error;
            }

        ?>
            <p>Bienvenido, <?php echo $_POST['user'];
                            echo '<br>  <a href="login.php">
                <button>Login</button> </a>'; ?> </p>

        <?php
        }

        $conn->close();

        // cerramos la conexion con la base de datos


        ?>

    </div>

</body>

</html>