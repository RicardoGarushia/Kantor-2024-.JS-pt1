/*
2.15.1. EJERCICIO: ¿Es "else" requerido?
    La siguiente función devuelve "true" si el parámetro "age" es mayor a "18" (age > 18).
    De lo contrario, solicita una confirmación y devuelve su resultado:
*/
/*
        function checkAge(age) {
            if (age > 18) {
                return true;
            } else {
                // ...
                return confirm('¿Tus padres te permitieron?');
            }
        }
/**/
/*
    ¿Funcionará la función de manera diferente si se borra else?    RESPUESTA: NO FUNCIONARÄ DE FORMA DIFERENTE
*/
/*
        function checkAge(age) {
            if (age > 18) {
                return true;
            }
            // ...
            return confirm('¿Tus padres te permitieron?');
        }
/**/
/*
    ¿Hay alguna diferencia en el comportamiento de estas dos variantes? RESPUESTA: NINGUNA.
*/


/*
2.15.2. EJERCICIO: Reescribe la función utilizando '?' o '||'
    La siguiente función devuelve true si el parámetro age es mayor que 18.
    De lo contrario, solicita una confirmación y devuelve su resultado.
*/
/*
        function checkAge(age) {
            if (age > 18) {
                return true;
            } else {
                return confirm('¿Tienes permiso de tus padres?');
            }
        }
/**/
/*
    Reescríbela para realizar lo mismo, pero sin if, en una sola linea.
        Haz dos variantes de la función checkAge:
            1. Usando un operador de signo de interrogación ?
            2. Usando OR ||
*/


/*
function checkAge(age) {
  return (age > 18) ? true : confirm('¿Tienes permiso de tus padres?');
}
/**/

/*
function checkAge(age) {
  return (age > 18) || confirm('¿Tienes permiso de tus padres?');
}
/**/



/* 
2.15.3. EJERCICIO: Función min(a, b)
    Escriba una función min(a,b) la cual devuelva el menor de dos números a y b.
    Por ejemplo:
        min(2, 5) → 2
        min(3, -1) → -1
        min(1, 1) → 1
*/
/*
function min(a, b) {
    return a < b ? a : b;
}
/**/



/* 
2.15.4. EJERCICIO: Función pow(x, n)
    Escriba una función pow(x,n) que devuelva x como potencia de n.
    O, en otras palabras, multiplique x por si mismo n veces y devuelva el resultado.

        pow(3, 2) = 3 * 3 = 9
        pow(3, 3) = 3 * 3 * 3 = 27
        pow(1, 100) = 1 * 1 * ...* 1 = 1
*/
/*
function pow(x, n) {
  if (n < 1 || !Number.isInteger(n)) {
    alert(`La potencia ${n} no es soportada, use un número entero mayor o igual a 1.`);
    return;
  }

  let resultado = x;

  for (let i = 1; i < n; i++) {
    resultado *= x;
  }

  return resultado;
}
/**/