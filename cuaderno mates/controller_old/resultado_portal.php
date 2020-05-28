<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>juego</title>
    <style>
        body{
            background-color: rgba(129, 213, 252, 0.589);      
            font-size: 1.2em;      
        }
        h1{
            font-weight: bold;
            text-align: center;
        }
        article{
            display: flex;
            flex-direction: column;
            align-items: center;
        }     
        
    </style>
</head>
<body>
   
    <h1>PORTAL DE JUEGOS</h1>
    
    <article>       
        <p><b>INTRODUEIX LES DADES PER ENTRAR EN EL JOC</b></p>
        <div id="formulario">
        <?php 
          echo'usuario o password no validos';                            
          echo '<br><br> Llevas realizados ', filter_input(INPUT_COOKIE,'intentos'),'  intentos<br><br>';
          print "  <p><a href=\"../portal.html\">Volver a la página principal</a></p>\n";
    
         ?> 
    
            
        </div>
    </article>
   
</body>
</html>


