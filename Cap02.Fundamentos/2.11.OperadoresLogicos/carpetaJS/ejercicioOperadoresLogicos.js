/*
2.11.1. EJERCICIO: ¿Cuál es el resultado de OR?
    ¿Cuál será la salida del siguiente código?
*/
// alert( null || 2 || undefined );    // SALIDA: 2


/*
2.11.2. EJERCICIO: ¿Cuál es el resultado de las alertas aplicadas al operador OR?
    ¿Cuál será la salida del siguiente código?
*/
// alert( alert(1) || 2 || alert(3) ); // SALIDA: 1 y 2


/*
2.11.3. EJERCICIO: ¿Cuál es el resultado de AND?
    ¿Cuál será la salida del siguiente código?
*/
// alert( 1 && null && 2 );                // SALIDA: null


/*
2.11.4. EJERCICIO: ¿Cuál es el resultado de las alertas aplicadas al operador AND?
    ¿Cuál será la salida del siguiente código?
*/
// alert( alert(1) && alert(2) );      // SALIDA: 1 y 2 y undefined 


/*
2.11.5. EJERCICIO: El resultado de OR AND OR?
    ¿Cuál será la salida del siguiente código?
*/
// alert( null || 2 && 3 || 4 );           // SALIDA: 3


/*
2.11.6. EJERCICIO: Comprueba el rango por dentro
    Escribe una condición if para comprobar que age (edad) SI está entre 14 y 90 de forma inclusiva.
    “Inclusivo” significa que age puede llegar a ser uno de los extremos, 14> o 90.
*/
/*
let age = Number(prompt("Ingresa tu edad para evaluar si están entre 14 y 90 años"));

if (age >= 14 && age <= 90){
    alert(`La edad que ingresaste ${age} SI está dentro del rango entre 14 y 90 años (Interpolación de cadenas)`); 
} else {
    alert(`La edad que ingresaste ${age} NO está dentro del rango entre 14 y 90 años (Interpolación de cadenas)`); 
}
*/


/*
2.11.7. EJERCICIO: Comprueba el rango por fuera
    Escribe una condición if para comprobar que age (edad) NO está entre 14 y 90 de forma inclusiva.
    Crea dos variantes: la primera usando NOT ! , y la segunda sin usarlo.
*/
/*
let edad = Number(prompt("Ingresa tu edad para evaluar si están entre 14 y 90 años"));

if (!(edad <= 14 || edad >= 90)){
    alert(`La edad que ingresaste ${edad} NO está dentro del rango entre 14 y 90 años`);
} else {
    alert(`La edad que ingresaste ${edad} SI está dentro del rango entre 14 y 90 años`);
}

if (edad <= 14 || edad >= 90){
    alert(`La edad que ingresaste ${edad} SI está dentro del rango entre 14 y 90 años`);
} else {
    alert(`La edad que ingresaste ${edad} NO está dentro del rango entre 14 y 90 años`);
}
*/


/*
2.11.8. EJERCICIO: Una pregunta acerca de "if"
    ¿Cuáles de estos alert() va a ejecutarse?
    ¿Cuáles serán los resultados de las expresiones dentro de if(...)?-949
*/
/*
if (-1 || 0) alert( "primero" );
if (-1 && 0) alert( "segundo" );
if (null || -1 && 1) alert( "tercero" );
*/


/*
2.11.9. EJERCICIO: Comprueba el inicio de sesión
    Escribe un código que pregunte por el inicio de sesión con propmt.
        Si el visitante ingresa "Admin" , entonces prompt (pregunta) por una contraseña,
            La contraseña se comprueba de la siguiente manera:
                Si es igual a “TheMaster”, entonces muestra “Bienvenido!”,
                Si es otra cadena de texto – muetra “Contraseña incorrecta”,
                Para una cadena de texto vacía o una entrada cancelada, muestra “Cancelado.”
*/
let userName = prompt("Ingresa tu nombre de usuario");

if (userName === "Admin"){
    let password = prompt("Ingresa tu contraseña");

    if (password === "TheMaster"){
        alert(`¡Bienvenido maestro!`);
    } else if (password === "" || password === null) {
        alert("Cancelado.");
    } else {
        alert(`¡Iros ALV!`);
    }
} else if (userName === "" || userName === null) {
    alert("Cancelado.");
} else {
    alert(`Nombre de usuario "${userName}" incorrecto. Cerrando sistema`);
}
