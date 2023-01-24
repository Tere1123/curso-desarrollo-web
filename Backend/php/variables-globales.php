<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables globales</title>

</head>
<body>
    <h1>variables superglobales</h1>
    <p>
        son variables accesibles desde cualquier punto del codigo,fincion,archivo..
         sin necesidad de hacer nada particular
    </p>
    <h2>$Globals</h2>
    <p>
        Es un array donde podemos almacenar variables que queremos que tengan propiedad global.
    se puede acceder a esta,mediante <code>$GLOBALS[INDEX]</code>
    </p>

    <?php
    $x = 35;
    $y = 25;

    function suma() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

    }
    suma();
    echo $z;

    ?>

    <hr>

    <h2>$_SERVER</h2>

    <p>
        Array global que se utiliza para guardar informacion que vamos a utilizar en multiples paginas.
        no guarda informacion en el navegador, a diferencia de las cookis.

        Por lo tanto, estas se perderan al cerrar el navegador.
    </p>

</body>
</html>