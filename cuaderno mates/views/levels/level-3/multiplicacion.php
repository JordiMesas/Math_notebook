
<?php include("../../common/head.html") ?>

<body>

    <div id="container">
        <div>
            <h1>Operaciones Matemáticas, multiplicación</h1>
            <h4>Resuelve 2 operaciones y pasarás al siguiente nivel</h4>
        </div>

        <div id="info">
            <ul>
                <li>NIVEL <span id="nivel"> 3 </span></li>
                <li>PUNTOS <span id="puntos">40</span></li>
                <li>CREDITOS <span id="creditos">80</span></li>
            </ul>
        </div>


        <div id="operacion">
            <ul>
                <li id="number1">4</li>
                <li>x</li>
                <li id="number2">2</li>
                <li>=</li>
            </ul>
            <input type="text" value="" id="valorUsuario">
            <button id="boton">siguiente</button>
        </div>        
    </div>

    <script src="../../../public/js/model/setCookies.js"></script>
    <script src="../../../public/js/model/finalGameVar.js"></script>
    <script> let numberFinal = new finalGameVar(60);</script>           
    <script src="../../../public/js/viewModelGame.js"></script>


</body>

</html>