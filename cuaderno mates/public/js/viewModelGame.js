// puntos y creditos
var puntos = document.getElementById("puntos");
var creditos = document.getElementById("creditos");
//var nivel = document.getElementById("nivel");
// cuando carga la pagina
var num1 = document.getElementById("number1");
var num2 = document.getElementById("number2");
var ponerNum = () => {
    var numAleatorio1 = Math.floor((Math.random() * 10));
    var numAleatorio2 = Math.floor((Math.random() * 10));
    num1.innerHTML = numAleatorio1;
    num2.innerHTML = numAleatorio2;
}
// verificar error y augmento de puntos
var boton = document.getElementById("boton");
var verificar = () => {
    console.log("verificado");

    if (boton) {
        var numUsuario = document.getElementById("valorUsuario").value;
        console.log(numUsuario);
        var verf1 = num1.innerHTML;
        var verf2 = num2.innerHTML;
        
        let operation = new typeOperation(nivel.innerHTML,parseInt(verf1),parseInt(verf2));
        var result = operation.setOperation();                
        console.log(result);
        if (parseInt(numUsuario) == result) {
            
            puntos.innerHTML = parseInt(puntos.innerHTML) + 10;
            creditos.innerHTML = parseInt(creditos.innerHTML) + 20;
            let setCookiePuntosCreditos = new setCookies(puntos.innerHTML.toString(),creditos.innerHTML.toString());
            setCookiePuntosCreditos.setCookiePuntos();
            setCookiePuntosCreditos.setCookieCreditos();
            // numberFinal.gameVar() es una función que viene de la sentencia anterior que hemos hecho en la view "new finalGameVar() --> finalGameVar "
            if (parseInt(puntos.innerHTML) === numberFinal.gameVar()) {
                alert("fin");
                let upLevel = new upCookiesLevel((parseInt(nivel.innerHTML)+1).toString());
                upLevel. upCookieNivel();          
                return false;
            }
            ponerNum();
        } else {
            alert("no es correcto");
            puntos.innerHTML = parseInt(puntos.innerHTML) - 10;
            creditos.innerHTML = parseInt(creditos.innerHTML) - 20;
        }

    };

};

// llamadas     

boton.addEventListener("click", verificar);