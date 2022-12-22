// esta line de codigo espera a que el documento se carge antes de ejecutarse

$(document).ready(function(){
// codigo jq
// selector de Jq
$('#tets').text('he cambiado el texto con JQ');

// const p = document.getElementById('test');
// p.innerHTML = 'otro cambio de texto'


const p = $('#test')
p.css('color','blue');

// crear un array apartir de numerosos elementos

const parrafos = $('p');
parrafos.css('fontSize','30px');

// ejemplo de selector

$('#btn').click(function() {
$('#div').toggleClass('big')
})

})

// aqui colocamos vanilla JS
// document.getElementById('test').style.color = 'red';

