# 2.13. Bucles: `while` y `for`

Los bucles (*loops*) nos permiten ejecutar un mismo bloque de código múltiples veces. Cada ejecución del cuerpo del bucle se denomina **iteración**.

---

### 2.13.1. El bucle `while`

Evalúa la condición **antes** de cada iteración. Si la condición es verdadera (*truthy*), ejecuta el cuerpo del bucle.

```javascript
while (condicion) {
  // Cuerpo del bucle
}
```

#### Ejemplo:
```javascript
let i = 0;
while (i < 3) {
  alert(i); // SALIDA: Muestra 0, luego 1, luego 2
  i++;
}
```

> **Nota:** Cualquier expresión o variable se evalúa como booleano dentro del `while`. Por ejemplo, `while (i)` se ejecutará hasta que `i` sea `0` (*falsy*).

---

### 2.13.2. El bucle `do...while`

La condición se evalúa **después** de ejecutar el cuerpo del bucle. Garantiza que el código se ejecute **al menos una vez**, independientemente de si la condición es verdadera desde el inicio.

```javascript
let i = 0;
do {
  alert(i);
  i++;
} while (i < 3);
```

---

### 2.13.3. El bucle `for`

Es la estructura repetitiva más utilizada. Consta de tres partes en su declaración:

$$\text{for} \; (\text{comienzo}; \text{condición}; \text{paso}) \{ \dots \}$$

```javascript
for (let i = 0; i < 3; i++) {
  alert(i); // 0, 1, 2
}
```

#### Partes del algoritmo:
1. **Comienzo (`let i = 0`):** Se ejecuta una sola vez al entrar al bucle. Si se declara la variable dentro (`let`), su alcance (*scope*) queda limitado únicamente al bucle.
2. **Condición (`i < 3`):** Se evalúa antes de cada iteración. Si es `false`, se detiene.
3. **Cuerpo (`alert(i)`):** Se ejecuta mientras la condición sea verdadera.
4. **Paso (`i++`):** Se ejecuta después de cada iteración del cuerpo.

#### Omitir componentes:
Cualquier parte del `for` se puede omitir, pero los dos puntos y coma `;` son obligatorios:
```javascript
let i = 0;
for (; i < 3;) { // Equivale a un bucle while
  alert(i++);
}

// Bucle infinito:
// for (;;) { ... }
```

---

### 2.13.4. Control del flujo del bucle: `break` y `continue`

* **`break`:** Rompe de inmediato el bucle y pasa el control a la línea posterior a este.
* **`continue`:** **No detiene el bucle.** Es una orden de *"siguiente, por favor"*: cancela lo que queda del cuerpo en la iteración actual y salta directamente al inicio de esta (comprobación de la condición / incremento).

```javascript
// Ejemplo de continue (solo muestra impares)
for (let i = 0; i < 10; i++) {
  if (i % 2 === 0) continue;
  alert(i); // 1, 3, 5, 7, 9
}
```

> **Restricción de Sintaxis:** No se puede usar `break` o `continue` a la derecha de un operador ternario `?`. Usa siempre `if`.

---

### 2.13.5. Etiquetas para `break` / `continue` (*Labels*)

Una etiqueta es un identificador **arbitrario** (inventado por ti) seguido de dos puntos `:` colocado **inmediatamente antes** de un bucle. Permite controlar el flujo en **bucles anidados** dirigiéndose a un bucle superior.

```javascript
outer: for (let i = 0; i < 3; i++) {
  for (let j = 0; j < 3; j++) {
    let input = prompt(`Valor en coords (${i},${j})`, '');
    if (!input) break outer; // Sale de ambos bucles hacia la etiqueta "outer"
  }
}
alert('Listo!');
```

> **⚠️ Regla de Sintaxis Importante (Error ts(1115)):**
> La etiqueta debe estar asociada **directamente** al bucle (`etiqueta: for ...`). Si la envuelves entre llaves como un bloque simple (`etiqueta: { for ... }`), `continue` lanzará un error porque **solo puede saltar a etiquetas que pertenezcan a sentencias de iteración (bucles)**, no a bloques genéricos `{}`.

---

### 💡 Actualizaciones y Mejores Prácticas (Estado del Arte)

1. **Evitar la modificación del contador dentro del cuerpo:**
   Modificar la variable de control (`i`) dentro del bloque de un bucle `for` dificulta el razonamiento del código y suele provocar errores de bucle infinito.

