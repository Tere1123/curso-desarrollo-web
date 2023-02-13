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



        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            min-width: 300px;
            height: 400px;
            padding: 40px;
            background: #53117c80;
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;

        }

        .login-box h1 {
            margin: 0 0 30px;
            padding: 0;
            color: #bdf7f7;
            text-align: center;
        }


        .login-box input {

            Width: 100%;
            padding: 10px 10px;
            font-size: 16px;
            color: #bdf7f7;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #bdf7f7;
            background: transparent;


        }

        .button {

            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 250%);

            text-align: center;
            width: 100px !important;
            height: 40px;
            padding: 10px 20px;
            border-radius: 6px;
            background: #6492fd;
            color: #bdf7f7;
            letter-spacing: 4px;

        }

        .button:hover {

            background: #6492fdAD;
        }

        a {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 600%);
            color: #bdf7f7;
            font-family: sans-serif;
            letter-spacing: 4px;

        }

        a:hover:hover {

            background: #6492fdAD;
        }
    </style>

</head>

<body>



    <div>

        <form class="login-box" action="intro-datos.php" method="post">

            <h1> Registrate</h1>
            <input type="email" placeholder="Email" name="user" required>
            <input type="text" placeholder="contraseña" name="clave" required>
            <input class="button" type="submit" value="Enviar">
            

        </form>
        <a href="pag-principal.php">Inicio</a>


    </div>


</body>


</html