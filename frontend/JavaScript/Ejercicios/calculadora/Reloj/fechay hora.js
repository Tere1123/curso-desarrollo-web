let fecha = new Date();
document.getElementById('testDate').innerHTML = fecha;

// creando un string con objeto fecha

let fechaString = new Date('february 07, 1999 04:15:00');
let fechaStringShort = new Date('1999-02-07');

document.getElementById('dateString').innerHTML = fechaStringShort;

// con numero:
let fechaNum = new Date(2001, 06, 23);

document.getElementById('dateNumber').innerHTML = fechaNum;

// milisegundos:
setInterval(() => {
    document.getElementById('fechaMS').innerHTML = new Date().getTime();
}, 1);

document.getElementById('fechaMS2').innerHTML = new Date('1965-07-04').getTime();

// imprimir fechas con datestring

document.getElementById('fechaDateString').innerHTML = new Date().toDateString();

// metodod Get
// como construir un strig con la fecha que queramos
// hoy es lunes 07 nov de 2022

function getFecha() {
    let fecha = new Date();
    let diaSemana = fecha.getDay();// esto nos retornara al dia de la semana de 0 a 6
    let diaMes = fecha.getDate();
    let mes = fecha.getMonth();
    let year = fecha.getFullYear();
    // if (diaSemana = 0) {
    //     diaSeman = 'Domingo';
    // }
    // if (diaSemana = 1) {
    //     diaSemana = 'Lunes';
    // }

    // if (diaSemana = 2) {
    //     diaSeman = 'martes';
    // }

    // esto no es recomendable, no hace falta colocar un if para cada una, es mejor colocar un 
    // array[] este permite guardar varios tipos de datos
    const dias = [
        'domingo',
        'lunes',
        'martes',
        'miercoles',
        'jueves',
        'viernes',
        'sabado'
    ]

    // cada elemnto del array pertenecen a una posicion del indice

    const meses = [
        'enero',
        'febrero',
        'marzo',
        'abril',
        'mayo',
        'junio',
        'julio',
        'agosto',
        'septiembre',
        'octubre',
        'noviembre',
        'diciembre'
    ]

    texto = " Hoy es " + dias[diaSemana] 
    +" , "+ diaMes + " " + meses[mes] + ' ' + year;
    console.log(diaSemana)

    document.getElementById('fechaGet').innerHTML = texto;
}

getFecha();
  

 
  

