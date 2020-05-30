
<?php include("../../common/head.html") ?>

<body>

    <div id="container">
        <div>
            <h1>Operaciones Matemáticas, división</h1>
             <h4>Resuelve 2 operaciones y pasarás al siguiente nivel</h4>
        </div>
        <h2>Añade en el resultado de la división redondeando, sin decimales</h2>
        <div id="info">
            <ul>
                <li>NIVEL <span id="nivel"> 4 </span></li>
                <li>PUNTOS <span id="puntos">60</span></li>
                <li>CREDITOS <span id="creditos">120</span></li>
            </ul>
        </div>


        <div id="operacion">
            <ul>
                <li id="number1">6</li>
                <li>/</li>
                <li id="number2">2</li>
                <li>=</li>
            </ul>
            <input type="text" value="" id="valorUsuario">
            <button id="boton">siguiente</button>
        </div>


        <div id="formulario">

            <h3>Pon el nombre y contraseña para registrar los puntos y los creditos que has logrado.</h3>
            <p>A continuación rellena en el siguiente formulario los puntos y creditos que has conseguido</p>
            <p>(Se te va a guardar los puntos y creditos que has logrado)</p>

            <form action="controller/controller.php" method="POST">
                <div class="registro">
                    <label>Nombre de usuario: </label>
                    <input type="text" name="user" id="user">
                    <label>Contraseña: </label>
                    <input type="password" name="password">
                </div>
                <div class="registro">
                    <label for="">Puntos</label>
                    <input type="number" name="puntos">
                    <label for="">Creditos</label>
                    <input type="number" name="creditos">
                </div>

                <input type="submit" value="COMPROVAR" id="enviar" /><br><br>
            </form>
        </div>
    </div>

    <script>
        // puntos y creditos
        var puntos = document.getElementById("puntos");
        var creditos = document.getElementById("creditos")
        // cuando carga la pagina
        var num1 = document.getElementById("number1");
        var num2 = document.getElementById("number2");
        var ponerNum = () => {
            var numAleatorio1 = Math.floor(Math.random() * (20 - 10)) + 10;
            var numAleatorio2 = Math.floor(Math.random() * (10 - 1)) + 1;
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
                var result = parseInt(verf1) / parseInt(verf2);
                console.log(result);
                if (parseInt(numUsuario) == Math.round(result)) {
                    puntos.innerHTML = parseInt(puntos.innerHTML) + 10;
                    creditos.innerHTML = parseInt(creditos.innerHTML) + 20;
                    if (parseInt(puntos.innerHTML) === 80) {
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