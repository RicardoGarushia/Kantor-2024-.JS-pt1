# 2. Fundamentos de JavaScript

## 2.6. Interacción: alert, prompt, confirm

Para interactuar con el usuario en el navegador, JavaScript proporciona tres funciones nativas del objeto `window`. Todas ellas muestran **ventanas modales**: ventanas emergentes que pausan la ejecución del código y previenen que el usuario interactúe con el resto de la página hasta que la ventana sea cerrada o respondida.

---

### 2.6.1. `alert`

Muestra un mensaje simple en pantalla y espera a que el usuario presione el botón **"Aceptar"** (OK).

#### Sintaxis:
```javascript
alert(mensaje);
```

#### Ejemplo:
```javascript
alert("¡Hola! Esta es una notificación.");
```

* **Retorno:** Devuelve `undefined`.
* **Uso:** Mostrar información unidireccional al usuario.

---

### 2.6.2. `prompt`

Muestra una ventana modal con un mensaje de texto, un campo de entrada de texto (*input*) y dos botones: **"Aceptar"** y **"Cancelar"**.

#### Sintaxis:
```javascript
let resultado = prompt(titulo, [valorPorDefecto]);
```

* `titulo`: El texto a mostrar al usuario.
* `valorPorDefecto` *(opcional)*: El valor inicial con el que se rellenará el campo de texto.

#### Ejemplo:
```javascript
let edad = prompt("¿Cuántos años tienes?", 18);

alert(`Tienes ${edad} años.`); // Muestra el valor ingresado por el usuario
```

#### Comportamiento del valor de retorno:
* Si el usuario escribe algo y hace clic en **Aceptar**, `prompt` devuelve **el texto ingresado como un `string`**.
* Si el usuario hace clic en **Cancelar** o presiona `Esc`, `prompt` devuelve **`null`**.

> **Regla de compatibilidad (Internet Explorer / Legacy):**
> Siempre proporciona un segundo argumento para `prompt` (incluso una cadena vacía `""`), ya que versiones antiguas de IE mostraban `"undefined"` en la casilla de texto si este argumento se omitía.

---

### 2.6.3. `confirm`

Muestra una ventana modal con una pregunta y dos botones: **"Aceptar"** y **"Cancelar"**.

#### Sintaxis:
```javascript
let esConfirmado = confirm(pregunta);
```

#### Ejemplo:
```javascript
let esBoss = confirm("¿Eres el administrador del sitio?");

alert(esBoss); // true si presionó Aceptar, false si presionó Cancelar
```

#### Comportamiento del valor de retorno:
* Devuelve **`true`** si el usuario hace clic en **Aceptar**.
* Devuelve **`false`** si el usuario hace clic en **Cancelar** o presiona `Esc`.

---

### 2.6.4. Limitaciones de las ventanas modales nativas

Aunque `alert`, `prompt` y `confirm` son muy fáciles de usar para aprender y prototipar rápidamente, tienen tres limitaciones importantes en aplicaciones web reales:

1. **Estilo visual no personalizable:** La apariencia física de la ventana modal la define el sistema operativo y el navegador web. No se pueden modificar mediante CSS.
2. **Bloqueo del hilo de ejecución (*Blocking*):** Detienen por completo la ejecución de JavaScript y la renderización de la interfaz mientras están abiertas.
3. **Ubicación fija:** La posición de la ventana modal es determinada por el navegador (normalmente centrada en la parte superior del viewport).

---

### 💡 Actualizaciones y Mejores Prácticas (Estado del Arte)

1. **Riesgo en aplicaciones modernas:**
   Dado que estas funciones son síncronas y bloqueantes, los navegadores modernos pueden deshabilitar o limitar los diálogos emergentes si detectan que un sitio abusa de ellos o genera bucles de alertas.

2. **Reemplazo con HTML5 `<dialog>` o librerías de UI:**
   En proyectos de producción reales, las ventanas nativas se reemplazan por la etiqueta HTML nativa `<dialog>` o por modales de librerías como SweetAlert2, Dialogs de React/Vue o componentes de Tailwind UI/Bootstrap:
   ```html
   <!-- Enfoque moderno en HTML5 -->
   <dialog id="miModal">
     <p>¿Estás seguro de eliminar este registro?</p>
     <button id="btnAceptar">Aceptar</button>
   </dialog>
   ```

3. **Uso práctico en desarrollo:**
   Siguen siendo sumamente útiles durante la etapa de aprendizaje o para pruebas de concepto ultrarrápidas donde no se requiere configurar una interfaz de usuario completa.

---

### 📋 Ejercicio Práctico Sugerido

Crea una página simple que pida el nombre del usuario con `prompt` y luego muestre un mensaje de confirmación con `confirm` para saludarlo.

```javascript
let nombreUsuario = prompt("Por favor, ingresa tu nombre:", "");

if (nombreUsuario) {
  let confirmaSalud = confirm(`¿Deseas recibir un saludo personalizado, ${nombreUsuario}?`);
  if (confirmaSalud) {
    alert(`¡Bienvenido a nuestro sitio, ${nombreUsuario}!`);
  } else {
    alert("Proceso cancelado.");
  }
} else {
  alert("No ingresaste ningún nombre.");
}
```