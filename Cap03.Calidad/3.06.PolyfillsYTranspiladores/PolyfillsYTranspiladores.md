# 3.6. Polyfills y Transpiladores (Polyfills and Transpilers)

El lenguaje JavaScript (ECMAScript) se encuentra en constante evolución. Cada año, el comité **TC39** (Technical Committee 39) aprueba nuevas características, sintaxis y APIs globales para incorporarlas a la especificación oficial. Sin embargo, no todos los navegadores web ni todos los entornos de ejecución (como versiones antiguas de Node.js o dispositivos móviles) implementan estas características de forma inmediata.

Para escribir código moderno usando las últimas especificaciones de ECMAScript sin romper la compatibilidad con entornos más antiguos, los desarrolladores utilizan dos conceptos fundamentales: **Transpiladores** y **Polyfills**.

---

### 3.6.1. Transpiladores (Transpilers)

Un **transpilador** (o compilador de código a código) es una herramienta que traduce código escrito con sintaxis JavaScript moderna (o extensiones como TypeScript/JSX) a una versión anterior de JavaScript funcional en motores legacy (habitualmente ES5).

#### ¿Qué resuelve un transpilador?
Los transpiladores se encargan de transformar **la sintaxis** nueva del lenguaje que el motor de JavaScript antiguo no puede interpretar sintácticamente y que arrojaría un error de tipo `SyntaxError`.

* **Nuevas estructuras sintácticas:** Operador de encadenamiento opcional (`?.`), operador de fusión de nulos (`??`), funciones flecha (`=>`), desestructuración (`const { a } = obj`), clases (`class`), o parámetros por defecto.

#### Ejemplo de Transpilación:

* **Código Fuente Moderno (ES2022+):**
  ```javascript
  const obtenerNombreCiudad = (usuario) => {
    return usuario?.direccion?.ciudad ?? "Ciudad desconocida";
  };
  ```

* **Código Transpilado a ES5 (Salida del Transpilador):**
  ```javascript
  var obtenerNombreCiudad = function (usuario) {
    var _usuario$direccion;
    return (usuario === null || usuario === void 0
      ? void 0
      : (_usuario$direccion = usuario.direccion) === null || _usuario$direccion === void 0
      ? void 0
      : _usuario$direccion.ciudad) || "Ciudad desconocida";
  };
  ```

---

### 3.6.2. Polyfills (Rellenos de Características)

Un **polyfill** es un fragmento de código (generalmente una función o script) utilizado para proveer características o APIs globales en entornos que no las soportan de forma nativa.

#### ¿Qué resuelve un polyfill?
A diferencia de la sintaxis, los polyfills no cambian la forma en que se escribe el código, sino que **emulan nuevas funciones o métodos globales** que faltan en el prototipo o en el objeto global (`window` / `globalThis`).

* **Nuevos métodos y objetos de biblioteca:** `Array.prototype.includes()`, `Promise`, `Object.assign()`, `String.prototype.replaceAll()`, `structuredClone()`, o `fetch()`.

#### Ejemplo de cómo funciona un Polyfill por dentro:
Un polyfill verifica primero si la función existe en el entorno. Si no existe, implementa manualmente la lógica en el prototipo correspondiente:

```javascript
// Verificar si el navegador carece del método Array.prototype.includes
if (!Array.prototype.includes) {
  // Se define el polyfill de forma manual
  Array.prototype.includes = function (elementoBuscar, desdeIndice) {
    if (this == null) {
      throw new TypeError('"this" es null o undefined');
    }
    const o = Object(this);
    const len = o.length >>> 0;
    if (len === 0) return false;
    
    let k = desdeIndice || 0;
    while (k < len) {
      if (o[k] === elementoBuscar) return true;
      k++;
    }
    return false;
  };
}
```

---

### 3.6.3. Tabla Comparativa: Transpilador vs. Polyfill

| Criterio | Transpilador (Transpiler) | Polyfill |
| :--- | :--- | :--- |
| **Problema que ataca** | **Sintaxis** nueva que el analizador (*parser*) no comprende. | **Funciones o APIs** faltantes en el entorno global. |
| **Cuándo actúa** | En **tiempo de compilación / empaquetado** (*Build time*). | En **tiempo de ejecución** (*Runtime*). |
| **Mecanismo** | Reescribe las estructuras de código sintácticamente. | Inserta objetos o métodos en el ámbito global/prototipos. |
| **Ejemplos** | Babel, SWC, Sucrase, TypeScript. | `core-js`, `web-streams-polyfill`, scripts manuales. |
| **Ejemplo de objetivo** | `() => {}`, `class`, `?.`, `??`, `async/await`. | `Promise`, `fetch`, `Array.from`, `Map`, `Set`. |

---

### 3.6.4. Tendencias Modernas y Estado del Arte (2024+)

El ecosistema de empaquetado y compatibilidad ha sufrido una enorme transformación en los últimos años:

#### 1. Transpilación Nativa en Lenguajes de Alto Rendimiento (Rust/Go)
Históricamente, **Babel** dominaba el mercado de la transpilación. Hoy en día, herramientas escritas en Rust o Go han reemplazado a Babel en los pipelines modernos debido a su velocidad (entre 10x y 100x más rápidas):
* **SWC (Speedy Web Compiler):** Utilizado por frameworks como Next.js.
* **esbuild:** Transpilador e instalador ultra rápido escrito en Go, base fundamental de **Vite**.

#### 2. Cero Polyfills para Navegadores Modernos (Baseline & Target Modern ES)
Hoy en día, la mayoría de los usuarios utilizan navegadores de actualización automática (*evergreen browsers*: Chrome, Firefox, Edge, Safari).
* **Browserslist & Baseline:** Las herramientas actuales configuran compilaciones dirigidas a `esnext` o `es2022`, eliminando la inyección masiva de polyfills innecesarios y reduciendo drásticamente el tamaño final de los archivos JavaScript (*bundle size*).

#### 3. Polyfilling Bajo Demanda (Modern vs. Legacy Bundles)
Prácticas como el envío de **doble paquete** (*Differential Serving*):
```html
<!-- Carga en navegadores modernos sin overhead de polyfills -->
<script type="module" src="app.modern.js"></script>

<!-- Carga de respaldo con transpilación y polyfills pesados solo para navegadores antiguos -->
<script nomodule src="app.legacy.js"></script>
```