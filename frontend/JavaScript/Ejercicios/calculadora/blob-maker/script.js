// el codigo numeroco del border radius
let outputcode = document.querySelector('.output-code');

// array con los sliders
const sliders = document.querySelectorAll('input[type="range"]');
// se rompe el array para asignar cada eventa a cada silder
sliders.forEach(function(slider) {
    slider.addEventListener('change', createBlob);
});

const inputs = document.querySelectorAll('input[type="number"]');
// signamos eventos a los input

inputs.forEach(function(input) {
    input.addEventListener('change', createBlob);
});

// funcion que crea una bob cada ves que alteramos el slider
function createBlob() {
    let radiusOne = sliders[0].value;
    let radiusTwo = sliders[1].value;
    let radiusThree = sliders[2].value;
    let radiusFour = sliders[3].value;

    // recogemos los valores numericos de la altura y anchura

    let blobheight = inputs[0].value;
    let blobwidth = inputs[1].value;

    // creamos una variable que reuna todos los valores
    
    let borderRadius = `${radiusOne}% ${100 - radiusOne}% ${100 - radiusThree}% ${radiusThree}% /
    ${radiusFour}% ${radiusTwo}% ${100 - radiusTwo}% ${100 - radiusFour}%`

    
    document.querySelector('.output').style.cssText = 
    `border-radius:${borderRadius};
    height:${blobheight}px;
    width:${blobwidth}px;`;

    // imprimimos en pantalla

    document.querySelector('.output-code').innerHTML = `${borderRadius}`;

}

function copy() {
    var r = document.createRange();
    r.selectNode(outputcode);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(r);
    document.execCommand('copy');
    window.getSelection().removeAllRanges();

}