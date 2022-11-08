function clock() {
    let fecha = new Date();

    let hora = fecha.getHours();
    let minutos = fecha.getMinutes();
    let segundos = fecha.getSeconds();
    let contexto = "AM";

    let reloj = document.getElementById("pantallaReloj");

    if (hora > 12) {
        hora = hora - 12;
        contexto = 'PM';
        
    }

    if (hora < 10) {
        hora = '0' + hora;
        
    }

    if (minutos < 10) {
        minutos = '0' + minutos; 
        
    }

    if (segundos < 10) {
        segundos = '0' + segundos;
        
    }

    let texto = hora + ':' + minutos +':' + segundos + ' ' + contexto;

    reloj.innerHTML = texto;

    setTimeout(clock, 1000);

}

function displayDate() {
    let fecha = new Date();

    let diaSemana = fecha.getDay();
    let diaMes = fecha.getDate();
    let mes = fecha.getMonth();
    let year = fecha.getFullYear();

    let texto = '';

    const dias = [
        "domingo", 
        "lunes",
        "martes",
        "miércoles",
        "jueves",
        "viernes",
        "sábado"
    ];
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
    ];

    texto = dias[diaSemana] + ', ' + diaMes + ' de ' + meses[mes] + ' de ' + year;

    document.getElementById('pantallaFecha').innerHTML = texto;
}

clock();

displayDate();
