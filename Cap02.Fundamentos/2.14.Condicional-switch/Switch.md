# 2.14. La sentencia "switch"

La sentencia `switch` reemplaza múltiples comprobaciones de condicionales `if` secuenciales. Proporciona una forma más descriptiva y legible de comparar un valor con múltiples opciones.

---

## 1. Sintaxis Básica y Flujo de Ejecución

Un `switch` tiene uno o más bloques `case` y un bloque opcional `default`.

```javascript
switch(x) {
  case 'valor1':  // if (x === 'valor1')
    // código...
    [break]

  case 'valor2':  // if (x === 'valor2')
    // código...
    [break]

  default:
    // código por defecto...
    [break]
}
```

* **Evaluación**: El valor de `x` se evalúa mediante una **igualdad estrictamente igual (`===`)** con cada uno de los argumentos `case`.
* **Coincidencia**: Si encuentra una coincidencia, la ejecución del código comienza desde ese `case` y continúa hasta el `break` más cercano o hasta el final del `switch`.
* **Falta de coincidencia**: Si no hay coincidencia y existe la etiqueta `default`, se ejecuta su bloque. Si no existe `default`, la ejecución del `switch` finaliza sin hacer nada.

---

## 2. Puntos Clave a Tener en Cuenta

### A. La importancia del `break`
Si se omite la instrucción `break`, el código continuará ejecutándose en los siguientes bloques `case` **de forma incondicional** (ignorando las comprobaciones). Esto se conoce como *fall-through* (caída en cascada).

```javascript
let a = 2 + 2;

switch (a) {
  case 3:
    console.log('Muy pequeño');
  case 4:
    console.log('¡Exacto!'); // Inicia aquí
  case 5:
    console.log('Muy grande'); // También se ejecutará si no hay break
  default:
    console.log('Sin valor coincidente');
}
// Salida:
// ¡Exacto!
// Muy grande
// Sin valor coincidente
```

### B. Agrupamiento de "case"
Podemos agrupar varios casos cuando deben compartir el mismo bloque de código:

```javascript
let a = 3;

switch (a) {
  case 4:
    console.log('¡Correcto!');
    break;

  case 3: // <-- Casos agrupados
  case 5:
    console.log('¡Incorrecto!');
    console.log('¿Por qué no tomas una clase de matemáticas?');
    break;

  default:
    console.log('El resultado es extraño');
}
```

### C. El tipo de dato importa (Comparación Estricta `===`)
Dado que `switch` utiliza igualdad estricta, el **tipo de dato** del valor evaluado y el de la etiqueta `case` debe coincidir.

```javascript
let arg = prompt("Ingresa un número");

switch (arg) {
  case '0':
  case '1':
    console.log('Uno o cero (String)');
    break;

  case 2:
    console.log('Dos (Number)'); // prompt devuelve un String, por lo que nunca coincidirá con 2 (Number)
    break;

  default:
    console.log('Valor desconocido');
}
```

### D. Expresiones arbitrarias
Tanto la condición de la sentencia `switch` como las opciones de los `case` permiten cualquier tipo de expresión.

```javascript
let a = "1";
let b = 0;

switch (+a) { // La expresión dentro del switch convierte "1" a 1
  case b + 1: // Se evalúa como 0 + 1 = 1
    console.log("Se ejecuta porque +a es igual a b + 1");
    break;

  default:
    console.log("No se ejecutó");
}
```

---

## 3. Resolviendo los Ejercicios del Manual

### Ejercicio 1: Reescribir el `switch` a `if...else`
**Problema:** Transformar el siguiente código `switch` a una estructura `if...else`:

```javascript
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
```

**Solución (`if...else` equivalent):**

```javascript
'use strict';

if (navegador === 'Edge') {
  alert("¡Tienes Edge!");
} else if (
  navegador === 'Chrome' ||
  navegador === 'Firefox' ||
  navegador === 'Safari' ||
  navegador === 'Opera'
) {
  alert('Esta bien, soportamos estos navegadores también');
} else {
  alert('¡Esperamos que esta página se vea bien!');
}
```

---

### Ejercicio 2: Reescribir `if` a `switch`
**Problema:** Convertir la siguiente secuencia de `if` a una sentencia `switch`:

```javascript
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
```

**Solución con `switch`:**

```javascript
'use strict';

let a = +prompt('a?', '');

switch (a) {
  case 0:
    alert(0);
    break;

  case 1:
    alert(1);
    break;

  case 2:
  case 3:
    alert('2,3');
    break;
}
```

---

## 4. Patrones y Buenas Prácticas Modernas

### A. Ámbitos aislados por `case` (Block Scope)
Si declaras variables dentro de los bloques `case` con `let` o `const`, todas comparten el mismo ámbito del bloque `switch`, lo cual puede ocasionar colisiones. Para solucionar esto, aísla cada `case` con llaves `{}`:

```javascript
// ❌ Provoca error de colisión de nombre
switch (accion) {
  case 'crear':
    let id = 10;
    break;
  case 'actualizar':
    let id = 20; // SyntaxError: Identifier 'id' has already been declared
    break;
}

// ✅ Correcto: uso de bloque delimitado por llaves
switch (accion) {
  case 'crear': {
    const id = 10;
    console.log(id);
    break;
  }
  case 'actualizar': {
    const id = 20;
    console.log(id);
    break;
  }
}
```

### B. Alternativa moderna: Mapas / Objetos de Lookup
Para mapeos directos de claves-valores o respuestas a eventos, en JavaScript moderno se suelen utilizar objetos o `Map` en lugar de una sentencia `switch` extensa:

```javascript
// Usando un objeto como mapa de opciones:
const MENSAJES_NAVEGADOR = {
  Edge: "¡Tienes Edge!",
  Chrome: 'Esta bien, soportamos estos navegadores también',
  Firefox: 'Esta bien, soportamos estos navegadores también',
  Safari: 'Esta bien, soportamos estos navegadores también',
  Opera: 'Esta bien, soportamos estos navegadores también'
};

function obtenerMensaje(navegador) {
  return MENSAJES_NAVEGADOR[navegador] ?? '¡Esperamos que esta página se vea bien!';
}

alert(obtenerMensaje('Firefox')); // Output: Okay we support these browsers too
```