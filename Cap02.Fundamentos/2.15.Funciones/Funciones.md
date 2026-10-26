# 2. Fundamentos de JavaScript

## 2.15. Funciones

A menudo necesitamos realizar acciones similares en muchos lugares de un script. Las funciones son los principales "bloques de construcción" del programa. Permiten que el código se llame muchas veces sin repetición.

---

### 2.15.1. Sintaxis básica

Para crear una función podemos usar una *declaración de función*.

```javascript
function mostrarMensaje() {
  alert('¡Hola a todos!');
}
```

Para llamar a la función y ejecutar su código:

```javascript
mostrarMensaje();
```

---

### 2.15.2. Variables locales y externas

* **Variables locales:** Una variable declarada dentro de una función solo es visible dentro de esa función.
* **Variables externas (Globales):** Una función puede acceder y modificar una variable externa. La variable externa solo se usa si no hay una local con el mismo nombre (sombreado de variables).

---

### 2.15.3. Parámetros y Valores predeterminados

Podemos pasar datos arbitrarios a las funciones utilizando parámetros.

```javascript
function mostrarMensaje(de, texto = "sin texto especificado") {
  alert(de + ": " + texto);
}

mostrarMensaje('Ann'); // Ann: sin texto especificado
```

---

### 2.15.4. Devolución de un valor (return)

Una función puede devolver un valor al código de llamada como resultado.

* Si una función no devuelve un valor, o si hay un `return` vacío, es lo mismo que si devolviera `undefined`.
* **Regla de oro:** Nunca agregues una nueva línea entre `return` y el valor devuelto, porque JavaScript insertará automáticamente un punto y coma implícito.

---

## Ejercicios Prácticos

### 2.15.1. EJERCICIO: ¿Es "else" requerido?

La siguiente función devuelve `true` si el parámetro `age` es mayor a `18`. De lo contrario, solicita una confirmación y devuelve su resultado:

```javascript
function checkAge(age) {
  if (age > 18) {
    return true;
  } else {
    // ...
    return confirm('¿Tus padres te permitieron?');
  }
}
```

**Pregunta:** ¿Funcionará la función de manera diferente si se borra el `else`?

```javascript
function checkAge(age) {
  if (age > 18) {
    return true;
  }
  // ...
  return confirm('¿Tus padres te permitieron?');
}
```

> **Respuesta:** **No**, no hay ninguna diferencia. En ambos casos, si `age > 18` se cumple, la ejecución alcanza el `return true` y sale inmediatamente de la función. El código restante solo se evalúa si la condición del `if` es falsa.

---

### 2.15.2. EJERCICIO: Reescribe la función utilizando '?' o '||'

Reescribe la función `checkAge` para realizar lo mismo que la anterior, pero sin usar `if` y en una sola línea.

#### Opción 1: Usando el operador ternario `?`
```javascript
function checkAge(age) {
  return (age > 18) ? true : confirm('¿Tienes permiso de tus padres?');
}
```

#### Opción 2: Usando el operador OR `||`
```javascript
function checkAge(age) {
  return (age > 18) || confirm('¿Tienes permiso de tus padres?');
}
```

---

### 2.15.3. EJERCICIO: Función `min(a, b)`

Escriba una función `min(a, b)` la cual devuelva el menor de dos números `a` y `b`.

```javascript
// Solución
function min(a, b) {
  return a < b ? a : b;
}

// Ejemplos de uso:
// min(2, 5)  -> 2
// min(3, -1) -> -1
// min(1, 1)  -> 1
```

---

### 2.15.4. EJERCICIO: Función `pow(x, n)`

Escriba una función `pow(x, n)` que devuelva `x` elevado a la potencia de `n`. En otras palabras, multiplique `x` por sí mismo `n` veces y devuelva el resultado.

*Nota: La función solo debe admitir valores naturales de `n` (enteros desde 1 en adelante).*

```javascript
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

// Ejemplos de uso:
// pow(3, 2) = 3 * 3 = 9
// pow(3, 3) = 3 * 3 * 3 = 27
// pow(1, 100) = 1
```