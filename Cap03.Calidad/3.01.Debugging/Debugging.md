# 3. Calidad del Código y Depuración (Debugging)

## 3.1. Depuración en el Navegador (DevTools & Modern Debugging)

La depuración (*debugging*) es el proceso sistemático de rastrear, aislar y corregir errores o comportamientos imprevistos en un programa. En el ecosistema moderno de JavaScript, las herramientas de depuración no se limitan a pausar la ejecución del código, sino que interactúan directamente con el motor de JavaScript (como **V8** en Chromium o **SpiderMonkey** en Firefox) a través de protocolos de depuración de bajo nivel (como el *Chromium DevTools Protocol - CDP*).

---

### 3.1.1. Arquitectura de las DevTools y el Entorno de Depuración

Los navegadores web no muestran los errores de ejecución directamente al usuario final para mantener la limpieza de la interfaz y la seguridad. Sin embargo, los desarrolladores disponen de un entorno de depuración integrado.

* **Apertura de DevTools en Chromium:** `F12` o `Ctrl + Shift + I` (`Cmd + Option + I` / `Cmd + Option + J` en macOS).
* **El Panel *Sources* (Fuentes):** Es el centro neurálgico de inspección de código y depuración. Se divide en tres áreas clave:
  1. **Navegador de Recursos (Panel Izquierdo):** Árbol de archivos que componen la aplicación (HTML, JS, CSS, imágenes, mapas de fuente o *Source Maps*).
  2. **Editor de Código Fuente (Panel Central):** Muestra el código fuente formateado. Permite la edición en vivo (*live editing*) y la configuración visual de puntos de interrupción.
  3. **Panel de Inspección y Control (Panel Derecho):** Contiene la suite de inspección de contexto de ejecución: *Watch*, *Call Stack*, *Scope*, *Breakpoints*, *XHR/fetch Breakpoints*, *DOM Breakpoints*, entre otros.

---

### 3.1.2. Puntos de Interrupción (*Breakpoints*) y sus Variantes Avanzadas

Un **breakpoint** es una instrucción dada al depurador para pausar la ejecución del hilo principal de JavaScript (*event loop*) en una línea o condición específica, manteniendo intacto el estado de la memoria y la pila de llamadas.

#### 1. Breakpoints Estándar por Línea de Código
Se establecen haciendo clic sobre el número de línea en el panel *Sources*. La línea seleccionada se resalta y la ejecución se pausará inmediatamente antes de que esa línea sea evaluada.

#### 2. Sentencia `debugger`
Es la forma explícita en código de solicitar una pausa:
```javascript
function calcularImpuesto(monto) {
  let tasa = 0.16;
  debugger; // La ejecución se detendrá aquí si las DevTools están abiertas
  return monto * tasa;
}
```
*Nota de producción:* Sentencias `debugger` olvidadas en producción deben ser eliminadas mediante herramientas de minificación o reglas de *linter* (`no-debugger` en ESLint/Biome), ya que si un usuario abre las DevTools, su experiencia se detendrá.

#### 3. Breakpoints Condicionales (Conditional Breakpoints)
Permiten pausar la ejecución **únicamente si una expresión evaluada resulta verdadera (`true`)**. Se configuran con clic derecho sobre el número de línea $\rightarrow$ *Add conditional breakpoint...*.

* **Ejemplo de expresión:** `usuario.id === 5402` o `items.length > 100`.
* **Pro-tip moderno (Console Log Breakpoint / Logpoint):** Es posible usar breakpoints condicionales para inyectar depuración sin modificar la base de código. Al escribir como condición:

  $$
  \text{console.log("Estado de items:", items) \&\& false}
  $$

  La expresión se evalúa, imprime el log en consola y retorna `false` (debido al `&&`), permitiendo que el hilo siga **sin pausar la aplicación**.

#### 4. Event Listener & DOM Breakpoints
* **DOM Breakpoints:** Permiten pausar el código cuando un nodo del DOM sufre modificaciones de atributos, remoción o cambios en sus hijos.
* **XHR/fetch Breakpoints:** Pausan la ejecución cuando se realiza una petición HTTP a una URL que contenga una cadena específica.
* **Global Listeners & Event Listener Breakpoints:** Pausan la ejecución cuando se dispara un evento específico en la interfaz (ej. `click`, `keydown`, `pointermove`).

---

### 3.1.3. Controles del Flujo de Ejecución (*Execution Control*)

