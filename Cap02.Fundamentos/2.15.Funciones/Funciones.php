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
        2.15. Funciones
    </h2>
    <h3>
        2.15.1. EJERCICIO: ¿Es "else" requerido?
    </h3>
    <p>
        La siguiente función devuelve <code>true</code> si el parámetro <code>age</code> es mayor a <code>18</code> (<code>age > 18</code>).
    </p>
    <p>
        De lo contrario, solicita una confirmación y devuelve su resultado:
    </p>
    <pre><code>
        function checkAge(age) {
            if (age > 18) {
                return true;
            } else {
                // ...
                return confirm('¿Tus padres te permitieron?');
            }
        }
    </code></pre>
    <p>
        ¿Funcionará la función de manera diferente si se borra <code>else</code>?
    </p>
    <pre><code>
        function checkAge(age) {
            if (age > 18) {
                return true;
            }
            // ...
            return confirm('¿Tus padres te permitieron?');
        }
    </code></pre>
    <br><br><br>
    

    <h3>
        2.15.2. EJERCICIO: Reescribe la función utilizando '<code>?</code>' o '<code>||</code>'
    </h3>
    <p>
        La siguiente función devuelve <code>true</code> si el parámetro <code>age</code> es mayor que <code>18</code>.
    </p>
    <p>
        De lo contrario, solicita una confirmación y devuelve su resultado.
    </p>
    <pre><code>
        function checkAge(age) {
            if (age > 18) {
                return true;
            } else {
                return confirm('¿Tienes permiso de tus padres?');
            }
        }
    </code></pre>
    <br><br><br>
    <p>
        Reescríbela para realizar lo mismo, pero sin <code>if</code>, en una sola linea.
    </p>
    <ol>
        Haz dos variantes de la función <code>checkAge</code>:
        <li>
            Usando un operador de signo de interrogación <code>?</code>
        </li>
        <li>
            Usando OR <code>||</code>
        </li>
    </ol>
    <br><br><br>


    <h3>
        2.15.3. EJERCICIO: Función <code>min(a, b)</code>
    </h3>
    <p>
        Escriba una función <code>min(a,b)</code> la cual devuelva el menor de dos números <code>a</code> y <code>b</code>.
    </p>
    <p>
        Por ejemplo:
    </p>
    <pre><code>
        min(2, 5) &rarr; 2
        min(3, -1) &rarr; -1
        min(1, 1) &rarr; 1
    </code></pre>
    <br><br><br>


    <h3>
        2.15.4. EJERCICIO: Función <code>pow(x, n)</code>
    </h3>
    <p>
        Escriba una función <code>pow(x,n)</code> que devuelva <code>x</code> como potencia de <code>n</code>.
    </p>
    <p>
        O, en otras palabras, multiplique <code>x</code> por si mismo <code>n</code> veces y devuelva el resultado.
    </p>                                     
    <pre><code>
        pow(3, 2) = 3 * 3 = 9
        pow(3, 3) = 3 * 3 * 3 = 27
        pow(1, 100) = 1 * 1 * ...* 1 = 1
    </code></pre>
    <p>
        PD: En esta tarea, la función solo debe admitir valores naturales de <code>n</code> : enteros desde <code>1</code>.
    </p>
    <br><br><br>


    <script src="carpetaJS/ejercicioFunciones.js">
        // Si se establece el atributo "src=", el contenido dentro del script se ignora
        alert("¡Hola mundo!\n¡Soy un script de Javascript incrustado en el archivo .php (o .html)!\n(Usted disculpe la redundancia)");
    </script>
</body>
</html>