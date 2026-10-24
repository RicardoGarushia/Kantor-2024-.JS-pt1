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
    <code>
        let i = 3;          <br>
        while (i) {         <br>
            alert( i-- );   <br>
        }
    </code>
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
                <code>
                    let A = 0;                      <br>
                    while (++A < 5) {alert( A )};   <br>
                </code>
            </li>
            <li>
                // La forma de sufijo <code>i++</code> (post-incremento): <br>
                <code>
                    let B = 0;                      <br>
                    while (B++ < 5) {alert( B )};   <br>
                </code>
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
                <code>
                    for (let i = 0; i < 5; ++i){    <br>
                    alert( i );                     <br>
                    }                               <br>
                </code>
            </li>
            <li>
                // La forma de sufijo <code>i++</code> (post-incremento): <br>
                <code>
                    for (let i = 0; i < 5; i++){    <br>
                    alert( i );                     <br>
                    }                               <br>
                </code>
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
    <code>
        for (let i = 0; i < 3; i++) {   <br>
            alert( `número ${i}!` );    <br>
        }                               <br>
    </code>
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


    <script src="carpetaJS/ejercicioWhileyFor.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>