
// cuando carga la pagina
var num1 = document.getElementById("number1");
var num2 = document.getElementById("number2");

var putNum = () => {

    var numRandom1 = Math.floor((Math.random() * 15)+1);
    var numRandom2 = Math.floor((Math.random() * 15)+1);
    num1.innerHTML = numRandom1;
    num2.innerHTML = numRandom2; 

}

// puntos y creditos
var points = document.getElementById("puntos");
var credits = document.getElementById("creditos");
var level = document.getElementById("nivel");

// verificar error y augmento de puntos y nivel con cookies
var boton = document.getElementById("boton");
 
var check = () => {   

    if (boton) { 

       var numUser = document.getElementById("valorUsuario").value;

       var right = document.querySelector("#container div:nth-of-type(3) img:nth-of-type(1)");
       var incorrect = document.querySelector("#container div:nth-of-type(3) img:nth-of-type(2)");
       
        // sentencia para saber que operación vamos a realizar
        let operation = new typeOperation(parseInt(level.innerHTML),parseInt(num1.innerHTML),parseInt(num2.innerHTML));
        
        let imgRightOrIncorrect = new imgRightIncorrect(right,incorrect);
        
        if (parseInt(numUser) === (Math.round(operation.setOperation()))) {          
            
            points.innerHTML = parseInt(points.innerHTML) + 10;
            credits.innerHTML = parseInt(credits.innerHTML) + 20;

            // sentencia para actualizar los puntos y creditos
            let setCookiePointsCredits = new setCookies(points.innerHTML.toString(),credits.innerHTML.toString());
            setCookiePointsCredits.setCookiePoints();
            setCookiePointsCredits.setCookieCredits();

            // numberFinal.gameVar() es una función que viene de la sentencia anterior que hemos hecho en la view "new finalGameVar() --> finalGameVar "
            if (parseInt(points.innerHTML) === numberFinal.gameVar()) {                
                
                // sentencia para augmentar el nivel de tipo cookie
                let upLevel = new upCookiesLevel((parseInt(level.innerHTML)+1).toString());
                upLevel. upCookieLevel();
                
                document.getElementById("operacion").style.display = "none";  
                document.getElementById("formulario").style.display = "block";         
                return false;
            }
            putNum();      
            imgRightOrIncorrect.imgShowRight();
        } else {  
            
            imgRightOrIncorrect.imgShowIncorrect();         
            credits.innerHTML = parseInt(credits.innerHTML) - 20;

        }
        
        // despues de verificar el resultado hago que el input se limpie       
        document.getElementById("valorUsuario").value = "";

    };

};

// llamadas     

boton.addEventListener("click", check);
