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
        2.17. Funciones Flecha: lo básico
    </h2>
    <h3>
        2.17.1. EJERCICIO: Reescribe con funciones de flecha
    </h3>
    <p>
        Reemplace las expresiones de función con funciones de flecha en el código a continuación:
    </p>
    <pre><code>
        function ask(question, yes, no) {
            if (confirm(question)) yes();
            else no();
        }
        
        ask(
            "Do you agree?",
            function() { alert("You agreed."); },
            function() { alert("You canceled the execution.");}
        );
    </code></pre>
    <br><br><br>    


    <script src="carpetaJS/ejercicioFunciones.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>