# 2. Fundamentos de JavaScript

## 2.9. Comparaciones

En JavaScript, las comparaciones devuelven un valor booleano (`true` o `false`). Son fundamentales para controlar el flujo de una aplicación en combinación con estructuras condicionales.

### 2.9.1. Comparaciones Booleanas Básicas

Todos los operadores de comparación tradicionales devuelven un valor de tipo `boolean`:

* Mayor / Menor que: `a > b`, `a < b`
* Mayor / Menor o igual que: `a >= b`, `a <= b`
* Igualdad suelta: `a == b`
* Desigualdad suelta: `a != b`
* Igualdad estricta: `a === b`
* Desigualdad estricta: `a !== b`

```javascript
let resultado = 5 > 4; // true
alert(resultado);
```

### 2.9.2. Comparación de Cadenas de Texto (String)

Para ver cuál cadena es "mayor" que otra, JavaScript utiliza el **orden lexicográfico** (similar al orden alfabético de un diccionario, pero basado en la tabla de codificación Unicode).

```javascript
alert( 'Z' > 'A' ); // true
alert( 'Glow' > 'Glee' ); // true
alert( 'Bee' > 'Be' ); // true
```

#### Reglas de comparación de cadenas:

1. Compara el primer carácter de ambas cadenas.
2. Si el primer carácter de la primera cadena es mayor (o menor) que el de la segunda, la primera cadena es mayor (o menor). La comparación termina.
3. Si los primeros caracteres son iguales, se comparan los segundos caracteres, y así sucesivamente.
4. Si ambas cadenas terminan con la misma longitud y mismos caracteres, son iguales. Si una cadena es más corta que la otra, la más larga es considerada mayor.

> **Atención con minúsculas y mayúsculas:** Las letras minúsculas tienen un código Unicode mayor que las mayúsculas (ej. `'a' > 'A'` es `true`).

### 2.9.3. Comparación de Tipos Diferentes

Cuando se comparan valores de diferentes tipos con operadores relacionales (`>`, `<`, `>=`, `<=`) o igualdad no estricta (`==`), JavaScript los convierte automáticamente a **números** (*Type Coercion*).

```javascript
alert( '2' > 1 ); // true, la cadena '2' se convierte al número 2
alert( '01' == 1 ); // true, la cadena '01' se convierte al número 1
```

#### Casos especiales con booleanos:

Los valores booleanos se convierten a `1` (`true`) y `0` (`false`):

```javascript
alert( true == 1 ); // true
alert( false == 0 ); // true
```

---

### 2.9.4. Igualdad y Desigualdad: Estricta vs. Suelta

JavaScript cuenta con dos pares de operadores de igualdad/desigualdad que se diferencian en la conversión de tipos:

#### 1. Operadores Sueltos o No Estrictos (`==` y `!=`)
Intentan convertir los operandos a un tipo común antes de comparar. Esto puede causar inconsistencias no intuitivas.

```javascript
alert( 0 == false );   // true (ambos se convierten al número 0)
alert( '' == false );  // true (la cadena vacía se convierte a 0)
alert( 0 != false );   // false (ya que se consideran iguales)
```

#### 2. Operadores Estrictos (`===` y `!==`)
La **igualdad estricta (`===`)** y la **desigualdad estricta (`!==`)** comparan el valor **y el tipo de dato** sin realizar conversiones automáticas.

* **Igualdad estricta (`===`):** Devuelve `true` solo si los operandos son idénticos en tipo y valor.
* **Desigualdad estricta (`!==`):** Devuelve `true` si los operandos tienen tipos diferentes **O** valores diferentes.

```javascript
// Igualdad estricta
alert( 0 === false );  // false (number vs boolean)

// Desigualdad estricta
alert( 0 !== false );  // true (son de distintos tipos, por lo tanto NO son estrictamente iguales)
alert( 5 !== "5" );    // true (number vs string)
alert( 5 !== 5 );      // false (mismo tipo y mismo valor)
```

> **Regla de Oro:** Utiliza siempre la igualdad estricta (`===`) y desigualdad estricta (`!==`) para evitar errores silenciosos e impredecibles por conversión implícita de tipos.

