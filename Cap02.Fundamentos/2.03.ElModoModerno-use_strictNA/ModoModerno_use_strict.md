# 2. Fundamentos de JavaScript

## 2.3. El modo moderno, "use strict"

Durante años, JavaScript evolucionó sin romper la compatibilidad con el código antiguo (*backwards compatibility*). Cada vez que se añadían nuevas características o se mejoraba el lenguaje, el código existente seguía funcionando sin cambios. Sin embargo, esto también significaba que los errores de diseño o comportamientos imperfectos de las primeras versiones de JS permanecían en el lenguaje.

Con la llegada de **ECMAScript 5 (ES5)** en 2009, se introdujo el **Modo Estricto (`"use strict"`)**, una directiva que modifica el comportamiento del motor para habilitar una versión moderna y más limpia del lenguaje, corrigiendo errores sintácticos históricos y convirtiendo fallos silenciosos en errores explícitos.

---

### 2.3.1. ¿Cómo habilitar el modo estricto?

Para activar el modo estricto, se debe colocar la directiva `"use strict";` (o `'use strict';`) como una cadena de texto al **inicio del script** o al **inicio de una función**.

```
"use strict";

// Todo el código a continuación se ejecutará en modo estricto
let mensaje = "¡Hola, modo estricto!";

```

#### Reglas clave de ubicación:

* **Debe estar al principio:** La directiva `"use strict";` solo se reconoce si se encuentra en la parte superior del archivo o script (únicamente precedida por comentarios o saltos de línea). Si se coloca después de una sentencia ejecutable, se ignorará.

```
alert("Algún código");

// "use strict" se ignora aquí porque hay código previo
"use strict";

// No se activó el modo estricto

```

---

### 2.3.2. Principales cambios y protecciones de `"use strict"`

1. **Prohíbe la creación implícita de variables globales:**
   Sin `"use strict"`, asignar un valor a una variable no declarada crea automáticamente una variable global. Con `"use strict"`, lanza un error `ReferenceError`.

   ```
   // Sin "use strict": crea 'num' global de forma silenciosa
   // Con "use strict": ReferenceError: num is not defined
   num = 5; 
   
   ```

2. **Evita la sobrescritura de propiedades no modificables:**
   Asignar valores a propiedades de solo lectura o tratar de eliminar propiedades no eliminables lanzará un error explícito (`TypeError`) en lugar de fallar en silencio.

3. **Restringe el uso de identificadores y nombres reservados:**
   Palabras reservadas para futuras versiones de JS (como `implements`, `interface`, `let`, `package`, `private`, `protected`, `public`, `static`, `yield`) no pueden utilizarse como nombres de variables.

4. **Cambios en las funciones:**

   * Prohíbe que una función tenga nombres de parámetros duplicados (`function suma(a, a, c)`).

   * En modo no estricto, el valor de `this` dentro de una función simple se evalúa como el objeto global (`window` en el navegador). En modo estricto, `this` es `undefined`.

---

### 2.3.3. ¿Cómo activar `"use strict"` por función?

Si no deseas activar el modo estricto globalmente en todo el archivo, puedes habilitarlo únicamente dentro de un bloque de función específico:

```
function miFuncion() {
  "use strict";
  // El modo estricto solo aplica dentro de esta función
  let x = 10;
}

function funcionAntigua() {
  // Esta función se ejecuta en modo normal (sloppy mode)
  y = 20; 
}

```

---

### 2.3.4. ¿Cuándo NO es necesario escribir `"use strict"`? (Estado del Arte)

En el desarrollo web moderno, **rara vez es necesario escribir la directiva `"use strict"` manualmente** debido a cómo están estructurados los entornos y herramientas actuales:

1. **Módulos de JavaScript (ES Modules):**
   Todos los archivos cargados o definidos como módulos (`<script type="module">` o archivos con sentencias `import` / `export`) **tienen el modo estricto activado por defecto** automáticamente.

2. **Clases de ES6:**
   Todo el código escrito dentro del cuerpo de una clase (`class MiClase { ... }`) se ejecuta en modo estricto por defecto.

3. **Herramientas de Compilación y Bundlers:**
   Transpiladores como Babel, TypeScript y empaquetadores como Vite o Webpack insertan automáticamente `"use strict"` al procesar y empaquetar los archivos de producción.

---

### 💡 Resumen y Recomendación

* Siempre es recomendable trabajar bajo el modo estricto para escribir un código más seguro, optimizable y prevenir errores silenciosos.

* Si utilizas sintaxis moderna con **módulos (`import`/`export`)** o **clases**, no necesitas escribir `"use strict"`, ya que el entorno se encarga de habilitarlo.