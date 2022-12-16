let txt = 'abcdefghijklmnopqrmnstuvwxyz'
let longitud = txt.length;
let texto = document.getElementById('texto');

texto.innerHTML = longitud;

let corte = txt.slice(15,19);
let pcorte = document.getElementById('pcorte');
pcorte.innerHTML = corte;

let str = 'Tere "Terere" Herrera';
let cort = str.slice(6,12);
let cortp = document.getElementById('cort');
cortp.innerHTML = cort;


let frase = 'La mejor alumna de clase es Rebeca';
let replaced = frase.replace("Rebeca","Angela");
let pRep = document.querySelector('#pReplace');
pRep.innerHTML = replaced;

let string = 'hoy es Viernes';
let minus = string.toLocaleLowerCase();
let pMinus = document.querySelector('#pMinus');

let mayus = string.toLocaleUpperCase();
let pMayus = document.querySelector('#pMayus');

pMayus.innerHTML = minus;
pMinus.innerHTML = mayus;


// contatenar strings
//si tengo un nombre = 'Roman'
// si tengo apellido  = 'Gomez'

let nombre = 'Roman';
let apellido = 'Gomez';
let pContac = document.querySelector('#pContact')

pContact.innerHTML = nombre + ' '+ apellido


//charat()

let pChar = document.querySelector('#pCharAt');
pChar.innerHTML = apellido.charAt(3);

let name = 'santi';
pChar.innerHTML = name.charAt(0).toLocaleUpperCase + name.slice(1);


// trnasformar en un array

let strLista = 'German,Roman,Angela,Tere,Santi';
let arrayLista = strLista.split(',');
console.log(arrayLista);
let pSplit = document.querySelector('#split');
pSplit.innerHTML = arrayLista;