Cuando la depuración se detiene en un breakpoint, el motor congela el contexto de ejecución. Los controles de navegación permiten avanzar paso a paso:

| Acción | Atajo | Descripción Técnica |
| :--- | :---: | :--- |
| **Resume** (Reanudar) | `F8` / `Cmd+\` | Continúa la ejecución del hilo principal hasta alcanzar el siguiente breakpoint o el final del script. |
| **Step Over** (Paso por encima) | `F10` / `Cmd+'` | Ejecuta la siguiente instrucción. Si la instrucción incluye una llamada a función, **la ejecuta completa en segundo plano** y se detiene en la línea inmediata posterior. |
| **Step Into** (Paso hacia adentro) | `F11` / `Cmd+;` | Ingresa al interior de la función invocada en la línea actual para depurar su cuerpo línea por línea. |
| **Step Out** (Paso hacia afuera) | `Shift+F11` / `Shift+Cmd+;` | Ejecuta el resto del código dentro de la función actual hasta su valor de retorno, pausando justo al regresar al contexto que la invocó. |
| **Step** (Paso simple) | `F9` | Avanza a la siguiente instrucción evaluada, respetando funciones asíncronas y *callbacks* según el estándar moderno. |

---

### 3.1.4. Inspección de Contexto: Stack, Scope y Watch

El panel derecho de inspección en el navegador proporciona visibilidad sobre la memoria del motor JS:

#### A. Panel *Scope* (Ámbitos)
Muestra la jerarquía de visibilidad de variables en el punto exacto de la pausa:
* **Local:** Variables de la función o bloque actual.
* **Closure:** Variables capturadas por cierres (*closures*) desde entornos léxicos superiores.
* **Script:** Variables declaradas en el ámbito del archivo actual (`let`/`const` en el nivel superior).
* **Global:** El objeto global (`window` en navegadores, `globalThis` en estándares modernos).

#### B. Panel *Call Stack* (Pila de Llamadas)
Muestra la pila de llamadas (*Frames*) que condujo hasta el breakpoint actual.
* Permite hacer clic en cualquier *frame* anterior para "retroceder mentalmente" en el flujo e inspeccionar las variables del contexto en ese momento exacto.
* **Async Call Stacks:** Las DevTools modernas rastrean contextos asíncronos (`async/await`, `Promise.then`, `setTimeout`), reconstruyendo el *stack* completo a través de los límites del *Event Loop*.

#### C. Panel *Watch* (Supervisión)
Permite ingresar cualquier expresión JavaScript válida (`total * 1.16`, `array.map(x => x.id)`). Estas expresiones son reevaluadas en tiempo real en cada paso de depuración.

---

### 3.1.5. Estrategias Avanzadas e Instrumentación Moderna

Más allá del breakpoint clásico, ladepuración en aplicaciones web contemporáneas utiliza APIs de plataforma y herramientas de rendimiento de última generación:

#### 1. La API `console` Avanzada (Más allá de `console.log`)
* `console.table(data)`: Renderiza arreglos de objetos o matrices en una tabla estructurada e interactiva.
* `console.group(label)` y `console.groupEnd()`: Agrupa jerárquicamente logs relacionados para mantener limpia la consola.
* `console.time(label)` y `console.timeEnd(label)`: Mide con alta precisión el tiempo invertido en un bloque de código.
* `console.trace()`: Imprime la pila de llamadas actual en el punto de invocación.
* `console.assert(assertion, msg)`: Escribe un mensaje de error solo si la condición dada resulta `false`.

#### 2. Source Maps (`.map`)
En aplicaciones modernas transpiladas o empaquetadas (con TypeScript, Vite, Webpack, SWC, Rspack), el código ejecutado en el navegador está minificado y alterado. Los **Source Maps** mapean el código minificado de retorno hacia el código fuente original escrito por el desarrollador, permitiendo depurar código TypeScript o JSX de forma directa en el navegador.

#### 3. Depuración de Rendimiento y Memoria (Performance & Memory Profiling)
* **Performance Panel:** Captura *flame graphs* de la ejecución de JavaScript, permitiendo identificar tareas largas (*Long Tasks*) que bloqueen la interfaz principal (*Main Thread*) y afecten las métricas de **Core Web Vitals** (como INP - *Interaction to Next Paint*).
* **Heap Snapshots & Allocation Sampling:** Permiten tomar capturas del árbol de memoria del *Heap* para diagnosticar fugas de memoria (*Memory Leaks*), identificando objetos que no están siendo recolectados por el *Garbage Collector*.