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
        2.14. Condicional: switch
    </h2>
    <h3>
        2.14.1. EJERCICIO: Reescribe el "switch" en un "if"
    </h3>
    <p>
        Re-escribe el código utilizando <code>if..else</code> que corresponda al siguiente <code>switch</code>:
    </p>
    <pre><code>
        switch (navegador) {
            case 'Edge':
                alert( "¡Tienes Edge!" );
                break;
            case 'Chrome':
            case 'Firefox':
            case 'Safari':
            case 'Opera':
                alert( 'Esta bien, soportamos estos navegadores también' );
                break;
            default:
            alert( '¡Esperamos que esta página se vea bien!' );
        }
    </code></pre>
    <br><br><br>
    

    <h3>
        2.14.2. EJERCICIO: Reescribe "if" en "switch"
    </h3>
    <p>
        Re-escribe el código debajo utilizando solo un argumento <code>switch</code>:
    </p>
    <pre><code>
    let a = +prompt('a?', '');
    
    if (a == 0) {
        alert( 0 );
    }
    if (a == 1) {
        alert( 1 );
    }
    if (a == 2 || a == 3) {
        alert( '2,3' );
    }
    </code></pre>
    <br><br><br>


    <script src="carpetaJS/ejercicioSwitch.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>