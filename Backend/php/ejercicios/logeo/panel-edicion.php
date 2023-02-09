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
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;


            min-width: 350px;
            height: 450px;
            background: #0d1a4f;
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;

        }


        h1 {

            padding: 40px;
            margin: 0px 0 40px;
            padding: 0;
            color: #bdf7f7;
            text-align: center;
            font-size: 30px;

        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column; 
        }


        input {

        /* le colocamos el flex al contenedor padre que tiene el input */

            /* display: flex;
            align-items: center;
            justify-content: center; */

            Width: 90%;
            padding: 10px 10px;
            margin: 0 0 5px;
            font-size: 16px;
            color: #bdf7f7;
            border-radius: 10px;
            background: transparent;
            border: 2px solid #969fe4;

        }


        .button {

            /* como tenemos dos botones en dos contenedores diferentes no podemos colocar una posicion
            absoluta por que ocuparan el mismo espacio, se ledebe colocar solo a uno de los dos por separado. */

            /* position: absolute; */
            /* top: 50%; */
            /* left: 50%;
            transform: translate(-50%, 200%); */

            text-align: center;
            width: 90px;
            
            color: #bdf7f7;
            /* margin-bottom: 30px; */
            border: none;
            border-bottom: 1px solid #969fe4;
            border-radius: 6px;

        }
        

        .button:hover {

            background: #6492fdAD;
        }

        a .button {
            text-decoration: none;
            /* top: 60%; */

            position: absolute;
            bottom: 5%;
            transform: translateX(-50%);
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
     <h1>Tus datos</h1>
    <input type='text' placeholder='Email' name='user' value='$user'> <br>
    <input type='text' placeholder='contraseña' name='clave' value='$clave'> <br>
    <input class='button' type='submit' value='actualizar'>
    </form>";
        }

        ?>
        <a href="pag-principal.php"><input type="button" class="button" value='inicio'></a>

    </div>
</body>

</html>