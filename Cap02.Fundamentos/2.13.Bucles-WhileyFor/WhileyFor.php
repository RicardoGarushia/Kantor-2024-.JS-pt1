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
        2.13. Bucles: while y for
    </h2>
    <h3>
        2.13.1. EJERCICIO: Último valor del bucle
    </h3>
    <p>
        ¿Cuál es el último valor mostrado en alerta por este código? ¿Por qué?
    </p>
    <pre><code>
        let i = 3;
        while (i) {
            alert( i-- );
        }
    </code></pre>
    <br><br><br>
    

    <h3>
        2.13.2. EJERCICIO: ¿Qué valores serán mostrados por el bucle <code>while</code>?
    </h3>
    <p>
        Para cada iteración del bucle, escribe qué valor será impreso y luego compáralo con la solución.
    </p>
    <p>
        Ambos bucles ¿<code>alert()</code> los mismos valores?
        <ol>
            <li>
                // La forma de prefijo <code>++i</code> (pre-incremento): <br>
                <pre><code>
                    let A = 0;
                    while (++A < 5) {alert( A )};
                </code></pre>
            </li>
            <li>
                // La forma de sufijo <code>i++</code> (post-incremento): <br>
                <pre><code>
                    let B = 0;
                    while (B++ < 5) {alert( B )};
                </code></pre>
            </li>
        </ol>
    </p>
    <br><br><br>


    <h3>
        2.13.3. EJERCICIO: ¿Qué valores serán mostrados por el bucle <code>for</code>?
    </h3>
    <p>
        Para cada bucle, anota qué valores mostrará y luego compara las respuestas.
    </p>
    <p>
        Ambos bucles ¿muestran en <code>alert()</code> los mismos valores?
        <ol>
            <li>
                // La forma de prefijo <code>++i</code> (pre-incremento): <br>
                <pre><code>
                    for (let i = 0; i < 5; ++i){
                        alert( i );
                    }
                </code></pre>
            </li>
            <li>
                // La forma de sufijo <code>i++</code> (post-incremento): <br>
                <pre><code>
                    for (let i = 0; i < 5; i++){
                        alert( i );
                    }
                </code></pre>
            </li>
        </ol>
    </p>
    <br><br><br>


    <h3>
        2.13.4. EJERCICIO: Muestra números pares en el bucle
    </h3>
    <p>
        Usa el bucle <code>for</code> para mostrar números pares del <code>2</code> al <code>10</code>.
    </p>
    <br><br><br>


    <h3>
        2.10.5. EJERCICIO: Reemplaza <code>for</code> por <code>while</code>
    </h3>
    <p>
        Reescribe el código cambiando el bucle <code>for</code> a <code>while</code> sin alterar su comportamiento (la salida debería ser la misma).
    </p>
    <pre><code>
        for (let i = 0; i < 3; i++) {
            alert( `número ${i}!` );
        }
    </code></pre>
    <br><br><br>
    

    <h3>
        2.13.6. EJERCICIO: Repite hasta que la entrada sea correcta
    </h3>
    <p>
        Escribe un bucle que solicite un número mayor que <code>100</code>. Si el usuario ingresa un número menor a <code>100</code> pídele que ingrese un valor de nuevo.
    </p>
    <p>
        El bucle debe pedir un número hasta que el usuario ingrese un número mayor que <code>100</code> o bien cancele la entrada/ingrese una linea vacía.
    </p>
    <p>
        Aquí podemos asumir que el usuario solo ingresará números. No hay necesidad de implementar un manejo especial para entradas no numéricas en esta tarea.
    </p>
    <br><br><br>

 
    <h3>
        2.13.7. EJERCICIO: Muestra números primos
    </h3>
    <p>
        Un número entero mayor que <code>1</code> es llamado primo si no puede ser dividido sin un resto por ningún número excepto <code>1</code> y él mismo.
    </p>
    <p>
        En otras palabras, <code>n > 1</code> es un primo si no puede ser divido exactamente por ningún número excepto <code>1</code> y <code>n</code> .
    </p>
    <p>
        Por ejemplo, <code>5</code> es un primo, porque no puede ser divido exactamente por <code>2</code> , <code>3</code> y <code>4</code>.
    </p>
    <p>
        Escribe el código que muestre números primos en el intervalo de <code>2</code> a <code>n</code>.
    </p>
    <p>
        Para <code>n = 10</code> el resultado será <code>2</code>, <code>3</code>, <code>5</code>, <code>7</code>.
    </p>
    <p>
        PD. El código debería funcionar para cualquier n , no debe estar programado para valores fijos.
    </p>
    <br><br><br>


    <script src="carpetaJS/ejercicioWhileyFor.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>