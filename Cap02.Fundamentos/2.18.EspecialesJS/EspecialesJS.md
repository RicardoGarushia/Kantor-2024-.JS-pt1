# 2. Fundamentos de JavaScript

## 2.18. Especiales JavaScript (Resumen del Capítulo 2)

Este apartado recapitula los conceptos clave aprendidos a lo largo de la sección de **Fundamentos de JavaScript**:

### 2.18.1. Estructura del código

* Las sentencias se separan mediante punto y coma (`;`).
* La inserción automática de punto y coma (ASI - *Automatic Semicolon Insertion*) ocurre en la mayoría de saltos de línea, pero no siempre es confiable (ejemplo: líneas que comienzan con corchetes `[...]`). Por lo tanto, la buena práctica es escribir punto y coma explícito.

### 2.18.2. Modo estricto (`"use strict"`)
* Activa el comportamiento moderno del lenguaje y restringe errores comunes del modo laxo tradicional.
* Debe ubicarse en la parte superior del script o en el cuerpo de una función.
* Las características modernas de JavaScript (como `class` y `module`) activan el modo estricto de forma implícita.

### 2.18.3. Variables
* Se declaran usando:
  * `let`: Variable estándar de ámbito de bloque (*block-scoped*).
  * `const`: Variable inmutable de ámbito de bloque (su referencia no puede reasignarse).
  * `var`: Declaración de estilo antiguo de ámbito de función (*function-scoped*).
* JavaScript es de **tipado dinámico**: las variables no tienen un tipo fijo asignado, sino sus valores.

### 2.18.4. Tipos de datos
Existen 8 tipos de datos básicos en JavaScript:
* **Primitivos:**
  1. `number`: Números enteros y flotantes (incluye `Infinity`, `-Infinity` y `NaN`).
  2. `bigint`: Para enteros de longitud arbitraria.
  3. `string`: Cadenas de texto.
  4. `boolean`: `true` / `false`.
  5. `null`: Tipo especial para representar valores nulos/vacíos.
  6. `undefined`: Representa valores no asignados.
  7. `symbol`: Identificadores únicos para objetos.
* **No primitivos / Complejos:**
  8. `object`: Estructura de datos compleja (arreglos, funciones, objetos).

El operador `typeof x` permite verificar el tipo de dato de una variable.

### 2.18.5. Interacción con el usuario
* `alert(msg)`: Muestra una ventana con un mensaje.
* `prompt(msg, [default])`: Solicita texto al usuario. Retorna la cadena ingresada o `null` si se cancela.
* `confirm(question)`: Muestra una ventana emergente de confirmación. Retorna `true` para "OK" y `false` para "Cancelar".

### 2.18.6. Operadores
* **Aritméticos:** `+`, `-`, `*`, `/`, `%` (resto), `**` (exponenciación).
* **Concatenación:** Si el operador `+` recibe una cadena como operando, convierte el resto de los operandos a cadenas.
* **Asignaciones compuestas e incremento/decremento:** `+=`, `-=`, `++`, `--`.
* **Operador Ternario:** `condicion ? valor1 : valor2`.
* **Operadores Lógicos:** `&&` (AND), `||` (OR), `!` (NOT). Operan con cortocircuito (*short-circuit evaluation*).
* **Operador de Fusión de Nulos (`??`):** Retorna el primer argumento que no sea `null` ni `undefined`.

### 2.18.7. Comparaciones e Igualdad
* Las comparaciones relacionales (`>`, `<`, `>=`, `<=`) convierten operandos de distintos tipos a números.
* **Igualdad débil (`==`):** Realiza conversión implícita de tipos al comparar.
* **Igualdad estricta (`===`):** Compara valor y tipo de dato sin realizar conversiones. Es la recomendada para evitar bugs.

### 2.18.8. Bucles
* Formas principales: `while (cond)`, `do { ... } while (cond)`, y `for (let i = 0; i < n; i++)`.
* Las sentencias `break` permiten salir del bucle y `continue` salta a la siguiente iteración. Se pueden acompañar de etiquetas (*labels*) para romper bucles anidados.

### 2.18.9. La sentencia `switch`
* Reemplaza múltiples comprobaciones de `if..else`. Utiliza **comparación estricta (`===`)** internamente para los casos (`case`).

### 2.18.10. Funciones
Sintaxis para definir funciones en JavaScript:

1. **Declaración de Función:**
   ```javascript
   function sum(a, b) {
     return a + b;
   }
   ```
   *Se procesan antes de la ejecución del bloque (Hoisting).*

2. **Expresión de Función:**
   ```javascript
   let sum = function(a, b) {
     return a + b;
   };
   ```
   *Se crean cuando la ejecución alcanza la sentencia.*

3. **Función Flecha:**
   ```javascript
   let sum = (a, b) => a + b;
   ```
   *Sintaxis moderna y concisa, ideal para expresiones simples e in-line.*