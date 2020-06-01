<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo_operaciones.css">
    <title>juego de dividir 2</title>
    <style>
        img{
            border-radius: 5px;
        } 
        #formulario{
            display: block;
        }
    </style>
</head>

<body>
    
  <div id="container">
    <div><h1>Operaciones Matemáticas</h1></div>
    <div><h3>HAS GANADO</h3></div>
    <div><img src="../img/copa.png" alt="copa"></div>
    <div id="formulario">       
        
       <?php 
         
          include 'library.php';
                                        
         if(($usuario= filter_input(INPUT_POST, 'user'))!=null &&
          ($password = filter_input(INPUT_POST, 'password'))!=null){     
              
             locationsFinal( $usuario, $password);
                  
                          
          }else{
              echo " presione en el link, introduce el nombre y usuario en el formulario bien para volver a reiniciar el juego<br><br>";
              print "  <p><a href=\"../error/division_2_error.html\">Volver a la página principal</a></p>\n";
          }
        ?>
    </div>
  </div>

</body>

</html>



