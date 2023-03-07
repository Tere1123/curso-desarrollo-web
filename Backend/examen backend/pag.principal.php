<?php

include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUSH</title>
</head>

<body>

<div class="container login">
    

            <form action="login-usuario.php" method="post">

                <h1> Login</h1>
                <input type="email" placeholder="Email" name="user" required>
                <input type="text" placeholder="Contraseña" name="clave" required><br>
                <input class="button" type="submit" value="Enviar">

    
            </form>
    
</div>

</body>

</html>    