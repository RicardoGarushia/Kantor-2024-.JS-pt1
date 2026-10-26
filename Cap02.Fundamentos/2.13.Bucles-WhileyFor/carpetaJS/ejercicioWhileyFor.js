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
    Reescribe el código cambiando el bucle for a while sin alterar su comportamiento (la salida debería ser la misma).
*/
/*
for (let F = 0; F < 3; F++) {
    alert( `número ${F}!` ); 
}

let G = 0;
while (G < 3){
    alert( `número ${G}!` ); 
    G++;
}
/**/



/*
2.13.6. EJERCICIO: Repite hasta que la entrada sea correcta
    Escribe un bucle que solicite un número mayor que 100. Si el usuario ingresa un número menor a 100 pídele que ingrese un valor de nuevo.
    El bucle debe pedir un número hasta que el usuario ingrese un número mayor que 100 o bien cancele la entrada/ingrese una linea vacía.
    Aquí podemos asumir que el usuario solo ingresará números. No hay necesidad de implementar un manejo especial para entradas no numéricas en esta tarea.
*/
/*
// ENTRADA
let numberA = Number(prompt("Ingresa un número mayor a 100", 0));

// PROCESAMIENTO con while()
while (numberA < 100 && numberA){
    numberA = Number(prompt(`Se te pidió ingresar un número mayor a 100 y "${numberA}" no lo es.`, 0));
}

// SALIDA con while()
alert(`El numero mayor a 100 ingresado es: "${numberA}".`);

let numberB;

// PROCESAMIENTO con do-while()
do {
    numberB = Number(prompt("Ingresa un número mayor a 100", 0));
} while (numberB < 100 && numberB);

// SALIDA con while()
alert(`El numero mayor a 100 ingresado es: "${numberB}".`);
/**/



/* 
2.13.7. EJERCICIO: Muestra números primos
    Escribe el código que muestre números primos en el intervalo de 2 a n.
    Para n = 10 el resultado será 2, 3, 5, 7.
    PD. El código debería funcionar para cualquier n , no debe estar programado para valores fijos.
*/

let limite = Number(prompt("Ingresa el número límite (número >= 2) desde el cuál quieres conocer sus números primos:", 0));

// Etiquetamos al bucle principal con el apodo "patitoRegresaAca"
patitoRegresaAca:
for (let i = 2; i <= limite; i++) {

  // Este bucle interno prueba si 'i' es divisible por algún número menor que él
  for (let j = 2; j < i; j++) {
    
    if (i % j === 0) {
      // ¡SI encontramos un divisor! No es primo.
      // Así que usamos continue para saltar el resto y pasar al siguiente 'i' del bucle externo.
      continue patitoRegresaAca;
    }   
  }

  // Si el bucle interno terminó sin hacer el continue, significa que es primo
  alert(i); // Muestra: 2, 3, 5, 7
}
/**/