
const coche = {
    marca:"Renaul",
    modelo:"Magane",
    color:"gris"
}

// definicion y creacion de un objeto

const persona = {
    nombre:"Dafne",
    apellido:"Ribera",
    edad: 21,
    // aqui se aplica un metodo y con el this buscamos 
    nombreCompleto: function() {
        return this.nombre + ' ' + this.apellido;  
    }
}

// acceso a las propidades
document.querySelector('#pNombre').innerHTML = persona.nombre + ' ' + persona.apellido;

document.querySelector('#pEdad').innerHTML = 'tiene ' + persona.edad + ' años de edad';

document.querySelector('#pMetodo').innerHTML = persona.nombreCompleto();





