// const y let
const precio1 = 5; //esta variable no cambia
const precio2 = 6;
let total = precio1 + precio2;
// esta variable puede cambiar
total = precio1 * 2 + precio2;
console.log(total);

// si tratamos de asignarle nuevos valores a las variables 
// contantes nos dara error

// precio1 = 9
// console.long('hola');

// numero y strings
const pi = 3.14; // esta variable es constante
let nombre = 'Alan';
let edad = 34;

console.log(edad + pi); // suma de dos numero
edad = '34'; // escribiendo el numero con un string
console.log(edad + pi); // suma de numero y string 

// valor undefined
let coche;// se a declarado la variable sin singun valor

console.log(coche)