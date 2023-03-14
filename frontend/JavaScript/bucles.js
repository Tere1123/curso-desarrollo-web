const display = document.getElementById('display');

let texto = '';

for (let i = 4; i < 100; i = i + 4) {
    texto += i + '<br>';
}

display.innerHTML = texto;
console.log(texto);

texto = '';
// imprimir los numeros  pares del 2 al 100, colocando en
// negrita los que sean multiplo de 5
for (let i = 2; i <= 100; i = i + 2) {

    if (i % 5 == 0) {
        texto += '<b>' + i + '</b><br>';
    } else {
        texto += i + '<br>';
    }

}

//si tienes un bucle infinito la pagina no te carga
display.innerHTML = texto;