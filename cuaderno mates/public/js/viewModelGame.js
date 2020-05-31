// puntos y creditos
var puntos = document.getElementById("puntos");
var creditos = document.getElementById("creditos");
var nivel = document.getElementById("nivel");
// cuando carga la pagina
var num1 = document.getElementById("number1");
var num2 = document.getElementById("number2");
var ponerNum = () => {
    var numAleatorio1 = Math.floor((Math.random() * 10));
    var numAleatorio2 = Math.floor((Math.random() * 10));
    num1.innerHTML = numAleatorio1;
    num2.innerHTML = numAleatorio2;
}
// verificar error y augmento de puntos y nivel con cookies
var boton = document.getElementById("boton");
var verificar = () => {
    console.log("verificado");

    if (boton) {
        var numUsuario = document.getElementById("valorUsuario").value;
        console.log(numUsuario);        
        console.log(nivel.innerHTML);
        // sentencia para saber que operación vamos a realizar
        let operation = new typeOperation(parseInt(nivel.innerHTML),parseInt(num1.innerHTML),parseInt(num2.innerHTML));
                       
        console.log(operation.setOperation());
        if (parseInt(numUsuario) == operation.setOperation()) {
            
            puntos.innerHTML = parseInt(puntos.innerHTML) + 10;
            creditos.innerHTML = parseInt(creditos.innerHTML) + 20;
            // sentencia para actualizar los puntos y creditos
            let setCookiePuntosCreditos = new setCookies(puntos.innerHTML.toString(),creditos.innerHTML.toString());
            setCookiePuntosCreditos.setCookiePuntos();
            setCookiePuntosCreditos.setCookieCreditos();
            // numberFinal.gameVar() es una función que viene de la sentencia anterior que hemos hecho en la view "new finalGameVar() --> finalGameVar "
            if (parseInt(puntos.innerHTML) === numberFinal.gameVar()) {
                alert("fin");
                // sentencia para augmentar el nivel
                let upLevel = new upCookiesLevel((parseInt(nivel.innerHTML)+1).toString());
                upLevel. upCookieNivel();
                document.getElementById("operacion").style.display = "none";  
                document.getElementById("formulario").style.display = "block";         
                return false;
            }
            ponerNum();
        } else {
            alert("no es correcto");            
            creditos.innerHTML = parseInt(creditos.innerHTML) - 10;
        }

    };

};

// llamadas     

boton.addEventListener("click", verificar);