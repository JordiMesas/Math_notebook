
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
  
    <script src="../../../public/js/model/typeOperation.js"></script>    
    <script src="../../../public/js/model/setCookies.js"></script>
    <script src="../../../public/js/model/finalGameVar.js"></script>
    <script> let numberFinal = new finalGameVar(20);</script>           
    <script src="../../../public/js/viewModelGame.js"></script>
    
    <?php
        include_once '../../../controllers/gameController.php';

        if(filter_input(INPUT_COOKIE, 'userpoints') === "20"){
            $gameControl = gameController::getController(); 
            $gameControl->updatedb();
        }
        

    ?>

</body>

</html>