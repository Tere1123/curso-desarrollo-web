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

            /* background-color: #6492fd; */
            color: rgb(225, 227, 227);
            font-family: sans-serif;
            font-size: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 65px;

        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

            width: 400px;
            height: 350px;
            padding: 40px;
            background: #53117c80;
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
            border-radius: 10px;
        }

    
        

        button {

         
            display: flex;
            align-items: center;
            justify-content: center;
            height: 65px;
            width: 180px;
            margin: 50px;
            
            font-family: sans-serif;
            font-size: 20px;

            border-radius: 8px;
            background: #6492fd;
            border-color: #494a4b;
            color: #bdf7f7;

        }

        button:hover {
            background: #6492fdAD;
        }

        a {
            text-decoration: none;
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
            // Si no está logeado, mostramos el botón de iniciar sesion
            echo '<a href="login.php">
        <button>Iniciar sesión</button> </a>';
        }
        ?>
        <!-- <a href="registro-de-datos.php"><i class="bi bi-archive">Registro</i></a>
        <a href="pag-principal.php"><i class="bi bi-house">Home</i></a> -->
       <a href="registro-de-datos.php"><button>Registrate</button></a>
    </div> 

    <!-- <div>

      

        // // creamos una pagina principal y creamos este if donde se pregunta si el usuario está logeado

        // if (isset($_SESSION['logged'])  && $_SESSION['usertype'] == 'admin') {

        //     echo '<button>Ir a mi cuenta</button>';
        //     echo "<form action='panel-edicion-admi.php' method='post'></form>";
        //     echo "<form action='panel-edicion-admi.php' method='post'>
        //     <input type='submit' value='Cerrar sesión' name='logout'>
        //     </form>";
        //     // aquí va el panel/botón/contenido del usuario
        //     //         echo '<button>Ir a mi cuenta</button>';
        //     //         echo "<form action='pag-principal.php' method='post'>
        //     // <input type='submit' value='Cerrar sesión' name='logout'>
        //     // </form>";
        // } elseif ($_SESSION['usertype'] == 'user') {

        //     $user = $_SESSION['username'];

        //     $sql = "SELECT * From usuarios WHERE email = '$user'";
        // }
        // // Si no está logeado, mostramos el botón de iniciar sesion
        // echo '<a href="login.php">
        //     <button>Iniciar sesión</button>
        //  </a>';

        ?>

    </div>

</body>

</html>