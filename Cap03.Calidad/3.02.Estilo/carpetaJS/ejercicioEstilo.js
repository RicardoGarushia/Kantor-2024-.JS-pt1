// 3.2.1. EJERCICIO: Estilo pobre

/*
¿Qué hay de malo con el estilo de código a continuación?

        function pow(x,n)
        {
            let result=1;
            for(let i=0; i < n ; i++) { result*=x; }
            return result;
        }

        let x = prompt("x?",''), n=prompt("n?",'');
        if (n<=0)
        {
            alert(`Power ${n} is not supported, please enter an integer number greater than zero`);
        }
        else
        {
            alert(pow(x,n))
        }
*/

function pow(x, n) {
  let result = 1;

  for (let i = 0; i < n; i++) {
    result *= x;
  }

  return result;
}

let x = prompt("x?", "");
let n = prompt("n?", "");

if (n <= 0) {
  alert(
    `Power ${n} is not supported, please enter an integer number greater than zero`,    // trailing comma
  );
} else {
  alert(pow(x, n));
}