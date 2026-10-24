/*
2.13.1. EJERCICIO: Último valor del bucle
¿Cuál es el último valor mostrado en alerta por este código? ¿Por qué?
*/
/*
let i = 3;
while (i) {
alert( i-- );
}
/**/



/*
2.13.2. EJERCICIO: ¿Qué valores serán mostrados por el bucle "while"?
    Para cada iteración del bucle, escribe qué valor será impreso y luego compáralo con la solución.
    Ambos bucles ¿alert() los mismos valores?
*/
/*
// La forma de prefijo ++i (pre-incremento):
let A = 0;
while (++A < 5) {alert( A )};   // SALIDA: Hasta 4
// La forma de sufijo i++ (post-incremento):
let B = 0;
while (B++ < 5) {alert( B )};   // SALIDA: Hasta 5
/**/



/* 
2.9.3. EJERCICIO: ¿Qué valores serán mostrados por el bucle "for"?
    Para cada bucle, anota qué valores mostrará y luego compara las respuestas.
    Ambos bucles ¿muestran en "alert()" los mismos valores?
*/
/*
// La forma de prefijo ++i (pre-incremento):
for (let C = 0; C < 5; ++C){
    alert( C );
}   // SALIDA: Hasta 4
// La forma de sufijo i++ (post-incremento):
for (let D = 0; D < 5; D++){
    alert( D );
}   // SALIDA: Hasta 4
/**/



/*
2.9.4. EJERCICIO: Muestra números pares en el bucle
    Usa el bucle for para mostrar números pares del 2 al 10.
*/
/*
for (let E = 2; E <= 10; E = E + 2){
    alert( E );
}
/**/



/* 
2.10.5. EJERCICIO: Reemplaza for por while
*/
/* 
Reescribe el código cambiando el bucle for a while sin alterar su comportamiento (la salida debería ser la misma).
*/
for (let F = 0; F < 3; F++) {
    alert( `número ${F}!` ); 
}

let G = 0;
while (G < 3){
    alert( `número ${G}!` ); 
    G++;
}
