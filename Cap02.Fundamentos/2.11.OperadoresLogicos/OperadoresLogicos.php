<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cap. 2. Fundamentos</title>
</head>
<body>
    <h1>
        2. Fundamentos de JavaScript con Kantor (2024)
    </h1>
    <h2>
        2.11. Operadores Lógicos
    </h2>
    <h3>
        2.11.1. EJERCICIO: ¿Cuál es el resultado de OR?
    </h3>
    <p>
        ¿Cuál será la salida del siguiente código?
    </p>
    <code>
        alert( null || 2 || undefined );
    </code>
    <br><br><br>    


    <h3>
        2.11.2. EJERCICIO: ¿Cuál es el resultado de las alertas aplicadas al operador OR?
    </h3>
    <p>
        ¿Cuál será la salida del siguiente código?
    </p>
    <code>
        alert( alert(1) || 2 || alert(3) );
    </code>
    <br><br><br>


    <h3>
        2.11.3. EJERCICIO: ¿Cuál es el resultado de AND?
    </h3>
    <p>
        ¿Cuál será la salida del siguiente código?
    </p>
    <code>
        alert( 1 && null && 2 );
    </code>
    <br><br><br>


    <h3>
        2.11.4. EJERCICIO: ¿Cuál es el resultado de las alertas aplicadas al operador AND?
    </h3>
    <p>
        ¿Cuál será la salida del siguiente código?
    </p>
    <code>
        alert( alert(1) && alert(2) );
    </code>
    <br><br><br>


    <h3>
        2.11.5. EJERCICIO: El resultado de OR AND OR
    </h3>
    <p>
        ¿Cuál será el resultado?
    </p>
    <code>
        alert( null || 2 && 3 || 4 );
    </code>
    <br><br><br>


    <h3>
        2.11.6. EJERCICIO: Comprueba el rango por dentro
    </h3>
    <p>
        Escribe una condición <code>if</code> para comprobar que <code>age</code> (edad) SI está entre <code>14</code> y <code>90</code> de forma inclusiva.
    </p>
    <p>
        “Inclusivo” significa que <code>age</code> puede llegar a ser uno de los extremos, <code>14></code> o <code>90</code>.
    </p>
    <br><br><br>


    <h3>
        2.11.7. EJERCICIO: Comprueba el rango por fuera
    </h3>
    <p>
        Escribe una condición <code>if</code> para comprobar que <code>age</code> (edad) NO está entre <code>14</code> y <code>90</code> de forma inclusiva.
    </p>
    <p>
        Crea dos variantes: la primera usando NOT <code>!</code> , y la segunda sin usarlo.
    </p>
    <br><br><br>


    <h3>
        2.11.8. EJERCICIO: Una pregunta acerca de "if"
    </h3>
    <p>
        ¿Cuáles de estos <code>alert()</code> va a ejecutarse?
    </p>
    <p>
        ¿Cuáles serán los resultados de las expresiones dentro de <code>if(...)</code>?
    </p>
    <pre><code>
        if (-1 || 0) {alert( "primero" )};
        if (-1 && 0) {alert( "segundo" )};
        if (null || -1 && 1) {alert( "tercero" )};
    </code></pre>
    <br><br><br>


    <h3>
        2.11.9. EJERCICIO: Comprueba el inicio de sesión
    </h3>
    <p>
        Escribe un código que pregunte por el inicio de sesión con <code>propmt</code>.
    </p>
    <p>
        Si el visitante ingresa <code>"Admin"</code> , entonces <code>prompt</code> (pregunta) por una contraseña,
    </p>
    <p>
        La contraseña se comprueba de la siguiente manera:
    </p>
    <ul>
        <li>
            Si es igual a “TheMaster”, entonces muestra “Bienvenido!”,
        </li>
        <li>
            Si es otra cadena de texto – muetra “Contraseña incorrecta”,
        </li>
        <li>
            Para una cadena de texto vacía o una entrada cancelada, muestra “Cancelado.”
        </li>
    </ul>
    <br><br><br>    

    <script src="carpetaJS/ejercicioOperadoresLogicos.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>