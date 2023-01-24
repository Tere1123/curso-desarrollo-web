<?php

include 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
   
  </head>

  <body>

  <div>

        <h1> Registrate</h1>
        <form action="welcome.php" method="post">
            <input type="email" placeholder="Email" name="email" required >
            <input type="text" placeholder="contraseña" name="contraseña" required >
            <input type="submit" value="Enviar">
        </form>

  </div>

       
  </body>


</html