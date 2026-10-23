# Resumen: Introducción a JavaScript

*Basado en la sección de Introducción del libro de Ilya Kantor, complementado con el estado del arte del ecosistema en 2026.*

## 1. ¿Qué es JavaScript?

**JavaScript (JS)** fue creado inicialmente para "dar vida" a las páginas web. Los programas escritos en este lenguaje se llaman *scripts* y se insertan directamente en el HTML de un sitio para ejecutarse de forma automática mientras la página carga.

A diferencia de lenguajes como Java o C++, JavaScript es un lenguaje **interpretado y compilado al vuelo (JIT - Just-In-Time)**: no requiere pasos de compilación previa antes de ejecutarse.


### 1.1. ¿Por qué se llama JavaScript?

Cuando fue creado en 1995 por Brendan Eich, el lenguaje se llamaba originalmente **LiveScript**. Sin embargo, aprovechando la enorme popularidad que tenía el lenguaje *Java* en ese momento, se rebautizó como *JavaScript* con fines de marketing, sugiriendo que era un "hermano menor" de Java. Con el tiempo, evolucionó hasta convertirse en un lenguaje completamente independiente con su propia especificación estandarizada llamada **ECMAScript** (definida por el comité TC39).

---

## 2. Los Motores de JavaScript (Engines)

JavaScript se ejecuta dentro de un entorno que posee un **motor de JS** (*JavaScript Engine* o máquina virtual).

### 2.1. ¿Cómo funciona un motor?

1. **Parsing:** El motor lee y analiza el código (*script*).
2. **Compilación:** Transforma el código a lenguaje máquina.
3. **Optimización:** El motor monitorea el código mientras se ejecuta y optimiza las partes más utilizadas en tiempo real (*JIT Compilation*).

### 2.2. Motores principales:

* **V8:** Desarrollado por Google (usado en Chrome, Edge, Brave, Node.js, Deno y Bun).
* **SpiderMonkey:** El primer motor de JS, desarrollado por Mozilla para Firefox.
* **JavaScriptCore (JSC / Nitro):** Desarrollado por Apple para Safari.

---

## 3. ¿Qué PUEDE hacer JavaScript en el Navegador?

El objetivo principal de JS en el cliente es la manipulación de la interfaz y la interacción con el usuario.

* **Manipular la página:** Agregar HTML, modificar estilos CSS y ajustar elementos visuales dinámicamente.
* **Interactuar con el usuario:** Capturar eventos como clics, movimientos del ratón, pulsaciones de teclas y envío de formularios.
* **Comunicación de red:** Enviar y recibir datos de servidores en segundo plano sin recargar la página (AJAX, `fetch`, WebSockets).
* **Gestión de almacenamiento:** Guardar datos localmente en el navegador mediante `localStorage`, `sessionStorage` e `IndexedDB`.
* **Manejo de Cookies:** Leer y escribir cookies de sesión o preferencia.

---

## 4. ¿Qué NO PUEDE hacer JavaScript en el Navegador?

Para proteger la privacidad y seguridad del usuario, JavaScript dentro del navegador opera dentro de un **entorno aislado (Sandbox)**.

* **Sin acceso directo al disco duro:** Un script web no puede leer, modificar ni eliminar archivos arbitrarios del sistema operativo sin el consentimiento o acción explícita del usuario (como seleccionar un archivo en un `<input type="file">`).
* **Acceso limitado al hardware:** El acceso a la cámara, micrófono o ubicación GPS requiere permiso explícito otorgado por el usuario mediante cuadros de diálogo del navegador.
* **Política del Mismo Origen (*Same-Origin Policy*):** Por regla general, los scripts de una pestaña no pueden acceder a los datos, cookies o DOM de otra pestaña si pertenecen a dominios, protocolos o puertos distintos (evitando, por ejemplo, que un sitio malicioso lea información confidencial de un banco abierto en otra pestaña).

---

## 5. ¿Qué hace único a JavaScript?

Existen tres pilares que diferencian a JavaScript de la mayoría de lenguajes web:

1. **Integración total con HTML/CSS.**
2. **Sencillez para realizar tareas simples.**
3. **Soporte universal en todos los navegadores principales**, habilitado por defecto.

---

## 6. Lenguajes sobre JavaScript (Transpileros)

Dado que JavaScript debe ser compatible con todos los navegadores antiguos, la evolución del lenguaje implica que no todos los entornos ejecutan las sintaxis más avanzadas de forma directa. Además, para proyectos a gran escala se suelen requerir características adicionales.

Para solucionar esto, se utilizan **transpileros** (herramientas que traducen código de un lenguaje/sintaxis a JavaScript estándar):

* **TypeScript:** Desarrollado por Microsoft, añade un sistema de **tipado estricto** sobre JS. Es el estándar de la industria para el desarrollo web moderno a gran escala.
* **Babel:** Transpila código JS moderno (ES6+) a versiones antiguas de JS para asegurar la compatibilidad con navegadores obsoletos.
* **Otros lenguajes históricos o alternativos:** Flow, CoffeeScript, Dart y Kotlin.

---

## 7. Estado del Ecosistema y Actualización

Aunque las bases conceptuales del libro de Kantor (2024) se mantienen vigentes, la infraestructura de JavaScript ha evolucionado significativamente:

* **Evolución de los Runtimes:** Mientras que Node.js era el estándar casi único fuera del navegador, runtimes como **Bun** y **Deno** se han consolidado como alternativas de ultra alto rendimiento que ejecutan JavaScript y TypeScript de forma nativa sin necesidad de configuración previa.
* **Integración del Tipado Nativo:** El estándar ECMAScript (TC39) continúa avanzando en propuestas para que los navegadores entiendan la sintaxis de tipos de TypeScript directamente en el motor sin necesidad de compilación intermedia.
* **Herramientas de Build Rápida:** Herramientas de empaquetado como **Vite** o **Rspack** han reemplazado en gran medida a configuraciones complejas como Webpack, acelerando drásticamente el flujo de trabajo del desarrollador.

---

## 8. Herramientas a Utilizar

Las herramientas a utilizar son: 

- Un **IDE** (VS Code, Netbeans, Cursor, etc.)
- La extensión **Live Server** del autor **yandeu** ya que tiene soporte para PHP. 
- Un archivo base .php (o .html) para ejecutar el código. También se puede utilizar el propio navegador, pero requerimos guardado de información. Así que sólo para práctica navegador, para guardado el archivo base .php (o .html).
- Un archivo .js para hacer nuestras prácticas. 

