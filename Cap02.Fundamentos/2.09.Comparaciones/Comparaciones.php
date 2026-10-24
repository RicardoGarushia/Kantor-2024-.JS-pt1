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
        2.9. Comparaciones
    </h2>
    <h3>
        2.9.1. EJERCICIO: Comparaciones
    </h3>
    <p>
        ¿Cuál será el resultado de las siguientes expresiones?
    </p>
    <code>
        let A = 5 > 4;                  // (1)  <br>
        let B = "apple" > "pineapple";  // (2)  <br>
        let C = "2" > "12";             // (3)  <br>
        let D = undefined == null;      // (4)  <br>
        let E = undefined === null;     // (5)  <br>
        let F = null == "\n0\n";        // (6)  <br>
        let G = null === +"\n0\n";      // (7)  <br><br>
        
        // SALIDA       <br>
        alert( `Los resultados son: ${A}, ${B}, ${C}, ${D}, ${E}, ${F} y ${G}` ); <br>
    </code>
    <br><br><br>
    
    <h3>
        Análisis del Ejercicio de Comparaciones
    </h3>
    <ol>
        <li>
            <code>
                let A = 5 > 4; &rarr; true
            </code>
            <ul>
                <li>
                    Explicación: Es una comparación numérica directa entre dos números. Como 5 es mayor que 4, el resultado booleano es verdadero.
                </li>
            </ul>
        </li>
        <li>
            <code>
                let B = "apple" > "pineapple"; &rarr; false
            </code>
            <ul>
                <li>
                    Explicación: Las cadenas se comparan lexicográficamente (carácter por carácter en orden Unicode). Al comparar el primer carácter, 'a' (de apple) es menor que 'p' (de pineapple), por lo que la condición se rompe de inmediato y es falsa.
                </li>
            </ul> 
        </li>
        <li>
            <code>
                let C = "2" > "12"; &rarr; true
            </code>
            <ul>
                <li>
                    Explicación: Al ser una comparación entre strings, se evalúa el primer carácter de cada uno. El carácter '2' tiene un valor mayor en la tabla Unicode que el carácter '1' (el primer carácter de "12"). Por lo tanto, "2" es considerado "mayor" que "12".
                </li>
            </ul>
        </li>
        <li>
            <code>
                let D = undefined == null; &rarr; true
            </code>
            <ul>
                <li>
                    Explicación: Como menciona el manual, undefined y null forman una "pareja dulce" bajo la igualdad no estricta (==): son iguales entre sí, pero no equivalen a ningún otro valor.
                </li>
            </ul>
        </li>
        <li>
            <code>
                let E = undefined === null; &rarr; false
            </code>
            <ul>
                <li>
                    Explicación: El operador de igualdad estricta (===) no realiza conversiones de tipo. Como undefined y null pertenecen a tipos de datos completamente distintos, el resultado es falso.
                </li>
            </ul> 
        </li>
        <li>
            <code>
                let F = null == "\n0\n"; &rarr; false
            </code>
            <ul>
                <li>
                    Explicación: Aunque en algunos contextos matemáticos null se convierte a 0, para el operador de igualdad suelta (==) null solo es igual a undefined. No se convierte a strings ni a otros números, por lo que da falso.
                </li>
            </ul>
        </li>
        <li>
            <code>
                let G = null === +"\n0\n"; &rarr; false
            </code>
            <ul>
                <li>
                    Explicación: Al usar igualdad estricta (===), los tipos no coinciden (null es de tipo object tras el error histórico de JS, mientras que +"\n0\n" resulta en un number). Por lo tanto, retorna falso de inmediato sin importar el valor numérico.
                </li>
            </ul>
        </li>
    </ol>


    <script src="carpetaJS/ejercicioComparaciones.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>