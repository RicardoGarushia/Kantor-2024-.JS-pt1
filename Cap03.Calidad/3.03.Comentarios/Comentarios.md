# 3.3. Comentarios en el Código (Comments)

Un aspecto fundamental de la calidad del software es la documentación interna mediante comentarios. Sin embargo, a medida que las bases de código crecen y evolucionan, los comentarios pueden convertirse en una fuente de desinformación si no se gestionan correctamente.

La máxima principal respecto a la documentación en código es: **"El buen código se documenta a sí mismo; los comentarios deben explicar el POR QUÉ, nunca el QUÉ o el CÓMO"**.

---

### 3.3.1. Tipos de Comentarios: Malos vs. Buenos

#### A. Comentarios Malos o Redundantes (Qué hace el código)
Escribir comentarios para explicar explícitamente lo que hace una instrucción simple genera ruido visual y requiere mantenimiento innecesario cuando el código cambia.

```javascript
// ❌ MALO: Comentario redundante que solo repite la sintaxis
// Asigna 1 a la variable result
let result = 1;

// Incrementa i en 1
i++;

// Verifica si n es menor o igual a cero
if (n <= 0) { ... }
```

Si el código es tan complejo que requiere explicar paso a paso *qué* hace, la solución no es agregar un comentario, sino **refactorizar el código** para volverlo autoexplicativo (por ejemplo, renombrando variables o extrayendo bloques de lógica a funciones independientes).

#### B. Comentarios de Refactorización (En lugar de comentar, nombra)
En lugar de dejar un comentario para explicar un bloque de código opaco:

```javascript
// ❌ MALO: Requiere comentario para entender la condición
if (user.age >= 18 && user.hasPaidSubscription && !user.isBanned) {
  // ...
}
```

Es preferible extraer esa lógica a una variable o función con un nombre descriptivo:

```javascript
// ✅ BUENO: El nombre de la variable reemplaza al comentario
const isEligibleForPremiumContent = 
  user.age >= 18 && user.hasPaidSubscription && !user.isBanned;

if (isEligibleForPremiumContent) {
  // ...
}
```

---

#### C. Buenos Comentarios: Explicar el "Por qué" y las Decisiones de Arquitectura
Los comentarios valiosos son aquellos que transmiten información que no se puede deducir únicamente leyendo el código:

1. **Explicación de decisiones no triviales o trucos algorítmicos:**
   ```javascript
   // ✅ BUENO: Explica la razón de una optimización o restricción técnica
   // Usamos desplazamiento de bits en lugar de Math.floor debido a un 
   // cuello de botella comprobado en renders masivos (ver Benchmark #402).
   let middle = (start + end) >> 1;
   ```

2. **Advertencias sobre efectos secundarios o comportamientos no intuitivos:**
   ```javascript
   // ✅ BUENO: Previene a otros desarrolladores de romper algo
   // NOTA: No cambiar el orden de esta llamada. La API de Safari lanza un 
   // TypeError si la sesión de audio no se inicializa antes del primer gesto.
   await initializeAudioContext();
   ```

3. **Referencias a bugs, tickets o soluciones de soporte:**
   ```javascript
   // ✅ BUENO: Enlaza a contexto externo relevante
   // Parche temporal para el bug conocido en Chrome 124 (ver ticket JIRA-4092)
   element.style.transform = 'translateZ(0)';
   ```

---

### 3.3.2. Documentación Formal de Funciones con JSDoc

Cuando desarrollas funciones, módulos o bibliotecas reutilizables, los comentarios de arquitectura deben estructurarse utilizando el estándar **JSDoc**. 

JSDoc permite documentar los tipos de parámetros, valores de retorno y descripciones directas en el código. Además, los editores modernos (como VSCode) leen estas anotaciones para proporcionar **IntelliSense** (autocompletado e inspección de tipos al pasar el cursor) sin necesidad de usar TypeScript.

#### Ejemplo de Documentación JSDoc:

```javascript
/**
 * Calcula la potencia de un número base elevado a un exponente entero.
 *
 * @param {number} x - La base numérica a elevar.
 * @param {number} n - El exponente (debe ser un entero mayor o igual a cero).
 * @returns {number} El resultado de elevar `x` a la potencia `n`.
 * @throws {Error} Si `n` no es un número entero positivo.
 *
 * @example
 * const resultado = pow(2, 3); // Retorna 8
 */
function pow(x, n) {
  if (n <= 0 || !Number.isInteger(n)) {
    throw new Error(`El exponente ${n} debe ser un entero mayor a cero.`);
  }

  return x ** n;
}
```

---

### 3.3.3. Marcas de Seguimiento Frecuentes (TODO, FIXME, HACK)

En el código moderno se utilizan convenciónes con palabras clave estandarizadas que las herramientas del editor (como extensiones de *Todo Tree*) detectan automáticamente:

* **`// TODO:`** Indica una tarea pendiente o funcionalidad que se agregará en el futuro.
* **`// FIXME:`** Señala un fragmento de código que contiene un error conocido o un comportamiento ineficiente que necesita corrección.
* **`// HACK:`** Advierte que se utilizó una solución rápida o poco elegante debido a una limitación de tiempo o del entorno.

```javascript
// TODO: Refactorizar esta función cuando la API v2 soporte peticiones en lote.
// FIXME: Esta validación falla si el nombre del usuario contiene caracteres especiales.
// HACK: Timeout arbitrario para esperar el renderizado del DOM en navegadores móviles.
```

---

### 3.3.4. Estado del Arte y Tendencias Modernas en Documentación

1. **Adopción de TypeScript sobre JSDoc Extenso:**
   * En el desarrollo moderno (2024+), la verificación de tipos se delega a **TypeScript**. Aunque JSDoc sigue siendo relevante en proyectos JavaScript nativos, la tendencia de la industria es definir tipos mediante interfaces o tipos de TypeScript (`type` / `interface`), dejando los comentarios solo para explicaciones conceptuales del *por qué*.

2. **Herramientas de Generación de Documentación Automática:**
   * Utilidades como **TypeDoc** o **Starlight** leen directamente la estructura del código y los comentarios JSDoc/TSDoc para construir sitios web de documentación interactivos automáticamente dentro del flujo de CI/CD.

3. **Limpieza en Control de Versiones (No comentar código muerto):**
   * Antiguamente se solía comentar bloques de código viejos "por si acaso se necesitan después".
   * **Práctica actual:** Se considera **mala práctica** dejar código comentado en producción. Para recuperar versiones antiguas o código desechado existe el sistema de control de versiones (**Git**). Si un bloque de código no se usa, debe ser eliminado por completo.