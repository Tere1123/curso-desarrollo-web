<?php

echo '<h3>1-crear un bucle que imprima los numeros del 1 al 10</h3>';

for ($i = 1; $i < 11; $i++) {

    echo $i;
}
echo "<br>";

for ($i = 1; $i < 11; $i++) {

    if ($i == 10) {
        echo $i;
    } else {
        echo $i . '-';
    }
}

echo "<br>";


echo '<h3> 2-crear un bucle que sume todos los numeros del 1 al treinta </h3>';

$suma = 0;

for ($i = 0; $i <= 30; $i++) {

    $suma += $i;
}
echo "<br>";
echo $suma;


echo "<br>";

echo '<h3> 3-crear un scrip que imprima el siguiente patron </h3>';
// *
// **
// ***
// **** 
// *****
$suma_estrella = 5;

for ($i = 1; $i <= $suma_estrella; $i++) {

    for ($j = 0; $j < $i; $j++)
        echo "*";
    echo "<br>";
}

echo "<br>";

$suma_estrellas = 5;

for ($i = $suma_estrellas; $i > 0; $i--) {

    for ($j = 0; $j < $i; $j++)

        echo "*";
    echo "<br>";
}

echo "<br>";

echo '<h3> 4- Crear un script que imprima el siguiente patrón:</h3>';
// *
// * *
// * * *
// * * * *
// * * * * *
// * * * *
// * * *
// * *
// *

$suma_estrella = 5;

for ($i = 1; $i <= $suma_estrella; $i++) {

    for ($j = 0; $j < $i; $j++)
        echo "*";
    echo "<br>";
}

for ($i = $suma_estrella; $i > 0; $i--) {

    for ($j = 1; $j < $i; $j++)

        echo "*";
    echo "<br>";
}

echo '<h3> 5. Crear un bucle que calcule el factorial de un número dado. El factorial de un número 
// es el producto de todos los naturales hasta llegar a dicho número
// 4! = 4*3*2*1 = 24 </h3>';

$fact = 4;
$prod = 1;

for ($i = $fact; $i > 0; $i--) {

    $prod *= $i;
}
echo $prod;
echo "<br>";

echo '<h3> 6. Crear un programa que muestre todas las potenciales combinaciones de dos dígitos decimales,
// impresos separados por coma </h3>';


for ($i = 0; $i < 10; $i++) {

    for ($j = 0; $j < 10; $j++) {
        echo $i . $j . ",";
    }
}


echo '<h3> 7. Escribir un programa que cuente el número de "r" de un string dado </h3>';


$palabra = 'carro';
$contador = 0;

for ($i = 0; $i < strlen($palabra); $i++) {

    if (substr($palabra, $i, 1) == 'r') $contador++;
}
echo "el string '$palabra' contiene '$contador' r. ";




echo '<h3>8. Escribir un programa que cree automáticamente una tabla con las tablas de multiplicar con 
// el alcance que nosotros le indiquemos
// Ejemplo: Alcance 6. Primera fila de la tabla 

// | 1 * 1 = 1 | 1 * 2 = 2 | 1 * 3 = 3... | 1 * 6 = 6 |
// ...
// | 6 * 1 = 6 | 6 * 2 = 12 | 6 * 3 = 18... | 6 * 6 = 36 | </h3>';


echo "<style>

tbody {

    /* border-collapse: collapse;  */
    border-radius: 6px;
    border: 2px solid #58585a;
}

th {
    text-align: center;
    background-color: #1a2e7c;
    border-radius: 5px;
    border: 2px solid black;
    padding: 1px 1px;
}

td {
    border: 1px solid black;
    background-color: #cdd0db;
    text-align: center;
    padding: 2px 5px;
}


.tablero {

    height: 30px;
    width: 250px;
    border: 1px solid black;
  

}

td.blanco {
    background-color: #fdffff;
    height: 30px;
    width: 250px;
    border: none;
}

td.negro {
    background-color: #00000f;
    height: 30px;
    width: 250px;
    border: none;
}

</style>";
// creamos las variables
$max = 8; //hasta donde quiero que llegue

echo  " <table>"; //abrimos la tabla

//creamos el primer contador hasta el 8
for ($fila = 1; $fila <= $max; $fila++) {

    echo  "<tr>"; //abrimos la primera fila

    for ($celda = 1; $celda <= $max; $celda++) { // segundo contador de la celda aumentara despues de recorrer 1 al 8

        echo '<td>'; //se abren las celda
        echo "$fila * $celda= " . $fila * $celda;
        echo '</td>'; //se cierran las celda
    }
    echo  "</tr>"; //se cierra la fila
}

echo "</table>"; // se cierra la tabla

echo '<h3>9. Crear un programa de PHP que imprima un tablero de ajedrez
// Pista: Usar una tabla con 270px de ancho y 30px como medida para las celdas </h3>';


