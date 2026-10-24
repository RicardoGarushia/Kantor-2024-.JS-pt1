# 2. Fundamentos de JavaScript

## 2.5. Tipos de Datos

JavaScript es un lenguaje **dinámicamente tipado** (*dynamically typed*). Esto significa que las variables no están atadas a un tipo de dato fijo; una variable puede almacenar un número en un momento y luego ser reasignada con un texto (*string*).

En JavaScript existen **8 tipos de datos básicos**: 7 tipos primarios (primitivos) y 1 tipo complejo (objetos).

---

### 2.5.1. Los 8 Tipos de Datos en JavaScript

#### 1.1. `number` (Número)
Representa tanto números enteros como números de punto flotante (decimales).

```javascript
let n = 123;
n = 12.345;
```

Además de los números habituales, existen **valores numéricos especiales** que pertenecen al tipo `number`:
* **`Infinity`:** Representa el Infinito matemático. (Ej: `1 / 0`).
* **`-Infinity`:** Representa el Infinito negativo.
* **`NaN` (Not a Number):** Representa un error de cálculo o una operación matemática no válida (Ej: `"texto" / 2`). `NaN` es pegajoso: cualquier operación posterior con `NaN` devolverá `NaN`.

#### 1.2. `bigint`
El tipo `number` solo puede almacenar números enteros de forma precisa en el rango de $-(2^{53} - 1)$ hasta $(2^{53} - 1)$. 

Para trabajar con enteros de precisión arbitraria sin límite de tamaño, se introdujo `bigint`. Se crea añadiendo una `n` al final de un entero:

```javascript
// La 'n' al final indica que es un BigInt
const unNumeroGigante = 1234567890123456789012345678901234567890n;
```

#### 1.3. `string` (Cadena de texto)
Un `string` en JavaScript debe estar rodeado de comillas. Existen tres tipos de comillas:

```javascript
let str1 = "Comillas dobles";
let str2 = 'Comillas simples';
let str3 = `Comillas invertidas (backticks)`;
```

* **Comillas dobles y simples:** Tienen el mismo comportamiento en JS.
* **Comillas invertidas (Backticks `` ` ``):** Permiten **incrustar expresiones** dentro de la cadena envolviéndolas en `${ ... }` (*Template Literals*).

```javascript
let nombre = "John";

// Incrustar una variable
alert(`Hola, ${nombre}!`); // Hola, John!

// Incrustar una expresión matemática
alert(`El resultado es ${1 + 2}`); // El resultado es 3
```

#### 1.4. `boolean` (Booleano)
El tipo booleano solo tiene dos valores posibles: `true` (verdadero) y `false` (falso). Se utilizan comúnmente para almacenar valores de sí/no o condiciones de control.

```javascript
let nameFieldChecked = true;  // Sí, la casilla está marcada
let ageFieldChecked = false; // No, la casilla no está marcada

let esMayor = 4 > 1; // true
```

#### 1.5. El valor `null`
`null` es un valor especial que representa "nada", "vacío", "desconocido" o "valor de variable no encontrado de forma intencional".

```javascript
let edad = null; // La edad es desconocida intencionalmente
```

> **Nota:** En JavaScript, `null` **no** es una referencia a un objeto inexistente como en otros lenguajes; es simplemente un valor especial que representa la ausencia de valor.

#### 1.6. El valor `undefined`
`undefined` significa "valor no asignado". Si una variable es declarada pero no se le asigna ningún valor, su valor por defecto es `undefined`.

```javascript
let edad;
alert(edad); // Muestra: "undefined"
```

* **Diferencia entre `null` y `undefined`:**
  * `null`: Se asigna explícitamente para indicar que la variable está "vacía".
  * `undefined`: Es el estado por defecto que asigna el sistema cuando no se ha definido ningún valor.

#### 1.7. `symbol` (Símbolo)
El tipo `symbol` se utiliza para crear identificadores únicos para los objetos. Se estudiará en detalle más adelante en el curso.

#### 1.8. `object` (Objeto)
A diferencia de los tipos primitivos que solo contienen un valor único (un texto, un número, etc.), el tipo `object` se utiliza para almacenar **colecciones complejas de datos y entidades más avanzadas**.

---

### 2.5.2. El operador `typeof`

El operador `typeof` devuelve una cadena que indica el tipo de dato del argumento. Es muy útil para verificar el tipo de una variable rápidamente.

Soporta dos formas de sintaxis:
1. Como operador: `typeof x`
2. Como función: `typeof(x)`

```javascript
typeof undefined // "undefined"

typeof 0 // "number"

typeof 10n // "bigint"

typeof true // "boolean"

typeof "foo" // "string"

typeof Symbol("id") // "symbol"

typeof Math // "object" (1)

typeof null // "object" (2) ¡Error oficial de JS!

typeof alert // "function" (3)
```

#### Observaciones importantes sobre `typeof`:
1. **`typeof null == "object"`:** Esto es un **error histórico de JavaScript** aceptado por retrocompatibilidad. `null` **NO** es un objeto, es un tipo primitivo.
2. **`typeof alert == "function"`:** Técnicamente las funciones pertenecen al tipo `object`, pero `typeof` trata a las funciones de forma especial devolviendo `"function"`.

---

### 2.5.3. Solución al Ejercicio Práctico

#### Código planteado:
```javascript
let name = "Ilya";

alert( `Hola ${1}` );       // ¿Salida?
alert( `Hola ${"name"}` );  // ¿Salida?
alert( `Hola ${name}` );    // ¿Salida?
```

#### Análisis y Resultados:

1. **`alert( `Hola ${1}` )`**
   * **Salida:** `Hola 1`
   * **Explicación:** La expresión `${1}` evalúa el número `1` y lo convierte a texto dentro de la plantilla.

2. **`alert( `Hola ${"name"}` )`**
   * **Salida:** `Hola name`
   * **Explicación:** `${"name"}` contiene el texto literal `"name"` (entre comillas), por lo que no hace referencia a ninguna variable.

3. **`alert( `Hola ${name}` )`**
   * **Salida:** `Hola Ilya`
   * **Explicación:** `${name}` hace referencia a la variable `let name = "Ilya"`, por lo que su valor es inyectado.

---

### 💡 Resumen y Estructura Mnemotécnica

Hay **8 tipos de datos** en JavaScript:
* **7 tipos primitivos:**
  1. `number`
  2. `bigint`
  3. `string`
  4. `boolean`
  5. `null`
  6. `undefined`
  7. `symbol`
* **1 tipo no primitivo:**
  8. `object`