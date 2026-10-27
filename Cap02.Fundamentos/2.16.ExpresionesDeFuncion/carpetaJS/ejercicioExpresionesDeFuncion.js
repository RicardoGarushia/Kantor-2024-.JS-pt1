/*
2.16. EXPRESIONES DE FUNCIÓN Y CALLBACKS
*/

// 1. Ejemplo de Expresión de Función asignada a variable
const saludar = function() {
    alert("¡Hola desde una Expresión de Función!");
};

// 2. Ejemplo de función con Callbacks
function preguntar(pregunta, siOk, siCancelar) {
    if (confirm(pregunta)) {
        siOk();
    } else {
        siCancelar();
    }
}

// Ejemplo de uso pasando funciones anónimas como callbacks:
/*
preguntar(
    "¿Deseas continuar estudiando JavaScript?",
    function() { alert("¡Excelente decisión!"); },
    function() { alert("Tomemos un descanso."); }
);
*/


/* 
2.16.1. EJERCICIO 1: Identificación de Callbacks
*/
function procesarEntrada(mensaje, callback) {
    let nombre = prompt(mensaje);
    if (nombre) {
        callback(nombre);
    }
}

/*
Ejemplo de ejecución (descomentar para probar):
procesarEntrada("Ingresa tu nombre:", function(nombre) {
    alert(`Hola, ${nombre}! Bienvenido al estudio de Callbacks.`);
});
*/


/* 
2.16.2. EJERCICIO 2: Conversión a Expresión con Callbacks
*/
const ejecutarOperacion = function(a, b, operacionCallback) {
    let resultado = a + b;
    operacionCallback(resultado);
};

/*
Ejemplo de ejecución (descomentar para probar):
ejecutarOperacion(10, 15, function(res) {
    alert("La suma procesada mediante callback es: " + res);
});
*/