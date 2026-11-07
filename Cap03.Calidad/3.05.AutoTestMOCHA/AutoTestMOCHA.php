<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cap. 3. Calidad del Códigos</title>
</head>
<body>
    <h1>
        3. Calidad del Código con Kantor (2024)
    </h1>
    <h2>
        3.2. Estilo de Codificación
    </h2>
    <h3>
        3.2.1. EJERCICIO: Estilo pobre
    </h3>

    <ol>
        <li>
            ¿Qué hay de malo con el estilo de código a continuación?
        </li>
    </ol>

    <pre><code>
        function pow(x,n)
        {
            let result=1;
            for(let i=0; i < n ; i++) { result*=x; }
            return result;
        }

        let x = prompt("x?",''), n=prompt("n?",'');
        if (n<=0)
        {
            alert(`Power ${n} is not supported, please enter an integer number greater than zero`);
        }
        else
        {
            alert(pow(x,n))
        }
    </code></pre>
    <script src="carpetaJS/ejercicioEstilo.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>