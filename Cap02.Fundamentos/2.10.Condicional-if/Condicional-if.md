# 2. Fundamentos de JavaScript

## 2.10. Ejecución Condicional: `if` y el Operador Ternario `?`

A menudo necesitamos realizar diferentes acciones según diferentes condiciones. Para lograr esto, podemos usar la sentencia `if` y el operador condicional (también llamado operador "signo de interrogación" o "ternario").

---

### 2.10.1. La sentencia `if`

La sentencia `if(...)` evalúa la condición encerrada entre paréntesis y convierte el resultado a un valor booleano (`true` o `false`).

#### Sintaxis básica:
```javascript
let ano = prompt('¿En qué año se publicó la especificación ECMAScript 2015?', '');

if (ano == 2015) alert('¡Estás en lo correcto!');
```

Si queremos ejecutar un bloque de varias líneas de código, debemos envolver las sentencias dentro de un bloque de llaves `{ ... }`:

```javascript
if (ano == 2015) {
  alert('¡Eso es correcto!');
  alert('¡Eres muy inteligente!');
}
```

> **Buena práctica:** Se recomienda utilizar siempre llaves `{}` en las sentencias `if`, incluso si solo hay una línea de código. Esto mejora la legibilidad del código y previene errores al agregar líneas en el futuro.

---

### 2.10.2. Conversión a Booleano en Condicionales

La sentencia `if` evalúa la expresión dentro de sus paréntesis y convierte el resultado a booleano mediante las reglas de coerción de tipos (*Truthiness*):

* Los valores que se convierten a `false` son llamados **falsy** (falsos por coerción):
  * `0`
  * Cadena vacía `""`
  * `null`
  * `undefined`
  * `NaN`
* Cualquier otro valor se convierte a `true` (**truthy**).

#### Ejemplo:
```javascript
if (0) { // 0 es falsy, este bloque NUNCA se ejecutará
  alert('Nunca me verás');
}

if (1) { // 1 es truthy, este bloque SIEMPRE se ejecutará
  alert('Siempre me verás');
}
```

---

### 2.10.3. La cláusula `else`

La sentencia `if` puede contener un bloque opcional `else` que se ejecutará únicamente cuando la condición dentro del `if` sea **falsa**.

```javascript
let ano = prompt('¿En qué año se publicó la especificación ECMAScript 2015?', '');

if (ano == 2015) {
  alert('¡Lo adivinaste!');
} else {
  alert('¿Cómo puedes estar tan equivocado?'); // Se ejecuta si ano != 2015
}
```

---

### 2.10.4. Múltiples condiciones: `else if`

A veces queremos probar varias variantes de una condición. Para ello se utiliza la cláusula `else if`.

```javascript
let ano = prompt('¿En qué año se publicó la especificación ECMAScript 2015?', '');

if (ano < 2015) {
  alert('Muy temprano...');
} else if (ano > 2015) {
  alert('Muy tarde...');
} else {
  alert('¡Exacto!');
}
```

JavaScript evalúa las condiciones de arriba abajo:
1. Si `ano < 2015` es verdadero, ejecuta su bloque y omite todo el resto.
2. Si es falso, pasa al siguiente `else if (ano > 2015)`.
3. Si ninguna condición previa fue verdadera, se ejecuta el bloque `else` final.

---

### 2.10.5. Operador Condicional `?` (Operador Ternario)

A veces necesitamos asignar un valor a una variable dependiendo de una condición. 

```javascript
let accesoPermitido;
let edad = prompt('¿Cuántos años tienes?', '');

if (edad > 18) {
  accesoPermitido = true;
} else {
  accesoPermitido = false;
}

alert(accesoPermitido);
```

El **operador ternario** o de signo de interrogación `?` nos permite escribir esto de forma mucho más corta y concisa:

#### Sintaxis:
$$\text{let resultado} = \text{condición} \; ? \; \text{valor\_si\_verdadero} \; : \; \text{valor\_si\_falso};$$

#### Ejemplo reescrito:
```javascript
let accesoPermitido = (edad > 18) ? true : false;
```

> **Nota:** El paréntesis alrededor de la condición `(edad > 18)` es opcional, pero se recomienda incluirlo para mejorar la legibilidad.

#### Múltiples `?` encadenados:
Una secuencia de operadores `?` puede retornar valores basados en múltiples condiciones (similar a un `else if`):

```javascript
let edad = prompt('¿Edad?', 18);

let mensaje = (edad < 3) ? '¡Hola, bebé!' :
  (edad < 18) ? '¡Hola!' :
  (edad < 100) ? '¡Saludos!' :
  '¡Qué edad tan extraordinaria!';

alert(mensaje);
```

---

### 2.10.6. Uso no recomendado de `?` como reemplazo de `if`

Aunque es posible usar el operador `?` simplemente para ejecutar instrucciones de código en lugar de retornar un valor, no es una buena práctica:

