<?php

echo '<h3>1-crear un bucle que imprima los numeros del 1 al 10</h3>';

for ($i=1; $i < 11; $i++) { 
    
    echo $i;

}
echo"<br>";

for ($i=1; $i < 11; $i++) { 

    if ($i == 10) {
        echo $i;
    }else{
        echo $i . '-' ;
    }
    
}

echo"<br>";


echo '<h3> 2-crear un bucle que sume todos los numeros del 1 al treinta </h3>';

$suma = 0;

for ($i = 0; $i <=30 ; $i++) { 

        $suma += $i ;
       
}
echo"<br>";
echo $suma;


echo"<br>";

echo '<h3> 3-crear un scrip que imprima el siguiente patron </h3>';
// *
// **
// ***
// **** 
// *****
$suma_estrella = 5;

for ($i=1; $i <= $suma_estrella; $i++) { 

    for ($j = 0; $j < $i; $j++) 
    echo "*";
    echo"<br>";

}

echo"<br>";

$suma_estrellas = 5;

for ($i= $suma_estrellas; $i > 0; $i--) { 

    for ($j = 0; $j < $i; $j++) 

    echo "*";
    echo"<br>";

}

echo"<br>";

echo '<h3>  Crear un script que imprima el siguiente patrón:</h3>';
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

for ($i=1; $i <= $suma_estrella; $i++) { 

    for ($j = 0; $j < $i; $j++) 
    echo "*";
    echo"<br>";

}

for ($i= $suma_estrella; $i > 0; $i--) { 

    for ($j = 1; $j < $i; $j++) 

    echo "*";
    echo"<br>";

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
echo"<br>";

echo '<h3> 6. Crear un programa que muestre todas las potenciales combinaciones de dos dígitos decimales,
// impresos separados por coma </h3>';


for ($i= 0; $i <10; $i++) { 

    for ($j = 0; $j < 10; $j++) {
        echo $i . $j . "," ;
       
    }


}


echo '<h3> 7. Escribir un programa que cuente el número de "r" de un string dado </h3>';


$palabra = 'carro';
$contador = 0;

for ($i= 0 ; $i < strlen($palabra) ; $i++) { 

     if (substr($palabra,$i,1)=='r') $contador++;

   } echo "el string '$palabra' contiene '$contador' r. ";
        



echo '<h3> Escribir un programa que cree automáticamente una tabla con las tablas de multiplicar con 
// el alcance que nosotros le indiquemos
// Ejemplo: Alcance 6. Primera fila de la tabla 

// | 1 * 1 = 1 | 1 * 2 = 2 | 1 * 3 = 3... | 1 * 6 = 6 |
// ...
// | 6 * 1 = 6 | 6 * 2 = 12 | 6 * 3 = 18... | 6 * 6 = 36 | </h3>';

$max = 6;
$num = 0;
echo  " <table>
//  <tr>";

for ($i=1; $i <= $max ; $i++) { 
 

    for ($b=1; $b <= $max; $b++) { 
     

     $num = $i * $b;

     echo $num;
     
    }

//   </td>$i*$b<td>
// </table>";

}






echo '<h3> Crear un programa de PHP que imprima un tablero de ajedrez
// Pista: Usar una tabla con 270px de ancho y 30px como medida para las celdas </h3>';



echo '<h3> 10. Crear un script que imprima la siguiente tabla </h3>';