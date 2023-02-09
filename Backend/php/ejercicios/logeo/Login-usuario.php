<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-usuario</title>
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

        button {

            text-align: center;
            width: 120px;
            height: 40px;
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

    </style>
</head>

<body>
    <div class="box">
        <?php


        if ($_SERVER['REQUEST_METHOD'] = 'POST') {
            // recibimos las variables del registro de datos 
            $user = $_POST['user'];
            $clave = $_POST['clave'];



            include 'conn.php'; // esta conecta con la base de datos

            // realizamos una query para buscar la existencia del usuario en la BD

            $sql = "SELECT * FROM usuarios WHERE email = '$user' and clave = '$clave' ";
            $result = $conn->query($sql);

            // buscamos en la base de datos el resultado para que nos de el acceso siguiente

            if ($result->num_rows > 0) { // esto quiere decir: el resultado recorrera todas las filas y 
                //si encuentra un resultado mayor a 0 que coinsida con los datos de la query dara acceso  
                echo '<p>Has iniciado sesíon con exito.</p>';
                echo "<p>Hola  $user </p><br>";

                $_SESSION['logged'] = true;
                // esta session nueva se crea para mostrar los datos en la tabla
                while ($row = $result->fetch_assoc()) {
                    // se crea un array $row con los resultados de la query del usuario
                    $_SESSION['id'] = $row['id'];
                    // $_SESSION['username'] = $row['email'];
                    $_SESSION['usertype'] = $row['usertype'];
                }
                //    redirigir 
                echo '<a href="pag-principal.php">
                <button>Inicio</button>
                </a>';

                $conn->close();
            } elseif ($result->num_rows === 0) {
                // si no se encuentra ningun resultado mostrara este aviso y nos devolvera al formulario de login

                // dentro de  este formulario crearemos un if 

                // creamos una variable nueva para que nos retornue al formilario de login
                $_SESSION["fallo"] = true;

                header("Location: login.php");


                exit();
            }
        }
        ?>

    </div>
</body>

</html>