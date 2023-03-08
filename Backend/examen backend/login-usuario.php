
<?php

session_start();

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

<?php

if ($_SERVER['REQUEST_METHOD'] = 'POST') {

            // recibimos las variables datos 
            $user = $_POST['user'];
            $clave = $_POST['clave'];
           
            include 'conn.php';
            // realizamos una query para buscar la existencia del usuario en la BD

            $sql = "SELECT * FROM empleados WHERE email = '$user' and clave = '$clave' ";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) { // esto quiere decir: el resultado recorrera todas las filas buscando iguales
          
                echo '<p>Has iniciado sesíon con exito.</p>';
                echo "<p>Hola  $user </p><br>";

                $_SESSION['logged'] = true;
                // esta session nueva se crea para mostrar los datos en la tabla
                while ($row = $result->fetch_assoc()) {
                    // se crea un array $row con los resultados de la query del usuario
                    $_SESSION['id'] = $row['id'];   
                    $_SESSION['user_type'] = $row['user_type'];
                }

                // Reenviamos al usuario dependiendo del tipo

                // es user:
               $link = 'info-usuario.php';

               // admin:
               if ($_SESSION['user_type'] == 'admin') $link = 'info-admi.php';
               // colaborador:   
               if ($_SESSION['user_type'] == 'colaborador') $link = 'info-colab.php';

                echo "<a href='$link'>
                <button>Tu Cuenta</button>
                </a>";

                $conn->close();
            } elseif ($result->num_rows === 0) {
                // si no se encuentra ningun resultado mostrara este aviso y nos devolvera al formulario de login

             
                $_SESSION["fallo"] = true;

                header("Location: pag.principal.php");


                exit();
            }
}
 ?>

</div>

</body>

</html>
