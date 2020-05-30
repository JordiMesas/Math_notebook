
<?php include("../../common/head.html") ?>

<body>

    <div id="container">

        <div>
            <h1>Operaciones Matemáticas, resta</h1>
            <h4>Resuelve 2 operaciones y pasarás al siguiente nivel</h4>
        </div>

        <div id="info">
            <ul>
                <li>NIVEL <span id="nivel"> 2 </span></li>
                <li>PUNTOS <span id="puntos">20</span></li>
                <li>CREDITOS <span id="creditos">40</span></li>
            </ul>
        </div>


        <div id="operacion">
            <ul>
                <li id="number1">4</li>
                <li>-</li>
                <li id="number2">2</li>
                <li>=</li>
            </ul>
            <input type="text" value="" id="valorUsuario">
            <button id="boton">siguiente</button>
        </div>       
    </div>
    <script src="../../../public/js/model/typeOperation.js"></script>    
    <script src="../../../public/js/model/setCookies.js"></script>
    <script src="../../../public/js/model/finalGameVar.js"></script>
    <script> let numberFinal = new finalGameVar(40);</script>           
    <script src="../../../public/js/viewModelGame.js"></script>


</body>

</html>