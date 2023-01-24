<?php
// Si venimos del botón de cerrar sesión, la destruímos
if (isset($_POST['close'])) {
        session_destroy();
        header("Refresh:0"); 
}

// preguntamos si el usuario viene del formulario de logeo o si ya ha iniciado sesión
if ($_SERVER['REQUEST_METHOD'] == "POST" || isset($_SESSION['usertype'])) {
    // Iniciamos la sesión
    session_start();

    // Guardamos el tipo de usuario en el array de sesión;
    $_SESSION['usertype'] = $_POST['usertype'];

    // Si el usuario es admin
    if ($_SESSION['usertype'] == "admin") {
        // Mostramos contenido exclusivo del admin
        echo "Bienvenido, administrador.";
    } elseif ($_SESSION['usertype'] == "user") {
        // Mostramos contenido exclusivo del usuario
        echo "hola usuario.";
    }

    // Fuera del if, podemos poner contenido para todos los tipos de usuario

    // Botón para cerrar la sesión. Debe de ser un submit que haga refrescar la página
    echo "<form action=" . $_SERVER["PHP_SELF"] . " method = 'post'>
            <input type='submit' name='close' value='cerrar sesión'>   
          </form>";
    

} else {
    //  Si hemos venido directamente a esta página, seremos redirigidos
    header("Location: request-from.php");
    exit();
}

?>