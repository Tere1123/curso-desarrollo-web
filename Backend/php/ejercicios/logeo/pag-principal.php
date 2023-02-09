<?php
session_start();

if (isset($_POST['logout'])) {
    unset($_SESSION['logged']);
    session_destroy(); // se coloca para carrar todas las sesiones del usuario

}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>pagina principal</title>

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

            text-align: center;
            color: rgb(225, 227, 227);
            font-family: sans-serif;
            font-size: 50px;
            padding: 40px;

        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            min-width: 250px;
            height: 350px;
            padding: 10px;
            background: #53117c80;
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

    
        

        button {

            display: flex;
            align-items: center;
            justify-content: center;
            height: 60px;
            width: 170px;
            margin: 50px;
            
            font-family: sans-serif;
            font-size: 20px;

            border-radius: 8px;
            background: #6492fd;
            border: 1px solid #8bb2df;
            color: #bdf7f7;

        }

        button:hover {
            background: #6492fdAD;
        }

        a {
            text-decoration: none;
        }

        input {

            display: flex;
            align-items: center;
            justify-content: center;
            height: 60px;
            width: 170px;
            margin: 50px;
            
            font-family: sans-serif;
            font-size: 20px;

            border-radius: 8px;
            background: #6492fd;
            border: 1px solid #8bb2df;
            color: #bdf7f7;
        }

        input:hover {
            background: #6492fdAD;
        }

       
    </style>
</head>

<body>

    <header>Usando PHP</header>
    <!-- creamos una pagina principal y creamos este if donde se pregunta si el usuario o admi para mostrar el contenido en el boton de mi cuenta-->
   
    <div class="box">   
        <?php
    // creamos una variable para el link segun el usuario que se logea.
        if (isset($_SESSION['logged'])) {
            if ($_SESSION['usertype'] == 'admin') {
                $link = 'panel-edicion-admi.php';
            } else $link = 'panel-edicion.php';

            echo "<a href='$link'><button>Ir a mi cuenta</button></a>";
            echo "<form action='pag-principal.php' method='post'>
            <input type='submit' value='Cerrar sesión' name='logout'>
            </form>";
            
        }  else {
            // Si  está logeado, mostramos el botón de iniciar sesion
            echo '<a href="login.php">
            <button>Iniciar sesión</button> </a>';
            echo '<a href="registro-de-datos.php"><button>Registrate</button></a>';


        }

        ?>
        <!-- <a href="registro-de-datos.php"><i class="bi bi-archive">Registro</i></a>
        <a href="pag-principal.php"><i class="bi bi-house">Home</i></a> -->
       
    </div> 


</body>

</html>