//creamos variables

$white = "<td class='blanco'></td>";
$negro = "<td class='negro'></td>";

echo  " <table class = 'tablero'"; // creamo la tabla

// imprimimos el primer bucle
for ($t = 1; $t <= 4; $t++) {
    echo "<tr>";
    //imprimimos la primra fila,esta se repite dos y dos
    for ($i = 1; $i <= 4; $i++) {
        echo "$negro";
        echo "$white";
    }
    echo "</tr>";
    //imprimimos la segunda fila con los colores inveridos y vuelve al inicio para repetir la secuencia 4 veces
    for ($i = 1; $i <= 4; $i++) {
        echo "$white";
        echo "$negro";
    }
}

//cerramos la tabla
echo "</table>";

echo '<h3> 10. Crear un script que imprima la siguiente tabla </h3>';

// creamos las variables
$max = 10; //hasta donde quiero que llegue

echo  " <table>"; //abrimos la tabla

//creamos el primer contador hasta el 8

for ($fila = 1; $fila <= $max; $fila++) {

    echo  "<tr>"; //abrimos la primera fila

    for ($celda = 1; $celda <= $max; $celda++) { // segundo contador de la celda aumentara despues de recorrer 1 al 8

        echo '<td>'; //se abren las celda
        echo $fila * $celda;
        echo '</td>'; //se cierran las celda
    }
    echo  "</tr>"; //se cierra la fila
}

echo "</table>"; // se cierra la tabla


echo '<h3> 11. Crear un programa en php que integre  los numero de 1 al 50.Al imprimirlos los multiplos de 3 se sustituiran  por fizz  los multiplos de 5 por buzz y
los que sean mulpiplos de los dos por fizBuzz </h3>';

// dos formas de hacerlo con los ifelse y switch
for ($i = 1; $i <= 50; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo 'fizzbuz-';
    } elseif ($i % 3 == 0) {

        echo 'fizz-';
    } elseif ($i % 5 == 0) {

        echo 'buzz-';
    } else {
        echo "$i-";
    }
}


echo '<hr>';

for ($i = 1; $i <= 50; $i++) {

    switch ($i) {

        case $i % 3 == 0 && $i % 5 == 0;
            echo 'fizzbuzz- ';
            break;

        case $i % 3 == 0;
            echo 'fizz- ';
            break;

        case $i % 5 == 0;
            echo 'buzz-';
            break;

        default:
            echo "$i - ";
            break;
    }
}

echo '<hr>';

echo '<h3> 12-crear un triangulo de floyd </h3>';



$nfila = 12;
$contador = 1;
$espacio = "&nbsp;&nbsp;";

for ($i = 0; $i <= $nfila; $i++) {

    for ($c = 1; $c <= $i; $c++) {
        echo  $espacio;
        echo  $contador++;
    }
    echo '<br>';
}


echo '<hr> por el profe';


$nfila = 12;
$contador = 1;

for ($i = 1; $i <= $nfila; $i++) {

    for ($b = 1; $b <= $i; $b++) {

        echo $contador;
        echo  $espacio;
        $contador++;
    }
    echo '<br>';
}

echo '<h3> 13-escribir un bucle de php que imprima una letra del abecedario  
//   * * *
// *       *
// *       *
// * * * * *
// *       *
// *       *
// *       *
// *       * </h3>';



$espacios = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo "<pre>";
for ($i = 1; $i <= 8; $i++) {

    if ($i != 1) {
        echo "* ";
    } else echo "&nbsp;&nbsp;";

    if ($i == 1 || $i == 4) {
        echo "* * *";
    } else echo $espacios;

    if ($i != 1) echo " *";
    echo "<br>";
}
echo "</pre>";


// for ($i=0; $i < ; $i++) { 

// }

echo '<h3> 14. Escribir un bucle de PHP que sea capaz de imprimir este patrón:

// 1 5 9 <br>
// 2 6 10 <br>
// 3 7 11 <br>
// 4 8 12 <br></h3>';


$n = 4;

for ($i = 1; $i <= $n; $i++) {
    echo $i . " ";
    for ($b = 1; $b < $n; $b++) {
        echo ($i + $n * $b) . " ";
    }
    echo '<br>';
}

// $nfila1 = 4;
// $n=3;
// // $espacio = "&nbsp;&nbsp;";

// for ($i = 1; $i <= $nfila1; $i++) {

//     for ($b = $i; $b <= $n; $b++) {
   
//     }
 
  
// }

echo  " </table>";

echo '<h3>  15. Escribir un bucle de PHP que sea capaz de imprimir este patrón:

$n = 5;
// 1
// 121
// 12321
// 1234321
// 12345432</h3>';


echo '<br>';

$n = 6;

for ($i = 1; $i <= $n; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    for ($j = $i - 1; $j >= 1; $j--) {
        echo $j . " ";
    }
    echo '<br>';
}
