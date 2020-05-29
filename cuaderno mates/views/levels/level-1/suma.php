
<?php include("../../common/head.html")?> 

<body>

    <div id="container">

        <div>
            <h1>Operaciones Matemáticas, sumas</h1>
            <h4>Resuelve 2 operaciones y pasarás al siguiente nivel</h4>
        </div>

        <div id="info">
            <ul>
                <li>NIVEL <span id="nivel"> 1 </span></li>
                <li>PUNTOS <span id="puntos">0</span></li>
                <li>CREDITOS <span id="creditos">0</span></li>
            </ul>
        </div>


        <div id="operacion">
            <ul>
                <li id="number1">2</li>
                <li>+</li>
                <li id="number2">2</li>
                <li>=</li>
            </ul>
            <input type="text" value="" id="valorUsuario">
            <button id="boton">siguiente</button>
        </div>
    <div>
        
    <script>
        // puntos y creditos
        var puntos = document.getElementById("puntos");
        var creditos = document.getElementById("creditos")
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
                var result = parseInt(verf1) + parseInt(verf2);                
                console.log(result);
                if (parseInt(numUsuario) == result) {
                    puntos.innerHTML = parseInt(puntos.innerHTML) + 10;
                    creditos.innerHTML = parseInt(creditos.innerHTML) + 20;
                    if (parseInt(puntos.innerHTML) === 20) {
                        alert("fin");
                        boton.style.display = "none";
                        document.getElementById("formulario").style.display = "block";
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
    </script>


</body>

</html>