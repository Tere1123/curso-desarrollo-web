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
$max = 8;//hasta donde quiero que llegue

echo  " <table>"; //abrimos la tabla

//creamos el primer contador hasta el 8
for ($fila = 1; $fila <= $max; $fila++) {

    echo  "<tr>";//abrimos la primera fila

    for ($celda = 1; $celda <= $max; $celda++) {// segundo contador de la celda aumentara despues de recorrer 1 al 8

        echo '<td>'; //se abren las celda
        echo "$fila * $celda= " . $fila * $celda;
        echo '</td>';//se cierran las celda
    }
    echo  "</tr>";//se cierra la fila
}

echo "</table>";// se cierra la tabla

echo '<h3>9. Crear un programa de PHP que imprima un tablero de ajedrez
// Pista: Usar una tabla con 270px de ancho y 30px como medida para las celdas </h3>';


//creamos variables

$white= "<td class='blanco'></td>" ;
$negro = "<td class='negro'></td>";

echo  " <table class = 'tablero'"; // creamo la tabla

// imprimimos el primer bucle
for ($t=1; $t <=4 ; $t++) {
    echo "<tr>";
    //imprimimos la primra fila,esta se repite dos y dos
    for ($i=1; $i <=4 ; $i++) { 
        echo "$negro";
        echo "$white";
    }
    echo "</tr>";
    //imprimimos la segunda fila con los colores inveridos y vuelve al inicio para repetir la secuencia 4 veces
    for ($i=1; $i <=4 ; $i++) { 
        echo "$white";
        echo "$negro";
    }
}

//cerramos la tabla
echo "</table>";

echo '<h3> 10. Crear un script que imprima la siguiente tabla </h3>';

// creamos las variables
$max = 10;//hasta donde quiero que llegue

echo  " <table>"; //abrimos la tabla

//creamos el primer contador hasta el 8

for ($fila = 1; $fila <= $max; $fila++) {

    echo  "<tr>";//abrimos la primera fila

    for ($celda = 1; $celda <= $max; $celda++) {// segundo contador de la celda aumentara despues de recorrer 1 al 8

        echo '<td>'; //se abren las celda
        echo $fila * $celda;
        echo '</td>';//se cierran las celda
    }
    echo  "</tr>";//se cierra la fila
}

echo "</table>";// se cierra la tabla


echo '<h3> 11. Crear un programa en php que integre  los numero de 1 al 50.Al imprimirlos los multiplos de 3 se sustituiran  por fizz  los multiplos de 5 por buzz y
los que sean mulpiplos de los dos por fizBuzz </h3>';


for ($i=1; $i <=50 ; $i++) { 
    echo $i;
    
    if ($i % 5 == 0) {
        echo $i = 'fizz';
    }
   
}

echo '<h3> 12-crear un triangulo de floyd </h3>';
