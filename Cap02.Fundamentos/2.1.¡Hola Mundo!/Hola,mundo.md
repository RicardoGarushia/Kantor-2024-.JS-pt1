# 2. Fundamentos de JavaScript

## 2.1. ¡Hola, mundo!

Esta sección marca el inicio práctico con JavaScript según la guía de Kantor (2024). El objetivo principal es entender cómo incorporar scripts dentro de un documento Web (`.html` o `.php`) y ejecutar las primeras instrucciones en el navegador.

---

### 2.1.1. Conceptos Clave

1. **La etiqueta `<script>`:**
   Contiene el código JavaScript que el navegador interpreta y ejecuta al cargar la página.
2. **Atributo `src` (Scripts Externos):**
   Permite vincular un archivo de JavaScript separado (por ejemplo, `carpetaJS/alerta.js`).
   > **Regla de Oro:** Si la etiqueta `<script>` incluye el atributo `src`, **cualquier código escrito dentro de la etiqueta `<script>...</script>` será ignorado por el navegador**.

---

### 2.1.2. Ejercicios Prácticos

#### Ejercicio 1: Script Incrustado (Inline)

Este enfoque incluye el código JavaScript directo dentro del archivo HTML/PHP.

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base para Kantor (2024)</title>
</head>
<body>
    <h1>2. Fundamentos de JavaScript con Kantor (2024)</h1>
    <h2>2.1. ¡Hola, mundo!</h2>
    <h3>2.1.1. Mostrar alerta con script dentro del documento .php (o .html)</h3>

    <script>
        alert("¡Hola mundo!\n¡Soy un script de JavaScript incrustado en el archivo .php (o .html)!");
    </script>
</body>
</html>
```

---

#### Ejercicio 2: Script Externo (`.js`)

Es la **buena práctica estándar** en el desarrollo web, ya que separa la estructura de la página (HTML) de la lógica de programación (JS) y aprovecha la caché del navegador para mejorar el rendimiento.

##### Estructura de archivos:
```text
├── index.php (o index.html)
└── carpetaJS/
    └── alerta.js
```

##### Archivo: `carpetaJS/alerta.js`
```javascript
alert("¡Hola mundo!\n¡Soy un script de JavaScript externo al archivo .php (o .html)!\nEstoy en carpetaJS/alerta.js");
```

##### Archivo: `index.php` / `index.html`
```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base para Kantor (2024)</title>
</head>
<body>
    <h1>2. Fundamentos de JavaScript con Kantor (2024)</h1>
    <h2>2.1. ¡Hola, mundo!</h2>
    <h3>2.1.1. Mostrar alerta con script en documento externo .js</h3>

    <!-- Vinculación del archivo externo correctamente -->
    <script src="carpetaJS/alerta.js"></script>
</body>
</html>
```

---

### 💡 Actualizaciones y Mejores Prácticas (Estado del Arte)

1. **Atributo `type="text/javascript"` omitido:**
   Anteriormente era obligatorio especificar `type="text/javascript"`. Hoy en día es completamente innecesario ya que JavaScript es el lenguaje por defecto del estándar HTML5.

2. **Atributos de Carga (`defer` y `async`):**
   Al cargar scripts externos en proyectos modernos, se suelen usar atributos para no bloquear la carga visual del HTML:
   * `defer`: Carga el script en segundo plano y lo ejecuta una vez que el HTML esté completamente analizado (*parsed*). Es la opción recomendada cuando el script manipula elementos del DOM.
   ```html
   <script src="carpetaJS/alerta.js" defer></script>
   ```
   * `async`: Carga e interrumpe el análisis para ejecutarse en cuanto esté listo (ideal para análisis de métricas o scripts independientes).

3. **Consola vs. Alertas (`console.log` vs `alert`):**
   Aunque Kantor introduce `alert()` por su sencillez al bloquear la ejecución para mostrar un mensaje, en entornos de desarrollo modernos se prefiere usar `console.log()` para depurar código sin interrumpir la experiencia de usuario:
   ```javascript
   console.log("¡Hola mundo desde la consola del navegador!");
   ```