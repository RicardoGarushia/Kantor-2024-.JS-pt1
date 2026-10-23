# 2. Fundamentos de JavaScript

## 2.7. Operadores Básicos y Matemáticas

---

### 2.7.1. Terminología Fundamental
* **Operando (o argumento):** Aquello a lo que se aplica un operador (en `5 * 2`, los operandos son `5` y `2`).
* **Operador Unario:** Se aplica a un solo operando (ej. negación unaria: `-x`).
* **Operador Binario:** Se aplica a dos operandos (ej. resta binaria: `y - x`).

---

### 2.7.2. Operaciones Matemáticas Soportadas

* **Suma (`+`)**
* **Resta (`-`)**
* **Multiplicación (`*`)**
* **División (`/`)**
* **Resto / Módulo (`%`):** Devuelve el resto de una división entera.
  * `alert(5 % 2); // 1`
* **Exponenciación (`**`):** Eleva el número a una potencia $a^b$.
  * `alert(2 ** 3); // 8`
  * Permite obtener raíces usando exponentes fraccionarios: `alert(4 ** (1/2)); // 2 (raíz cuadrada)`

---

### 2.7.3. Conversión Numérica con el Signo Más (`+`): Operador Unario
El operador suma `+` en su forma **unaria** (aplicado a un solo operando) no modifica los números, pero convierte cualquier valor no numérico a un número (idéntico a llamar a `Number(...)`, pero más corto):

```javascript
alert(+true);  // 1
alert(+"");    // 0

let apples = "2";
let oranges = "3";
alert(+apples + +oranges); // 5
```

---

### 2.7.4. Precedencia de Operadores
Cuando una expresión tiene más de un operador, el orden de ejecución lo determina su nivel de prioridad (*precedencia*).

| Precedencia | Nombre del Operador | Signo |
| :---: | :--- | :---: |
| **14** | Suma unaria | `+` |
| **14** | Negación unaria | `-` |
| **13** | Exponenciación | `**` |
| **12** | Multiplicación | `*` |
| **12** | División | `/` |
| **11** | Suma binaria | `+` |
| **11** | Resta binaria | `-` |
| **2** | Asignación | `=` |

---

### 2.7.5. Asignación y Operadores de Modificación
* **El operador `=` devuelve un valor:** El resultado de la asignación `x = valor` es el valor asignado.
* **Asignaciones encadenadas:** `a = b = c = 2 + 2;` evalúa de derecha a izquierda asignando `4` a todas las variables.
* **Modificar en el lugar:** Operadores cortos como `+=`, `-=`, `*=`, `/=` ejecutan la operación y asignan el resultado manteniendo su baja precedencia en cálculos.

---

### 2.7.6. Incremento y Decremento (`++` / `--`)
Solo se aplican a **variables** (aplicarlos a literales como `5++` provoca un error de sintaxis).

* **Forma Prefijo (`++counter`):** Incrementa la variable y **devuelve el nuevo valor**.
* **Forma Sufijo (`counter++`):** Incrementa la variable, pero **devuelve el valor previo** a la modificación.

```javascript
let counter = 1;
let a = ++counter; // a es 2 (prefijo)

let counter2 = 1;
let b = counter2++; // b es 1 (sufijo)
```

---

### 2.7.7. Operador Coma (`,`)
El operador coma evalúa múltiples expresiones separadas por `,`, desechando los resultados anteriores y **devolviendo únicamente el resultado de la última expresión**. Tiene la precedencia más baja de todo el lenguaje.

```javascript
let a = (1 + 2, 3 + 4); 
alert(a); // 7 (resultado de 3 + 4)
```