```javascript
// Mal estilo de código:
(company == 'Netscape') ? alert('¡Correcto!') : alert('Incorrecto');
```

El propósito de `?` es **devolver un valor**. Cuando necesites ejecutar diferentes ramas de código por sus efectos secundarios (como hacer un `alert`), usa siempre la sentencia `if`.

---

### 💡 Actualizaciones y Mejores Prácticas (Estado del Arte)

1. **Patrón Guard Clause (Cláusula de Guardia):**
   En funciones modernas, en lugar de anidar múltiples `if/else`, se prefiere retornar lo antes posible para reducir la complejidad cognitiva del código.

   ```javascript
   // ❌ Anidamiento innecesario
   function procesarUsuario(user) {
     if (user) {
       if (user.isActive) {
         // Lógica principal
       }
     }
   }

   // ✅ Guard Clause (Limpio y legible)
   function procesarUsuario(user) {
     if (!user) return;
     if (!user.isActive) return;

     // Lógica principal
   }
   ```

2. **Evitar ternarios anidados complejos:**
   Aunque el manual muestra cómo encadenar ternarios `(cond1) ? x : (cond2) ? y : z`, en el estándar moderno de JavaScript (y reglas de linters como ESLint) se considera un antipatrón porque dificulta la lectura. Si hay más de una condición, prefiere `if / else` o la sentencia `switch`.

3. **Operador de Fusión Nula (`??`) y Encadenamiento Opcional (`?.`):**
   Muchas veces usábamos `if` o ternarios para verificar si una variable existía antes de leer sus propiedades. En el JavaScript moderno existen operadores sintácticos directos para esto:
   ```javascript
   // Antes:
   let nombre = user ? user.name : 'Invitado';

   // Ahora:
   let nombre = user?.name ?? 'Invitado';
   ```

---

### 📋 Ejercicios Prácticos Resueltos

A continuación se presentan las soluciones comentadas a los ejercicios del capítulo, alineadas con las pruebas realizadas en `ejercicioCondicional-if.js`.

#### Ejercicio 1: ¿Se ejecutará el `alert`?

```javascript
if ("0") {
  alert('Hello');
}
```

* **Respuesta:** **Sí, se mostrará.**
* **Explicación:** Cualquier cadena de texto no vacía (incluida `"0"`) evalúa a `true` en un contexto booleano (*truthy*). Únicamente la cadena vacía `""` evalúa a `false` (*falsy*).

---

#### Ejercicio 2: El nombre de JavaScript

Escribe el código que pregunta: *'¿Cuál es el nombre "oficial" de JavaScript?'*. Si el usuario escribe `"ECMAScript"`, muestra *"¡Correcto!"*, de lo contrario muestra *"¿No lo sabes? ¡ECMAScript!"*.

**Solución:**
```javascript
let respuesta = prompt("¿Cuál es el nombre “oficial” de JavaScript?");

if (respuesta === "ECMAScript") {
  alert("¡Correcto!");
} else {
  alert("¿No lo sabes? ¡ECMAScript!");
}
```

---

#### Ejercicio 3: Mostrar el signo (positivo, negativo o neutro)

Recibe un número a través de un `prompt` y muestra si es mayor que cero (`>0`), menor que cero (`<0`) o neutro (`===0`).

**Solución:**
```javascript
let numero = Number(prompt("Ingresa un número para evaluar si es “positivo“ (>0), “negativo“ (<0) o “neutro“ (=0)"));

if (numero === 0) {
  alert(`El número que ingresaste es “neutro“ dado que es el ${numero} (cero)`);
} else if (numero > 0) {
  alert(`El número que ingresaste es “positivo“ dado que es el ${numero}`);
} else {
  alert(`El número que ingresaste es “negativo“ dado que es el ${numero}`);
}
```

---

#### Ejercicio 4: Reescribir `if` en `?`

Reescribe esta condición `if` usando el operador ternario `?`:

```javascript
// Código original:
let result;
if (a + b < 4) {
  result = 'Debajo';
} else {
  result = 'Encima';
}
```

**Solución:**
```javascript
let result = (a + b < 4) ? 'Debajo' : 'Encima';
```

---

#### Ejercicio 5: Reescribir `if..else` múltiples en `?`

Reescribe las sentencias `if..else` encadenadas utilizando operadores ternarios múltiples `?`:

```javascript
// Código original:
let message;
if (login == 'Empleado') {
  message = 'Hola';
} else if (login == 'Director') {
  message = 'Felicidades';
} else if (login == '') {
  message = 'Sin sesión';
} else {
  message = '';
}
```

**Solución:**
```javascript
let message = (login == 'Empleado') ? 'Hola' :
  (login == 'Director') ? 'Felicidades' :
  (login == '') ? 'Sin sesión' :
  '';
```