// tomamos los datos que introduce el usuario

function calcularPropina() {
var cuentaTotal = document.getElementById("cuentaTotal").value;
var calidadServ = document.getElementById("calidadServ").value;
var numPersonastype = document.getElementById("numPersonastype").value;

var pResultado = document.getElementById("pResultado");
var resulPorcentaje = calidadServ / 100;
var porc = resulPorcentaje * cuentaTotal
var cuentaT = porc / numPersonastype

// con esto podemos hacer que se vea en pantalla
if (cuentaT > 0) {
    
pResultado.style.display = 'block';
pResultado.innerHTML = cuentaT.toFixed(2) + " € por persona";
// el tofixed permite que a la hora de imprimir el resultado se redondeo
} console.log (cuentaT + "€");
}



// para obtener la propina hay que multiplicar el gasto por la calidad del servicio para obtener
// el correspondiente porcentaje y por tanto la propina total

// seguido dividir la propina entre el numero de comensales para 
// obtener lo que debe pagar cada uno



// function test() {
//     // Tomamos los datos que ha introducido el usuario
//     var cuenta = document.getElementById('cuentaTotal').value;
//     var servicio = document.getElementById('calidadServ').value;
//     var personas = document.getElementById('numPersonas').value;

//     // Calculo la propina que debe pagar cada uno y lo guardo en una variable
//     var resultado = cuenta * servicio / personas;

//     // Accedo al elemento donde quiero imprimir el resultado
//     var parrafo = document.getElementById('pResultado');
//     // Lo muestro porque está oculto por defecto
//     parrafo.style.display = 'block';
//     // Y lo relleno con el texto que quiero mostrar
//     parrafo.innerHTML = resultado + "€ por persona";

//     // Imprimimos los datos en la consola
//     console.log(cuenta + " €");
// }