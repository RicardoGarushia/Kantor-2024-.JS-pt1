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
        2.8. Operadores básicos, matemáticas
    </h2>
    <h3>
        2.5.1. EJERCICIO: Formas sufijo (post-incremento) y prefijo (pre-incremento) 
    </h3>
    <p>
        ¿Cuáles son los valores finales de todas las variables <code>a</code> , <code>b</code> , <code>c</code> y <code>d</code>
        después del código a continuación?
    </p>
    <code>
        let a = 1, b = 1;                               <br>
        let c = ++a;        // SALIDA: c = ?; a = ?;    <br>
        let d = b++;        // SALIDA: d = ?; b = ?;    <br>
        
        // SALIDA       <br>
        alert( `Los valores de a, b, c y d son: ${a}, ${b}, ${c} y ${d}` ); <br>
    </code>
    <br><br><br>
    
    <h3>
        2.5.2. EJERCICIO: Resultado de Asignación 
    </h3>
    <p>
        ¿Cuáles son los valores de <code>a</code> y <code>x</code> después del código a continuación?
    </p>
    <code>
        let a = 2;                                      <br>
        let x = 1 + (a *= 2);   // SALIDA: a = 4; x =5; <br>

        // SALIDA       
        alert( `Los valores de a y x son: ${a} y ${x}` ); <br>
    </code>
    <br><br><br>

    <h3>
        2.5.3. EJERCICIO: Conversiones de Tipos 
    </h3>
    <p>
        ¿Cuáles son los resultados de estas expresiones?
    </p>
    <code>
        "" + 1 + 0      // SALIDA: ?    <br>
        "" - 1 + 0      // SALIDA: ?    <br>
        true + false    // SALIDA: ?    <br>
        6 / "3"         // SALIDA: ?    <br>
        "2" * "3"       // SALIDA: ?    <br>
        4 + 5 + "px"    // SALIDA: ?    <br>
        "$" + 4 + 5     // SALIDA: ?    <br>
        "4" - 2         // SALIDA: ?    <br>
        "4px" - 2       // SALIDA: ?    <br>
        " -9 " + 5      // SALIDA: ?    <br>
        " -9 " - 5      // SALIDA: ?    <br>
        null + 1        // SALIDA: ?    <br>
        undefined + 1   // SALIDA: ?    <br>
        " \t \n" - 2    // SALIDA: ?    <br>
        alert( `Los valores de a y x son: ${a} y ${x}` ); <br>
    </code>
    <br><br><br>

    <h3>
        2.5.4. EJERCICIO: Corregir la Adición
    </h3>
    <p>
        Aquí hay un código que le pide al usuario dos números y muestra su suma.
    </p>
    <p>
        Funciona incorrectamente.
    </p>
    <p>
        El resultado en el ejemplo a continuación es 12 (para valores de
captura predeterminados).
    </p>
    <p>
        ¿Por qué? Arreglalo. El resultado debería ser 3 .
    </p>
    <code>
        let a = prompt("¿Primer número?", 1);   <br>
        let b = prompt("¿Segundo número?", 2);  <br>
        alert(a + b);   // SALIDA: 12           <br>
    </code>

    <script src="carpetaJS/ejercicioOperadoresBasicos.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>