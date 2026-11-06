# 2. Fundamentos de JavaScript

## 2.4. Variables

Una variable es un "contenedor nombrado" para almacenar datos. En JavaScript, las variables se utilizan para guardar información que puede ser leída, modificada y reutilizada a lo largo de la ejecución de una aplicación.

### 2.4.1. Declaración e Inicialización (`let`)

Para crear una variable en JavaScript moderno, utilizamos la palabra clave `let`.

```javascript
let mensaje; // Declaración de la variable
mensaje = '¡Hola!'; // Asignación del valor
```

También es posible combinar la declaración y la asignación en una sola línea:

```javascript
let mensaje = '¡Hola!'; // Declaración e inicialización
alert(mensaje); // Muestra: ¡Hola!
```

Podemos cambiar el valor de una variable tantas veces como sea necesario:

```javascript
let mensaje = 'Hola';
mensaje = 'Mundo'; // El valor anterior ('Hola') se reemplaza por 'Mundo'
```

> **Atención:** Declarar la misma variable dos veces usando `let` en el mismo ámbito provocará un error de sintaxis (`SyntaxError: Identifier 'mensaje' has already been declared`).

---

### 2.4.2. Constantes (`const`)

Para declarar una variable cuyo valor **no debe cambiar**, se utiliza la palabra clave `const` en lugar de `let`.

```javascript
const fechaNacimiento = '18.04.1982';
fechaNacimiento = '01.01.2000'; // ¡Error! Assignment to constant variable.
```

Las variables declaradas con `const` son llamadas "constantes". Intentar reasignar un nuevo valor a una constante producirá un error de ejecución.

#### Constantes en mayúsculas (Alias)
Existe una práctica común en la industria para usar constantes como "alias" de valores difíciles de recordar o configuraciones fijas antes de la ejecución:

```javascript
const COLOR_ROJO = "#F00";
const COLOR_VERDE = "#0F0";

let colorPagina = COLOR_ROJO;
```

* **Mayúsculas (`COLOR_ROJO`):** Se reservan para valores evaluados *antes* de que el script se ejecute (valores fijos codificados a mano).
* **CamelCase normal (`const fechaActual = ...`):** Se utiliza para constantes cuyos valores se calculan durante la ejecución del programa, pero que no cambian después de asignarse.

---

### 2.4.3. Reglas de Nombramiento de Variables

En JavaScript existen dos limitaciones principales al elegir el nombre de una variable:

1. El nombre solo debe contener **letras, dígitos o los símbolos `$` y `_`**.
2. El primer carácter **NO** puede ser un dígito.

#### Ejemplos válidos:
```javascript
let $ = 1; 
let _ = 2;
let userName = 'John';
let test2 = 'test';
```

#### Ejemplos inválidos:
```javascript
let 1a = 3; // No puede comenzar con un número
let my-name = 'John'; // El guion medio '-' no está permitido
```

#### Sensibilidad a Mayúsculas y Minúsculas (*Case-sensitivity*):
Las variables `apple` y `APPLE` son dos variables completamente distintas.

#### Palabras Reservadas (*Reserved Words*):
No se pueden utilizar palabras clave que el lenguaje reserva para su propio uso (ej. `let`, `class`, `return`, `function`).

---

### 2.4.4. El enfoque antiguo: `var`

En las versiones antiguas de JavaScript (antes de ES6/2015), la única forma de declarar variables era mediante la palabra clave `var`.

Aunque `var` se parece a `let` a simple vista, funciona de forma sustancialmente diferente:

* **Alcance de Bloque vs. Función:** `let` tiene alcance de bloque (`{...}`), mientras que `var` tiene alcance de función (o global).
* **Hoisting (Elevación):** Las declaraciones con `var` se "elevan" al principio de la función o script, permitiendo ser accedidas antes de su línea de declaración (con valor `undefined`).
* **Permite re-declaraciones:** `var x = 1; var x = 2;` no arroja error.

> **Regla de Oro:** En el desarrollo web moderno, **no utilices `var`**. Utiliza `let` para variables cuyos valores cambiarán y `const` para todo lo demás.

---

### 2.4.5. Nombres de Variables Limpios y Descriptivos

El nombre de una variable debe ser claro y describir con precisión el dato que almacena. Un mal nombramiento es una de las mayores fuentes de confusión en código real.

#### Consejos de buenas prácticas:
* Usa notación **camelCase** (`userName`, `totalPrice`, `isLoggedIn`).
* Utiliza nombres legibles para humanos: prefiere `userName` o `shoppingCart` sobre abreviaturas ambiguas como `u`, `c` o `a`.
* Mantén consistencia en el equipo: si llamas a un usuario `currentUser`, mantén la palabra `User` en lugar de cambiar a `Customer` o `Client` en otros archivos.

---

### 💡 Actualizaciones y Mejores Prácticas (Estado del Arte)

1. **`const` por defecto (*Const-by-default*):**
   La práctica estándar actual es **declarar todo por defecto usando `const`**. Solo si sabes con certeza que la variable necesitará ser reasignada más adelante, cámbiala a `let`. Esto previene mutaciones accidentales del estado.

2. **Inmutabilidad en `const` con Objetos y Arreglos:**
   Es crucial entender que `const` protege la **reasignación de la variable**, no la mutación del contenido.
   ```javascript
   const usuario = { nombre: "Ana" };
   usuario.nombre = "Pedro"; // ¡Esto SÍ está permitido!
   
   usuario = { nombre: "Pedro" }; // Error: Reasignación de variable no permitida.
   ```

3. **Inferencia de Tipos y TypeScript:**
   En proyectos a gran escala con TypeScript, los nombres descriptivos se complementan con un sistema de tipos estático para asegurar que una variable no reciba un tipo de dato inesperado.