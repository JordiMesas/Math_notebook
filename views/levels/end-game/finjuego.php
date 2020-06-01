<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fin</title>
    <style>
        #containerf{
            display: flex;            
            flex-direction: column;                  
            align-items: center;            
        }    
        img{
            width: 50%;
            border-radius: 100px;                                                  
        }
        
        p{            
            font-weight: bold;
            font-size: 20px; 
            color: red;
        }

        a{
            text-decoration: none;            
            font-size: 1.5em;
            font-weight: bold;            
        }
                   
    </style>
</head>

<body>
    
  <div id="containerf">
    <div>
        <h1>¡HAS GANADO!</h1>
        <div><img src="../../../public/img/copa.jpg" alt="copa"></div>
        <h2>La nota que has sacado esta a continuación:</h2>           
    </div>

    <div>

        <?php

            $creditsActuality = filter_input(INPUT_COOKIE, 'usercredits');
            $totalCredits= 400;
            $maxNote = 10; 
            $actualityNote = ($creditsActuality * $maxNote)/ $totalCredits;
            if($creditsActuality <= $totalCredits/2){
                print "<p>Has sacado un $actualityNote del total de intentos,</p>";
                print "<p>Suspendido</p>";
            }else{
                print "<p>Has sacado un $actualityNote de la nota final.</p>";
            }            
             
        ?>

        <a href="../level-1/suma.php" id="button">volver a empezar</a>

        <?php 

            setcookie('userlevel', 1, 0, '/', 'localhost');
            setcookie('userpoints',0, 0, '/', 'localhost');
            setcookie('usercredits', 0, 0, '/', 'localhost');
        
        ?>

    </div>  
    
  </div>

  

</body>

</html>



