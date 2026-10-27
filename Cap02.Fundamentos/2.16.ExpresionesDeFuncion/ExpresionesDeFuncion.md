# 2. Fundamentos de JavaScript

## 2.16. Expresiones de función (Function Expressions) y Callbacks

En JavaScript, una función no es solo una estructura de código, sino un **valor especial**. Esto significa que podemos crear una función dentro de cualquier expresión y asignarla a una variable, igual que lo haríamos con un número o una cadena de texto.

---

### 2.16.1. Declaración vs. Expresión de Función

#### 1. Declaración de Función (Function Declaration)
Sintaxis tradicional donde la función se declara como una sentencia separada:

```javascript
function saludar() {
  alert("¡Hola!");
}
```

#### 2. Expresión de Función (Function Expression)
La función se crea dentro de una expresión de asignación:

```javascript
let saludar = function() {
  alert("¡Hola!");
};
```

> **Detalle clave:** Observa el punto y coma `;` al final de la expresión de función. Es necesario porque forma parte de una sentencia de asignación (`let variable = valor;`), a diferencia de una Declaración de Función.

---

### 2.16.2. Las Funciones son Valores

Dado que una función es un valor almacenado en una variable, podemos copiarla a otra variable o imprimir su contenido:

```javascript
function saludar() {
  alert("¡Hola!");
}

let f = saludar; // Copiamos la función (sin paréntesis)

f();       // Muestra "¡Hola!" (ejecuta la copia)
saludar(); // Muestra "¡Hola!" (ejecuta la original)
```

> ⚠️ **Atención con los paréntesis `()`:** 
> * `saludar` hace referencia a la **función misma** (el objeto/código).
> * `saludar()` **ejecuta** la función y evalúa su valor devuelto (`return`).

---

### 2.16.3. Entendiendo las Funciones Callback (Callback Functions)

Un **Callback** (o función de devolución de llamada) es simplemente **una función que se pasa como argumento a otra función**, con la intención de que sea ejecutada ("llamada de vuelta") más adelante dentro de esa función.

#### Ejemplo clásico: Preguntar y reaccionar según la respuesta

Imaginemos una función `preguntar(pregunta, siOk, siCancelar)` que realiza una pregunta y ejecuta `siOk()` si el usuario acepta, o `siCancelar()` si cancela:

```javascript
function preguntar(pregunta, siOk, siCancelar) {
  if (confirm(pregunta)) {
    siOk();        // Callback ejecutado si la respuesta es afirmativa
  } else {
    siCancelar();  // Callback ejecutado si la respuesta es negativa
  }
}

function mostrarAceptado() {
  alert("Estás de acuerdo.");
}

function mostrarCancelado() {
  alert("Cancelaste la ejecución.");
}

// Pasamos `mostrarAceptado` y `mostrarCancelado` como argumentos (callbacks)
preguntar("¿Estás de acuerdo?", mostrarAceptado, mostrarCancelado);
```

#### Uso con Expresiones de Función Anónimas

No es necesario definir `mostrarAceptado` o `mostrarCancelado` por separado. Podemos escribir las funciones directamente dentro de la llamada a `preguntar`:

```javascript
preguntar(
  "¿Estás de acuerdo?",
  function() { alert("Estás de acuerdo."); },            // Callback anónimo 1
  function() { alert("Cancelaste la ejecución."); }      // Callback anónimo 2
);
```

---

### 2.16.4. Diferencias entre Declaración y Expresión de Función

| Característica | Declaración de Función | Expresión de Función |
| :--- | :--- | :--- |
| **Sintaxis** | `function miFuncion() { ... }` | `let miFuncion = function() { ... };` |
| **Cuándo se crea** | Es procesada por JavaScript **antes** de ejecutar el bloque de código (*Hoisting*). | Es creada **solo cuando la ejecución llega a ella**. |
| **Disponibilidad** | Puede ser llamada **antes** de su definición en el código. | Solo puede ser llamada **después** de ser evaluada la asignación. |
| **Alcance (Scope)** | Limitada al bloque de código `{ ... }` donde fue declarada. | Asignada a una variable con el alcance de dicha variable (`let`/`const`). |

---

## Ejercicios Prácticos

### Ejercicio 1: Identificación de Callbacks
Analiza la siguiente llamada e identifica cuáles son los callbacks y cuándo se ejecutan:

```javascript
function procesarEntrada(mensaje, callback) {
  let nombre = prompt(mensaje);
  callback(nombre);
}

procesarEntrada("Ingresa tu nombre:", function(nombre) {
  alert(`Hola, ${nombre}!`);
});
```

* **Respuesta:** La función anónima `function(nombre) { alert(...) }` se pasa como el argumento `callback`. Se ejecuta dentro de `procesarEntrada` justo después de obtener el valor ingresado en el `prompt`.

---

### Ejercicio 2: Conversión a Expresión con Callbacks
Transforma la siguiente función tradicional utilizando Expresiones de Función y Callbacks:

**Código de origen:**
```javascript
function calcularYMostrar(a, b) {
  let suma = a + b;
  alert("La suma es: " + suma);
}
```

**Solución con Callbacks y Expresiones:**
```javascript
const ejecutarOperacion = function(a, b, operacionCallback) {
  let resultado = a + b;
  operacionCallback(resultado);
};

// Llamada pasando un callback anónimo:
ejecutarOperacion(5, 10, function(res) {
  alert("La suma procesada es: " + res);
});
```