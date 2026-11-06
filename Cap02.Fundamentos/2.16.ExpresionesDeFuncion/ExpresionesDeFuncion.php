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
        2.16. Expresiones de función (Function Expressions) y Callbacks
    </h2>
    <h3>
        2.16.1. Expresiones de Función vs Declaraciones
    </h3>
    <p>
        En JavaScript, las funciones son valores especiales. Pueden asignarse a variables igual que números o cadenas de texto.
    </p>


    <h3>
        2.16.2. Funciones Callback (Devolución de llamada)
    </h3>
    <p>
        Un <em>callback</em> es una función que se pasa a otra función como argumento para ser ejecutada más adelante.
    </p>


    <h3>
        2.16.3. EJERCICIOS PRÁCTICOS
    </h3>

    <h4>
        Ejercicio 1: Identificación de Callbacks
    </h4>
    <p>
        Analiza el flujo de la función <code>procesarEntrada</code> y cómo se pasa la función anónima como argumento.
    </p>
    <pre><code>
        function procesarEntrada(mensaje, callback) {
            let nombre = prompt(mensaje);
            callback(nombre);
        }
    </code></pre>

    <h4>
        Ejercicio 2: Conversión a Expresión con Callbacks
    </h4>
    <p>
        Transformación de una función tradicional a una Expresión de Función que recibe un callback para procesar el resultado.
    </p>
    <pre><code>
        const ejecutarOperacion = function(a, b, operacionCallback) {
            let resultado = a + b;
            operacionCallback(resultado);
        };
    </code></pre>
    <br><br><br>


    <script src="carpetaJS/ejercicioFunciones.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>