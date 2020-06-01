<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>juego</title>
    <style>
        body {
            background-color: rgba(129, 213, 252, 0.589);
            font-size: 1.2em;
        }

        h1 {
            font-weight: bold;
            text-align: center;
        }

        article {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
       
    </style>
</head>

<body>
   
    <h1>CUADERNO DE MATEMÁTICAS</h1>
    
    <article>       
        <p><b>INTRODUCE LOS DATOS CORRECTAMENTE</b></p>
        <div id="formulario">
            <?php 
            echo'usuario no valido vuelve a intentarlo';      
            print "  <p><a href=\"../../index.html\">Volver a la página principal</a></p>\n";
        
            ?>            
        </div>
    </article>
   
</body>
</html>


