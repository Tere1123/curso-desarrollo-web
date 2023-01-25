<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] = 'POST') {
    // recibimos las variables del registro de datos 
    $user = $_POST['user'];
    $clave = $_POST['clave']; 

   include 'conn.php'; // esta conecta con la base de datos

// realizamos una query para buscar la existencia del usuario en la BD

$sql = "SELECT * FROM usuarios WHERE email = '$user' and clave = '$clave' ";
$result = $conn->query($sql);

// buscamos en la base de datos el resultado para que nos de el acceso siguiente

if ($result -> num_rows > 0) { // esto quiere decir: el resultado recorrera todas las filas y 
    //si encuentra un resultado mayor a 0 que coinsida con los datos de la query dara acceso  

    echo "Hola  $user "; 

} elseif ($result -> num_rows === 0) {
    // si no se encuentra ningun resultado mostrara este aviso y nos devolvera al formulario de login

    // dentro de  este formulario crearemos un if 

    // creamos una variable nueva para que nos retornue al formilario de login
    $_SESSION["fallo"]= true;

    header("Location: login.php");
    exit();
  
    
}

}


?>
