/*
2.14.1. EJERCICIO: Reescribe el "switch" en un "if"
    Re-escribe el código utilizando if..else que corresponda al siguiente switch:
*/
/*
        switch (navegador) {
            case 'Edge':
                alert( "¡Tienes Edge!" );
                break;
            case 'Chrome':
            case 'Firefox':
            case 'Safari':
            case 'Opera':
                alert( 'Esta bien, soportamos estos navegadores también' );
                break;
            default:
            alert( '¡Esperamos que esta página se vea bien!' );
        }
/**/
/*
let navegador = prompt("Ingresa el nombre de tu navegador", 'Edge');

if (navegador === 'Edge') {
    alert( "¡Tienes Edge!" );
} else if (navegador === 'Chrome' || navegador === 'Firefox' || navegador === 'Safari' || navegador === 'Opera') {
    alert( 'Esta bien, soportamos estos navegadores también' );
} else {
    alert( '¡Esperamos que esta página se vea bien!' );
}
/**/



/*
2.13.2. EJERCICIO: Reescribe "if" en "switch"
    Re-escribe el código debajo utilizando solo un argumento switch:
*/
/*
        let a = +prompt('a?', '');

        if (a === 0) {
            alert( 0 );
        }
        if (a === 1) {
            alert( 1 );
        }
        if (a === 2 || a == 3) {
            alert( '2,3' );
        }
/**/
/*
let a = +prompt('a?', '');

switch (a){
    case 0: {   // Ámbitos aislados por `case` (Block Scope)
        alert( 0 );
        break;}
    case 1: {   // Ámbitos aislados por `case` (Block Scope) 
        alert( 1 );
        break;} 
    case 2:
    case 3: {   // Ámbitos aislados por `case` (Block Scope)
        alert( '2,3' );
        break;}
}
/**/


// Usando un objeto como mapa de opciones:
const MENSAJES_NAVEGADOR = {
    Edge: "¡Tienes Edge!",
    Chrome: 'Esta bien, soportamos estos navegadores también',
    Firefox: 'Esta bien, soportamos estos navegadores también',
    Safari: 'Esta bien, soportamos estos navegadores también',
    Opera: 'Esta bien, soportamos estos navegadores también'
  };
  
  function obtenerMensaje(navegador) {
    return MENSAJES_NAVEGADOR[navegador] ?? '¡Esperamos que esta página se vea bien!';
  }
  
  alert(obtenerMensaje('Firefox')); // Output: Okay we support these browsers too