---

### 2.9.5. Comparaciones con `null` y `undefined`

`null` y `undefined` presentan comportamientos no intuitivos cuando se comparan con otros valores:

#### Con Igualdad / Desigualdad Suelta (`==`, `!=`):

`null` y `undefined` son iguales entre sí y a ningún otro valor.

```javascript
alert( null == undefined ); // true
alert( null != undefined ); // false
alert( null == 0 );         // false
alert( undefined == 0 );    // false
```

#### Con Comparaciones Relacionales (`>`, `<`, `>=`, `<=`):

* `null` se convierte al número `0`.
* `undefined` se convierte a `NaN`.

```javascript
alert( null > 0 );  // false (0 > 0 es falso)
alert( null == 0 ); // false (regla especial de ==: null solo equivale a undefined)
alert( null >= 0 ); // true  (0 >= 0 es verdadero)
```

---

### 💡 Actualizaciones y Mejores Prácticas (Estado del Arte)

1. **Evitar `==` y `!=` por completo (*Linter Standards*):**
   Herramientas modernas como ESLint o Biome fuerzan por defecto la regla `eqeqeq`, prohibiendo el uso de `==` y `!=` a favor de `===` y `!==` debido a sus reglas de coerción impredecibles.

2. **Uso de `Object.is()` para casos límite:**
   En desarrollo moderno existe `Object.is(a, b)`, que funciona de forma muy parecida a `===` pero gestiona correctamente casos especiales:

   ```javascript
   Object.is(NaN, NaN); // true (con NaN === NaN daría false)
   Object.is(-0, +0);   // false (con -0 === +0 daría true)
   ```

3. **Comparación Sensible a la Localización (*Locale-aware*):**
   Para comparar texto respetando el idioma local (acentos, caracteres especiales como la 'ñ'), la comparación lexicográfica por defecto (`>`) no es suficiente. Se utiliza `String.prototype.localeCompare()`:

   ```javascript
   'a'.localeCompare('z'); // -1 ('a' va antes que 'z')
   'ö'.localeCompare('z', 'de'); // Respetando reglas del idioma alemán
   ```

---

### 📋 Ejercicio Práctico Resuelto

¿Cuál será el resultado de las siguientes expresiones?

```javascript
5 > 4                    // (1)
"apple" > "pineapple"    // (2)
"2" > "12"               // (3)
undefined == null        // (4)
undefined === null       // (5)
null == "\n0\n"          // (6)
null === +"\n0\n"        // (7)
```

#### Solución y Justificación:

1. **`5 > 4`** $\rightarrow$ **`true`**
   * *Explicación:* Comparación numérica directa donde 5 es mayor que 4.

2. **`"apple" > "pineapple"`** $\rightarrow$ **`false`**
   * *Explicación:* Comparación lexicográfica. Al evaluar el primer carácter, `'a'` tiene un código Unicode menor que `'p'`.

3. **`"2" > "12"`** $\rightarrow$ **`true`**
   * *Explicación:* Ambas son cadenas, por lo que se comparan carácter por carácter. El carácter `'2'` es mayor que el carácter `'1'` (primer carácter de `"12"`).

4. **`undefined == null`** $\rightarrow$ **`true`**
   * *Explicación:* Regla especial de la igualdad no estricta: `null` y `undefined` solo son iguales entre sí.

5. **`undefined === null`** $\rightarrow$ **`false`**
   * *Explicación:* La igualdad estricta evalúa el tipo de dato. `undefined` y `null` pertenecen a tipos primitivos distintos.

6. **`null == "\n0\n"`** $\rightarrow$ **`false`**
   * *Explicación:* `null` bajo el operador `==` no se convierte a número; únicamente es igual a `undefined`.

7. **`null === +"\n0\n"`** $\rightarrow$ **`false`**
   * *Explicación:* `+"\n0\n"` convierte la cadena al número `0`. Al usar igualdad estricta (`===`), un objeto/primitivo `null` no es de tipo `number`.