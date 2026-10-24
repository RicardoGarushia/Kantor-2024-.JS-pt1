/*
2.9.1. EJERCICIO: if (un string con cero)
    ¿Se mostrará el alert()?
*/

if ("0") {
    alert( 'Hello' );
}

/*
2.9.2. EJERCICIO: El nombre de JavaScript
    Usando el constructor if..else , escribe el código que pregunta: ‘¿Cuál es el nombre “oficial” de JavaScript?’
    Si el visitante escribe “ECMAScript”, entonces muestra: “¡Correcto!”, de lo contrario muestra: “¿No lo sabes? ¡ECMAScript!”
*/

let respuesta = prompt(String("¿Cuál es el nombre “oficial” de JavaScript?"));

if (respuesta === "ECMAScript"){
    alert("¡Correcto!");
} else {
    alert("¿No lo sabes? ¡ECMAScript!");
}

/* 
2.9.3. EJERCICIO: ¿El número es "positivo", "negativo" o "neutro"?
    Usa el condicional "if..else if...else", para diferenciar si un número ingresado es "positivo" (>0), "negativo" (<0) o "neutro" (===0).
    El visitante escribe/ingresa el número a evaluar.
*/

let numero = Number(prompt("Ingresa un número para evaluar si es “positivo“ (>0), “negativo“ (<0) o “neutro“ (=0)"));

if (numero === 0){
    alert(`El número que ingresaste es “neutro“ dado que es el ${numero} (cero) (Interpolación de cadenas)`); 
} else if (numero > 0) {
    alert(`El número que ingresaste es “positivo“ dado que es el ${numero} (Interpolación de cadenas)`); 
} else {
    alert(`El número que ingresaste es “negativo“ dado que es el ${numero} (Interpolación de cadenas)`); 
}