<?php include("../../common/head.html") ?>
    <title>fin</title>
    <style>
        img{
            border-radius: 5px;
        }       
    </style>
</head>

<body>
    
  <div id="container">
    <div>
        <h1>HAS GANADO!</h1>
        <div><img src="../../../public/img/copa.png" alt="copa"></div>
        <h4>Tabla de clasificación de usuarios que han hecho este cuaderno:</h4>           
    </div>
    
    <div>       
       <?php
         
         include_once '../../../controllers/game.php';

         $gameControl = gameController::getController(); 
         $gameControl->showTable();         
        
        ?>
    </div>
  </div>

</body>

</html>



