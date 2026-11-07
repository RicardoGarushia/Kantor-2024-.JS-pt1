# 3.2. Estilo de Codificación (Coding Style)

El código fuente se escribe una sola vez, pero se lee, analiza y refactoriza decenas de veces a lo largo de su ciclo de vida. La regla fundamental de la ingeniería de software moderna establece: **"El código debe escribirse para que los humanos lo entiendan, y solo incidentalmente para que las máquinas lo ejecuten"**.

Un estilo de codificación limpio reduce la carga cognitiva, facilita la revisión de código en equipo (*code reviews*) y disminuye la tasa de errores (*bugs*).

---

### 3.2.1. Análisis Sintáctico y Buenas Prácticas de Formato

A partir de la lección del libro de Ilya Kantor y contrastado con las guías de estilo estándar de la industria (Google JS Style Guide, Airbnb Style Guide), a continuación se desglosan los elementos visuales y sintácticos que componen un código limpio:

#### Ejemplo de Código de Estilo Pobre (Antes):
```javascript
function pow(x,n)
{
    let result=1;
    for(let i=0; i < n ; i++) { result*=x; }
    return result;
}

let x = prompt("x?",''), n=prompt("n?",'');
if (n<=0)
{
    alert(`Power ${n} is not supported, please enter an integer number greater than zero`);
}
else
{
    alert(pow(x,n))
}
```

#### Ejemplo Corregido y Formateado (Después):
```javascript
function pow(x, n) {
  let result = 1;

  for (let i = 0; i < n; i++) {
    result *= x;
  }

  return result;
}

let x = prompt("x?", "");
let n = prompt("n?", "");

if (n <= 0) {
  alert(
    `Power ${n} is not supported, please enter an integer number greater than zero`,   // trailing comma
  );
} else {
  alert(pow(x, n));
}
```

---

### 3.2.2. Reglas Sintácticas Desglosadas

#### 1. Espaciado alrededor de Operadores y Argumentos
* **Operadores binarios y asignaciones:** Deben llevar un espacio antes y después (`let result = 1;` en lugar de `let result=1;`, `i < n` en lugar de `i<n`).
* **Parámetros y argumentos:** Debe haber un espacio justo después de cada coma (`pow(x, n)` en lugar de `pow(x,n)`).
* **Palabras clave de control:** Espacio entre la palabra clave y el paréntesis: `if (condicion)` o `for (let i ...)`, no `if(condicion)`.

#### 2. Ubicación de Llaves (Curly Braces — Estilo "1TBS / One True Brace Style")
* La llave de apertura `{` se coloca en la misma línea que la declaración o la estructura de control, precedida por un espacio (`function pow(x, n) {` o `if (n <= 0) {`).
* Se evita colocar la llave de apertura en una línea nueva (estilo Allman), prefiriendo la convención "egipcia" o 1TBS.
* La llave de cierre `}` se ubica en su propia línea independiente, alineada verticalmente con el inicio de la instrucción que abrió el bloque.

#### 3. Delimitación de Bloques y Saltos de Línea
* **Sin bloques de una sola línea:** Colocar la lógica dentro de la misma línea del `for` o del `if` (ej. `for(...) { result*=x; }`) dificulta el seguimiento línea por línea en el depurador y oscurece los puntos de interrupción.
* **Uso obligatorio de llaves:** Aunque JavaScript permite omitir las llaves `{}` si el cuerpo de un `if` o `for` contiene una sola línea, la buena práctica exige **siempre incluir las llaves** para evitar errores sintácticos al refactorizar o añadir nuevas sentencias.

#### 4. Sangría (Indentation)
* Se utiliza una sangría horizontal consistente. La convención moderna en JavaScript establece **2 espacios por nivel de anidamiento** (evitando mezclar pestañas/tabuladores con espacios).

#### 5. Declaración Única de Variables
* Se evita declarar múltiples variables en una sola línea separadas por comas (`let x = 1, y = 2;`).
* Se prefiere una sentencia por línea (`let x = 1;` y en la siguiente línea `let y = 2;`), lo que mejora la claridad de los difs en control de versiones (Git).

#### 6. Comas Flotantes o Finales (*Trailing Commas*)
* En llamadas a funciones multilínea, estructuras de objetos o arreglos, colocar una coma al final del último parámetro o elemento es una sintaxis moderna completamente válida en JavaScript (ES2017+).
* **Propósito técnico:** Permite que al agregar un nuevo parámetro en el futuro, las herramientas de control de versiones (Git) solo detecten como modificada la *nueva línea*, manteniendo intacto el historial de la línea anterior.

#### 7. Longitud de Línea y Separación Vertical
* Se recomienda limitar la longitud de las líneas a un rango de 80 a 100 caracteres.
* Se utilizan líneas en blanco verticales para separar bloques lógicos de código (por ejemplo, separar la inicialización de variables del bucle principal y del valor de retorno).

---

### 3.2.3. Herramientas de Automatización: Linters y Formatters

En el flujo de trabajo profesional actual, la verificación manual del estilo se reemplaza por herramientas automatizadas:

1. **Code Formatters (Formateadores de Código):**
   * **Herramientas:** *Prettier*, *Biome* (herramienta ultrarrápida escrita en Rust), *Oxfmt*.
   * **Propósito:** Se encargan del aspecto visual (ancho de línea, comillas dobles/simples, comas finales, sangría). Operan de forma automática con la función *Format on Save* del editor.

2. **Linters (Analizadores Estáticos):**
   * **Herramientas:** *ESLint*, *Biome*, *Oxlint*.
   * **Propósito:** Analizan la calidad del código y la corrección semántica, detectando variables no utilizadas, uso de características obsoletas (`var`), u omisión de variables en efectos.

3. **La Evolución del Tooling (De JS a Rust):**
   * Tradicionalmente, la combinación estándar era **ESLint + Prettier**.
   * Actualmente, herramientas nativas compiladas en Rust como **Biome** (que unifica formateador y linter en una sola herramienta) y **Oxlint** permiten ejecutar el análisis sintáctico y el formateo entre 10 y 100 veces más rápido que sus predecesores basados en Node.js, integrándose sin fricción en los entornos de desarrollo integrados (IDE) y sistemas de CI/CD.