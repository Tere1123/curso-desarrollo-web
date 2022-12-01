// se declaran las variables

let inputTextArea = document.getElementById("input-texarea");
let characCount = document.getElementById("charac-count");
let wordCount = document.getElementById("word-count");

inputTextArea.addEventListener('input',() => {
// creamos un evento donde nos cuarde el nuemro de caracteres escritos

    characCount.textContent = inputTextArea.value.length;
    // console.log(characCount.textContent, 'hola')

    // le decimos que a la constante inputTextArea le guarde
    //  el numero de letras pero sin espacios usando: trim().
    let palabras = inputTextArea.value.trim();
     // la constante wordCount utiliza la varia palabras y slipt
    // lo combierte en un array y con filter filtro cada palabra y la suma
    wordCount.textContent = palabras.split(/\s+/).filter((item) => item).length;

//  for (let index = 0; index < palabras.length; index++) {
//     const element = palabras[index];
    
//  }
})