2. **Preferir métodos declarativos de Arrays (`forEach`, `map`, `filter`, `reduce`):**
   En el JavaScript moderno, los bucles imperativos `for` y `while` se reservan para algoritmos de alto rendimiento o lectura de secuencias masivas. En el día a día, el procesamiento de colecciones se realiza preferentemente con iteradores funcionales o `for...of`.

3. **Uso estricto de `for...of` vs `for...in`:**
   * **`for...of`:** Se usa para iterar sobre los **valores** de elementos iterables (Arrays, Cadenas, Maps, Sets).
   * **`for...in`:** Se usa únicamente para recorrer las **claves o propiedades** de un Objeto (no recomendado para Arrays por el orden no garantizado).

---

### 📋 Ejercicios Prácticos Resueltos

#### Ejercicio 1: Último valor del bucle
¿Cuál es el último valor mostrado en alerta por este código?
```javascript
let i = 3;
while (i) {
  alert(i--);
}
```
* **Respuesta:** `1`
* **Explicación:** En la iteración donde `i` vale `1`, `alert(1)` muestra `1` y luego `i--` decrementa `i` a `0`. En la siguiente comprobación `while(0)`, `0` es *falsy* y el bucle termina sin ejecutar `alert(0)`.

---

#### Ejercicio 2: Comparación de prefijo y sufijo en `while`
¿Qué valores muestra cada bucle?

1. **Forma prefijo `++i`:**
   ```javascript
   let i = 0;
   while (++i < 5) alert(i);
   ```
   * **Valores:** `1, 2, 3, 4`.
   * **Explicación:** `++i` primero incrementa y luego compara. Cuando `i` llega a 4, incrementa a 5, `5 < 5` es `false` y se detiene.

2. **Forma sufijo `i++`:**
   ```javascript
   let i = 0;
   while (i++ < 5) alert(i);
   ```
   * **Valores:** `1, 2, 3, 4, 5`.
   * **Explicación:** `i++` compara el valor actual de `i` y luego lo incrementa. Cuando `i` vale 4, la condición `4 < 5` es `true`, `i` sube a 5 y se ejecuta `alert(5)`.

---

#### Ejercicio 3: Comparación de prefijo y sufijo en `for`
¿Muestran los mismos valores ambos bucles?

1. `for (let i = 0; i < 5; i++) alert(i);`
2. `for (let i = 0; i < 5; ++i) alert(i);`

* **Respuesta:** **Sí, ambos muestran `0, 1, 2, 3, 4`.**
* **Explicación:** La parte del paso (`step`) se ejecuta como una sentencia separada al final de cada iteración, por lo que el valor devuelto por el incremento no es utilizado en ninguna expresión.

---

#### Ejercicio 4: Muestra números pares del 2 al 10
```javascript
for (let i = 2; i <= 10; i++) {
  if (i % 2 === 0) {
    alert(i);
  }
}
```

---

#### Ejercicio 5: Reemplazar `for` por `while`
Reescribe el código sin alterar su comportamiento:
```javascript
// Código original:
for (let i = 0; i < 3; i++) {
  alert(`número ${i}!`);
}
```

**Solución:**
```javascript
let i = 0;
while (i < 3) {
  alert(`número ${i}!`);
  i++;
}
```

---

#### Ejercicio 6: Repetir hasta que la entrada sea correcta
Pide un número mayor que `100`. Si se ingresa un valor menor, se vuelve a pedir hasta recibir un número `> 100`, una cadena vacía o una cancelación (`Esc`).

**Solución:**
```javascript
let num;
do {
  num = prompt("Ingresa un número mayor que 100", 0);
} while (num <= 100 && num !== null && num !== "");
```

---

#### Ejercicio 7: Muestra números primos
Escribe un código que imprima los números primos en el intervalo de `2` a `n`.

**Solución:**
```javascript
let limite = Number(prompt("Ingresa el límite (>= 2):", 0));

// La etiqueta va pegada directamente al bucle externo
patitoRegresaAca:
for (let i = 2; i <= n; i++) {

  // Bucle interno: verifica si 'i' tiene divisores
  for (let j = 2; j < i; j++) {
    if (i % j === 0) continue patitaRegresaAca; // No es primo, salta al siguiente i
  }
  alert(i); // Primo
}
```