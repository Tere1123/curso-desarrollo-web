<?php

include 'conn.php';
session_start();

if (isset($_POST['logout'])) {
    unset($_SESSION['logged']);
    session_destroy(); // carrar todas las sesiones del usuario

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUSH</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>

<div class="container">
    

            <form action="login-usuario.php" method="post">

                <h1> Login</h1>
                <input type="email" placeholder="Email" name="user" required>
                <input type="text" placeholder="Contraseña" name="clave" required><br>
                <input class="button" type="submit" value="Enviar">

    
            </form>
            <?php
            // creamos un if donde este nos indicara que si hay un error en los datos o no coinsiden con los de la base de datos 
            // no llevara a traves de un link a regisrarnos nuevamente.

            if (isset($_SESSION['fallo'])) {
                echo '<p>email o contraseña incorrectos. Por favor, 
                compruebe los datos </p>';


                unset($_SESSION['fallo']);

                // si se inicia secion este aviso se eliminara
            }
            ?>
</div>

</body>

</html>    