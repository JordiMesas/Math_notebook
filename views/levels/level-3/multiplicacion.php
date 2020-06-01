<?php include("../../common/head.html") ?>
    <title>MULTIPLICACIÓN</title>   
</head>

<body>

    <div id="container">
        <div>
            <h1>MULTIPLICACIÓN</h1>
            <h4>Resuelve 2 operaciones y pasarás al siguiente nivel</h4>
            <p>Cuando llegues a 150 puntos acumulados pasarás de nivel</p>
        </div>

        <div id="info">
            <ul>
                <li>NIVEL <span id="nivel"> 3 </span></li>
                <li>PUNTOS <span id="puntos"><?php print filter_input(INPUT_COOKIE, 'userpoints'); ?></span></li>
                <li>CREDITOS <span id="creditos"><?php print filter_input(INPUT_COOKIE, 'usercredits'); ?></span></li>
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
        
        <div id="formulario">             
            <form action = "../../../controllers/gameControllerMultiplic.php" method="POST">                                        
                <input type="submit" value="Siguiente nivel" id="check" name="enviar"/>
            </form>
        </div>

        <div>
            <img src="../../../public/img/mates.jpg" alt="mates">
        </div>
    </div>

    <script src="../../../public/js/model/typeOperation.js"></script>    
    <script src="../../../public/js/model/setCookies.js"></script>
    <script src="../../../public/js/model/finalGameVar.js"></script>
    <script> let numberFinal = new finalGameVar(150);</script>           
    <script src="../../../public/js/viewModelGame.js"></script>


</body>

</html>