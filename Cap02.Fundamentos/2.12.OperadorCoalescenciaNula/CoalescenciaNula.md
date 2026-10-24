# 2. Fundamentos de JavaScript

## 2.12. El Operador Nullish Coalescing (`??`) y Novedades Modernas

El operador **Nullish Coalescing** (`??`), introducido oficialmente en ES2020, vino a resolver uno de los problemas más comunes al manejar valores por defecto en JavaScript: el comportamiento impreciso del operador `||` cuando se evaluaban valores válidos como el número `0`, cadenas vacías `""` o valores booleanos `false`.

---

### 2.12.1. El Problema con el Operador OR (`||`)

Tradicionalmente, para asignar un valor por defecto se utilizaba el operador OR (`||`):

```javascript
let altura = 0;
let alturaFinal = altura || 100; // ⚠️ ¡Devuelve 100!
```

El problema radica en que `0` es un valor perfectamente válido para una altura, pero como `||` busca el primer valor *truthy* (verdadero por coerción), considera que `0` es *falsy* y termina aplicando el valor por defecto (`100`). Lo mismo ocurre con cadenas vacías `""` o valores booleanos `false`.

---

### 2.12.2. Sintaxis y Comportamiento de `??`

El operador **Nullish Coalescing** (`??`) evalúa si un valor está **definido** estrictamente. 

$$\text{resultado} = a \;\; ?? \;\; b;$$

* Devuelve `a` si **no** es `null` ni `undefined`.
* Si `a` es `null` o `undefined`, devuelve `b`.

#### Ejemplo comparativo:
```javascript
let altura = 0;

let alturaConOr = altura || 100; // Devuelve 100 (0 es falsy)
let alturaConNullish = altura ?? 100; // ✅ Devuelve 0 (porque 0 está definido)

let usuario = null;
let nombreDefault = usuario ?? "Invitado"; // ✅ Devuelve "Invitado" (porque usuario es null)
```

---

### 2.12.3. Precedencia y Restricciones de Sintaxis

1. **Precedencia baja:** La precedencia del operador `??` es muy baja (mismo nivel que `||`). Se sitúa por debajo de las operaciones aritméticas y comparaciones, pero por encima del operador ternario `? :`.
   ```javascript
   // Sin paréntesis, esto puede fallar o evaluarse mal debido a la precedencia:
   let area = height ?? 100 * width ?? 50; 

   // ✅ Forma correcta usando paréntesis:
   let area = (height ?? 100) * (width ?? 50);
   ```

2. **Restricción de mezcla (SyntaxError):** Por razones de especificación para evitar ambigüedades en el orden de evaluación, **está prohibido** combinar directamente `??` con `&&` o `||` sin utilizar paréntesis explícitos:
   ```javascript
   // ❌ SyntaxError: Unexpected token '??'
   let x = 1 && 2 ?? 3;

   // ✅ Forma correcta:
   let x = (1 && 2) ?? 3;
   ```

---

### 🚀 Novedades y Estado del Arte (Ecosistema Moderno)

El operador `??` ha evolucionado junto con el estándar de JavaScript para integrarse en patrones modernos de desarrollo:

#### 1. Asignación Lógica Nullish (`??=`) — *ES2021*
Introducida en ES2021, la asignación lógica permite evaluar y asignar un valor por defecto solo si la variable actual es `null` o `undefined`.

```javascript
let configuracion = {
  timeout: null,
  retries: 3
};

// Si configuracion.timeout es null o undefined, le asigna 1000. De lo contrario, lo deja intacto.
configuracion.timeout ??= 1000; 
configuracion.retries ??= 5; // Como retries ya es 3 (definido), no hace nada.

console.log(configuracion.timeout); // 1000
console.log(configuracion.retries); // 3
```

#### 2. Sinergia con el Encadenamiento Opcional (`?.`)
En el desarrollo web moderno, la combinación del encadenamiento opcional (`?.`) con el Nullish Coalescing (`??`) es el patrón estándar para extraer propiedades profundamente anidadas en objetos o respuestas de API sin riesgo de producir excepciones de tipo (`TypeError`):

```javascript
const usuario = {
  perfil: {
    // nombre no está definido
  }
};

// Patrón moderno y seguro:
const nombreUsuario = usuario?.perfil?.nombre ?? "Usuario Anónimo";
console.log(nombreUsuario); // "Usuario Anónimo"
```

#### 3. Tipado Estricto en TypeScript
En proyectos desarrollados con TypeScript, el uso de `??` permite un estrechamiento de tipos (*Type Narrowing*) exacto, evitando descartar de forma indeseada tipos primitivos como ceros o cadenas vacías en formularios o motores de cálculo.

---

### 📋 Ejercicio Práctico de Consolidación

¿Qué arrojará el siguiente bloque de código?

```javascript
let a = 0;
let b = null;
let c = "Hola";

let resultado = a ?? b ?? c;
console.log(resultado);
```

* **Respuesta:** Devuelve `0`.
* **Explicación:** El operador `??` evalúa de izquierda a derecha. Primero evalúa `a ?? b`. Como `0` no es ni `null` ni `undefined`, se detiene de inmediato y devuelve `0`, omitiendo el resto de las comprobaciones.