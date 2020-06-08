
// puntos y creditos
var puntos = document.getElementById("puntos");
var creditos = document.getElementById("creditos");
var nivel = document.getElementById("nivel");

// cuando carga la pagina
var num1 = document.getElementById("number1");
var num2 = document.getElementById("number2");

var ponerNum = () => {
    var numAleatorio1 = Math.floor((Math.random() * 15)+1);
    var numAleatorio2 = Math.floor((Math.random() * 15)+1);
    num1.innerHTML = numAleatorio1;
    num2.innerHTML = numAleatorio2;    
}
// verificar error y augmento de puntos y nivel con cookies
var boton = document.getElementById("boton");
 
var verificar = () => {   

    if (boton) { 

       var numUsuario = document.getElementById("valorUsuario").value;
       var right = document.querySelector("#container div:nth-of-type(3) img:nth-of-type(1)");
       var incorrect = document.querySelector("#container div:nth-of-type(3) img:nth-of-type(2)");
       
        // sentencia para saber que operación vamos a realizar
        let operation = new typeOperation(parseInt(nivel.innerHTML),parseInt(num1.innerHTML),parseInt(num2.innerHTML));                       
        
        if (parseInt(numUsuario) === (Math.round(operation.setOperation()))) {          
            
            puntos.innerHTML = parseInt(puntos.innerHTML) + 10;
            creditos.innerHTML = parseInt(creditos.innerHTML) + 20;

            // sentencia para actualizar los puntos y creditos
            let setCookiePuntosCreditos = new setCookies(puntos.innerHTML.toString(),creditos.innerHTML.toString());
            setCookiePuntosCreditos.setCookiePuntos();
            setCookiePuntosCreditos.setCookieCreditos();

            // numberFinal.gameVar() es una función que viene de la sentencia anterior que hemos hecho en la view "new finalGameVar() --> finalGameVar "
            if (parseInt(puntos.innerHTML) === numberFinal.gameVar()) {
                alert("fin");
                
                // sentencia para augmentar el nivel de tipo cookie
                let upLevel = new upCookiesLevel((parseInt(nivel.innerHTML)+1).toString());
                upLevel. upCookieNivel();
                document.getElementById("operacion").style.display = "none";  
                document.getElementById("formulario").style.display = "block";         
                return false;
            }
            ponerNum();      
            incorrect.style.display = "none";                   
            right.style.display= "block";
        } else {  
            
            right.style.display = "none";
            incorrect.style.display = "block";            
            creditos.innerHTML = parseInt(creditos.innerHTML) - 20;
        }
        // despues de verificar el resultado hago que el input se limpie       
        document.getElementById("valorUsuario").value = "";

    };

};

// llamadas     

boton.addEventListener("click", verificar);
