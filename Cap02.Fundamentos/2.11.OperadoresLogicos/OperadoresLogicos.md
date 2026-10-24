# 2. Fundamentos de JavaScript

## 2.11. Operadores Lógicos

Los operadores lógicos en JavaScript (`||`, `&&`, `!`) pueden aplicarse a valores de cualquier tipo y sus resultados también pueden ser de cualquier tipo. Evalúan expresiones utilizando el mecanismo de **evaluación de cortocircuito** (*short-circuit evaluation*).

---

### 2.11.1. Operador OR (`||`)

El operador OR devuelve el primer valor *truthy* que encuentra, o el último valor si todos son *falsy*.

```javascript
let resultado = a || b;
```

#### Regla del primer valor *truthy*:
1. Evalúa los operandos de izquierda a derecha.
2. Convierte cada operando a booleano. Si el resultado es `true`, se detiene y devuelve el valor **original** de ese operando.
3. Si todos los operandos han sido evaluados y todos son `false`, devuelve el **último** operando.

---

### 2.11.2. Operador AND (`&&`)

El operador AND devuelve el primer valor *falsy* que encuentra, o el último valor si todos son *truthy*.

```javascript
let resultado = a && b;
```

> **Precedencia:** El operador `&&` tiene mayor precedencia que `||`, por lo que se ejecuta antes en expresiones mixtas.

---

### 2.11.3. Operador NOT (`!`)

El operador NOT acepta un solo argumento y realiza lo siguiente:
1. Convierte el valor al tipo booleano (`true` o `false`).
2. Devuelve el valor inverso.

Un doble NOT (`!!`) se utiliza frecuentemente para convertir un valor a su equivalente booleano estricto:
```javascript
alert(!!"cadena de texto"); // true
alert(!!null); // false
```

---

### 📋 Ejercicios Resueltos: Operadores Lógicos

#### Ejercicio 1: ¿Cuál es el resultado de OR?
```javascript
alert( null || 2 || undefined );
```
* **Resultado:** `2`
* **Explicación:** `null` es *falsy*, pasa al siguiente. `2` es *truthy*, por lo que la evaluación se detiene y se devuelve `2`.

---

#### Ejercicio 2: Resultado de alertas en OR
```javascript
alert( alert(1) || 2 || alert(3) );
```
* **Resultado:** Muestra `1` y luego `2`.
* **Explicación:** La llamada a `alert(1)` muestra `1` y retorna `undefined` (*falsy*). Pasa al siguiente término: `2` (*truthy*), por lo que la alerta externa muestra `2`. `alert(3)` nunca se ejecuta.

---

#### Ejercicio 3: ¿Cuál es el resultado de AND?
```javascript
alert( 1 && null && 2 );
```
* **Resultado:** `null`
* **Explicación:** `&&` retorna el primer valor *falsy*. `1` es *truthy*, pero `null` es *falsy*, así que se detiene y lo devuelve.

---

#### Ejercicio 4: Resultado de alertas en AND
```javascript
alert( alert(1) && alert(2) );
```
* **Resultado:** Muestra `1` y luego `undefined`.
* **Explicación:** `alert(1)` ejecuta la alerta y devuelve `undefined` (*falsy*). El operador `&&` se detiene y devuelve `undefined`, el cual es mostrado por el `alert` exterior.

---

#### Ejercicio 5: Resultado de OR AND OR
```javascript
alert( null || 2 && 3 || 4 );
```
* **Resultado:** `3`
* **Explicación:** `&&` tiene mayor precedencia: `2 && 3` evalúa a `3`. Luego, `null || 3 || 4` evalúa al primer valor *truthy*, que es `3`.

---

#### Ejercicio 6: Comprueba el rango por dentro
Escribe una condición `if` para comprobar que `age` está entre `14` y `90` inclusivo:

```javascript
if (age >= 14 && age <= 90) {
  // Rango correcto
}
```

---

#### Ejercicio 7: Comprueba el rango por fuera
Escribe una condición `if` para comprobar que `age` NO está entre `14` y `90` inclusivo:

* **Variante con NOT (`!`):**
  ```javascript
  if (!(age >= 14 && age <= 90))
  ```
* **Variante sin NOT (`!`):**
  ```javascript
  if (age < 14 || age > 90)
  ```

---

#### Ejercicio 8: Pregunta sobre `if`
```javascript
if (-1 || 0) alert( "primero" );
if (-1 && 0) alert( "segundo" );
if (null || -1 && 1) alert( "tercero" );
```
* **Alerts ejecutados:** `"primero"` y `"tercero"`.

---

#### Ejercicio 9: Comprueba el inicio de sesión
```javascript
let userName = prompt("¿Quién es?", "");

if (userName === "Admin") {
  let password = prompt("Contraseña:", "");

  if (password === "TheMaster") {
    alert("¡Bienvenido!");
  } else if (password === "" || password === null) {
    alert("Cancelado.");
  } else {
    alert("Contraseña incorrecta");
  }
} else if (userName === "" || userName === null) {
  alert("Cancelado.");
} else {
  alert("No te conozco");
}
```

---

## 2.12. Operador Nullish Coalescing (`??`)

El operador **Nullish Coalescing** (`??`) proporciona una forma corta de elegir el primer valor "definido" de una lista.

### Sintaxis
```javascript
resultado = a ?? b;
```
Devuelve `a` si está definida (no es ni `null` ni `undefined`). En caso contrario, devuelve `b`.

### Diferencia clave: `||` vs `??`

* `||` devuelve el primer valor **truthy** (trata a `0`, `""`, `false`, `null` y `undefined` por igual).
* `??` devuelve el primer valor **definido** (solo reacciona ante `null` y `undefined`).

```javascript
let height = 0;

alert(height || 100); // 100 (0 es falsy)
alert(height ?? 100); // 0 (0 está definido)
```

> **Restricción de Seguridad:** No es posible combinar `??` directamente con `&&` o `||` sin usar paréntesis explícitos:
> ```javascript
> let x = (1 && 2) ?? 3; // Correcto
> ```