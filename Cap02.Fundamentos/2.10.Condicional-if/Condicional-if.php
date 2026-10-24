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
        2.10. Ejecución condicional: if, '?'
    </h2>
    <h3>
        2.10.1. EJERCICIO: if (un string con cero)
    </h3>
    <p>
        ¿Se mostrará el alert()?
    </p>
    <code>
        if ("0") {              <br>
            alert( 'Hello' );   <br>
        }
    </code>
    <br><br><br>
    
    <h3>
        2.10.2. EJERCICIO: El nombre de JavaScript
    </h3>
    <p>
        Usa el condicional 
        <code>
            if..else
        </code>
        , escribe el código que pregunta: ‘¿Cuál es el nombre “oficial” de JavaScript?’
    </p>
    <p>
        Si el visitante escribe “ECMAScript”, entonces muestra: 
        <code>
            “¡Correcto!”, <br>
        </code>
        de lo contrario muestra: 
        <code>
            “¿No lo sabes? ¡ECMAScript!”
        </code>
    </p>
    <br><br><br>

    <h3>
        2.10.3. EJERCICIO: ¿El número es "positivo", "negativo" o "neutro"?
    </h3>
    <p>
        Usa el condicional 
        <code>
            if..else if...else
        </code>
        , para diferenciar si un número ingresado es "positivo" (&gt;0), "negativo" (&lt;0) o "neutro" (===0).
    </p>
    <p>
        El visitante escribe/ingresa el número a evaluar.
    </p>
    <br><br><br>

    <h3>
        2.10.4. EJERCICIO: Reescribe el 'if' como '?'
    </h3>
    <p>
        Reescriba esta condición 
        <code>
            if
        </code>
        usando el operador ternario 
        <code>
            '?'
        </code>
        :
    </p>
    <code>
        let result;             <br><br>

        if (a + b < 4) {        <br>
            result = 'Debajo';  <br>
        } else {                <br>
            result = 'Encima';  <br>
        }
    </code>
    <br><br><br>

    <h3>
        2.10.5. EJERCICIO: Reescribe el 'if..else' con '?'
    </h3>
    <p>
        Reescriba el
        <code>
            if..else
        </code>
            utilizando operadores ternarios múltiples
        <code>
            '?'
        </code>
    </p>
    <p>
        Para legibilidad, es recomendad dividirlo en múltiples lineas de código.
    </p>
    <code>
        let message;                        <br><br>
        
        if (login == 'Empleado') {          <br>
            message = 'Hola';               <br>
        } else if (login == 'Director') {   <br>
            message = 'Felicidades';        <br>
        } else if (login == '') {           <br>
            message = 'Sin sesión';         <br>
        } else {                            <br>
            message = '';                   <br>
        }
    </code>
    <br><br><br>

    <script src="carpetaJS/ejercicioCondicional-if.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>