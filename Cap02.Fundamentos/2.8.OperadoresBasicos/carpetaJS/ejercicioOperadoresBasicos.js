// Declaración e inicialización de variables
let a = 1, b = 1;
let c = ++a;        // SALIDA: c = 2; a = 2;
let d = b++;        // SALIDA: d = 1; b = 2;

// SALIDA
alert( `Los valores de a, b, c y d son: ${a}, ${b}, ${c} y ${d}` );



// Declaración e inicialización de variables
let x = 2;
let z = 1 + (a *= 2);   // SALIDA: a = 4; x =5;

// SALIDA       
alert( `Los valores de x y z son: ${a} y ${z}` );




let numeroA = Number(prompt("¿Primer número?", 1));
let numeroB = Number(prompt("¿Segundo número?", 2));
alert(numeroA + numeroB);   // SALIDA: 12  

