/*
2.17.1. EJERCICIO: Reescribe con funciones de flecha
    Reemplace las expresiones de función con funciones de flecha en el código a continuación:
*/
/*
        function ask(question, yes, no) {
            if (confirm(question)) yes();
            else no();
        }
        
        ask(
            "Do you agree?",
            function() { alert("You agreed."); },
            function() { alert("You canceled the execution.");}
        );
/**/


function ask(question, yes, no) {
    if (confirm(question)) yes();
    else no();
}

ask(
    "Do you agree?",
    () => alert("You agreed."),
    () => alert("You canceled the execution.")
);