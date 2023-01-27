<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
    <div class="login-box">
        <form action="login-usuario.php" method="post">

            <h1> Login</h1>
            <input type="email" placeholder="Email" name="user" required>
            <input type="text" placeholder="contraseña" name="clave" required>
            <input type="submit" value="Enviar">


        </form>
        <?php
// creamos un if donde este nos indicara que si hay un error en los datos o no coinsiden con los de la base de datos 
// no llevara a traves de un link a regisrarnos nuevamente.

        if (isset($_SESSION['fallo'])) {
            echo '<p>email o contraseña incorrectos. Por favor, 
            compruebe los datos o pulsa <a href="registro-de-datos.php">aquí</a> para registrarte</p>.';
        

            unset($_SESSION['fallo']);

            // si se inicia secion este aviso se eliminara
        }
        ?>
    </div>

</body>

</html>