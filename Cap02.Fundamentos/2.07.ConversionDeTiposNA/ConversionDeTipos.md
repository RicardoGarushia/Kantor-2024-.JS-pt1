# 2. Fundamentos de JavaScript

## 2.7. Conversiones de Tipos y Operadores Básicos en JavaScript

---

### 2.7.1. Conversiones de Tipos

En JavaScript, los operadores y funciones convierten automáticamente los valores al tipo de dato que necesitan para operar (*conversión implícita*). También es común realizar conversiones explícitas utilizando las funciones del lenguaje (`String()`, `Number()`, `Boolean()`).

---

#### 2.7.1.1. ToString (Conversión a String)
Ocurre explícitamente con `String(value)` o implícitamente en operaciones de salida gráfica como `alert()`.

* **Regla general:** Es muy intuitiva para los valores primitivos.
  * `true` $\rightarrow$ `"true"`
  * `false` $\rightarrow$ `"false"`
  * `null` $\rightarrow$ `"null"`
  * `undefined` $\rightarrow$ `"undefined"`

---

#### 2.7.1.2. ToNumber (Conversión a Número)
Ocurre automáticamente en expresiones matemáticas y funciones cuantitativas (por ejemplo, al dividir `"6" / "2"` resulta `3`). Para la conversión explícita se usa `Number(value)`.

> **Excepción importante (+ binario):**
> Si se utiliza el operador de suma `+` y al menos uno de los operandos es un *string*, el otro valor se convierte automáticamente a *string* y se **concatenan**.
> ```javascript
> alert(1 + '2'); // '12'
> alert('1' + 2); // '12'
> ```

#### Tabla de Reglas de Conversión Numérica:

| Valor de entrada | Resultado de conversión |
| :--- | :--- |
| `undefined` | `NaN` |
| `null` | `0` |
| `true` / `false` | `1` / `0` |
| `string` | Se eliminan espacios en blanco al inicio y final.<br>• Si el string queda vacío $\rightarrow$ `0`<br>• Si contiene un número válido $\rightarrow$ lee el número.<br>• Si hay un error de lectura $\rightarrow$ `NaN`. |

---

#### 2.7.1.3. ToBoolean (Conversión Lógica)
Ocurre implícitamente en estructuras condicionales o de forma explícita mediante `Boolean(value)`.

##### Reglas principales:
* **Valores "Falsos" (*Falsy*):** Los valores intuitivamente vacíos se convierten en `false`:
  * `0`
  * `""` (string vacío)
  * `null`
  * `undefined`
  * `NaN`
* **Valores "Verdaderos" (*Truthy*):** Cualquier otro valor se convierte en `true`.

> **Nota:** El string que contiene un cero `"0"` y los strings que solo contienen espacios `" "` son **`true`**, ya que son cadenas no vacías.
