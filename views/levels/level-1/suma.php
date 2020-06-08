
<?php include("../../common/head.html") ?>
    <title>SUMA</title>   
</head>

<body>

    <div id="container">

        <div>
            <h1>SUMA</h1>
            <h4>Resuelve 5 operaciones y pasarás al siguiente nivel</h4> 
            <p>Cuando llegues a 50 puntos acumulados pasarás de nivel</p>          
        </div>

        <div id="info">
            <ul>
                <li>NIVEL <span id="nivel"> 1 </span></li>
                <li>PUNTOS <span id="puntos"><?php print filter_input(INPUT_COOKIE, 'userpoints'); ?></span></li>
                <li>CREDITOS <span id="creditos"><?php print filter_input(INPUT_COOKIE, 'usercredits'); ?></span></li>
            </ul>
        </div>


        <div id="operacion">
            <ul>
                <li id="number1">2</li>
                <li>+</li>
                <li id="number2">2</li>
                <li>=</li>
            </ul>           

            <?php include("../../common/divOperacion.html") ?>        
            
        </div>

        <div id="formulario">             
            <form action = "../../../controllers/gameControllerSuma.php" method="POST">                                        
                <input type="submit" value="Siguiente nivel" id="check" name="enviar"/>
            </form>
        </div>

        <div>
            <img src="../../../public/img/niña.jpg" alt="niña">
        </div>
    <div>

    <?php include("../../common/scriptsModel.html") ?>   
    
    <script> let numberFinal = new finalGameVar(50);</script>           
     
    <?php include("../../common/scriptViewModelGame.html") ?>

</body>

</html>