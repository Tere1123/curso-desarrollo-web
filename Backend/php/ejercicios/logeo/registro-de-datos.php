<?php

include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>registro</title>

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

        header {

            background-color: rgb(116, 212, 247);
            color: rgb(225, 227, 227);
            font-family: sans-serif;
            font-size: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 65px;

        }

       

        .login-box {
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

        .login-box h1 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
    </style>

</head>

<body>

    <header>Usando PHP</header>

    <div>

        <form class="login-box" action="intro-datos.php" method="post">

            <h1> Registrate</h1>
            <input type="email" placeholder="Email" name="user" required>
            <input type="text" placeholder="contraseña" name="clave" required>
            <input type="submit" value="Enviar">
        </form>

    </div>


</body>


</html