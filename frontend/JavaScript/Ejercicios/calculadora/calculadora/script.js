// declaramos constantes con los elementos a utilizar
const input = document.getElementById('input');
const numbers = document.querySelectorAll('.numbers button');
const operators = document.querySelectorAll ('.divSuma button');
const resultado = document.getElementById('igual');
const limpiar = document.getElementById('clear');

//se muestra una valor por defecto
input.value = 0;

//creamos variables para guardar los valores

let value1, value2 = 0;
let operator = '';

//realizamos un bucle que recorra el array

for (let i = 0; i < numbers.length; i++ )  {
 numbers[i].addEventListener('click',write)

}

// creamos la funcion para escribir

function write () {
    console.log(this.innerHTML);

    if (input.value == 0) {
        input.value = '';
        
    }

input.value += this.innerHTML;

}

//limpiamos la pantalla al opromir C

clear .onclick = () => {
    input.value = 0;
}












