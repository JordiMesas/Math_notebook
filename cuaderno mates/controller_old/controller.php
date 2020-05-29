
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/estilo_operaciones.css">
    <title>juego suma</title>
    <style>
        #formulario{
            display: block;
        }
    </style>    
</head>

<body>
  <div id="container">
    <div><h1>Operaciones Matemáticas, suma</h1></div>

    <div id="info">
        <ul>
            <li>NIVEL <span id="nivel"> 1 </span></li>
            <li>PUNTOS <span id="puntos">20</span></li>
            <li>CREDITOS <span id="creditos">40</span></li>
        </ul>
    </div>    

    <div id="formulario">

        <h3>Pon el nombre y contraseña para registrar los puntos y los creditos que has logrado.</h3>
        <p>A continuación rellena en el siguiente formulario los puntos y creditos que has conseguido</p>
        <p>(Se te va a guardar los puntos y creditos que has logrado)</p>
        
        <?php 
         include 'library.php';
         
         if(($puntos = filter_input(INPUT_POST, 'puntos'))!=null &&
          ($creditos = filter_input(INPUT_POST, 'creditos'))!=null &&
           ($usuario = filter_input(INPUT_POST, 'user'))!=null){
             $password = filter_input(INPUT_POST, 'password');            
             
             switch ([$usuario,$password]){
                case ['jordi','jordi10']:
                    $pointsCookies = 'puntosJordi';
                    $creditsCookies = 'creditosJordi';
                    if(saveCookies($puntos, $creditos, $pointsCookies, $creditsCookies)!=true){
                         echo " Introduce los numeros exactos que has acumulado";
                          print "  <p><a href=\"../error/suma_error.html\">Volver al juego</a></p>\n";
                    }
                                 
                break;
                case ['xavi','xavi10']: 
                    $pointsCookies = 'puntosXavi';
                    $creditsCookies = 'creditosXavi';
                    if(saveCookies($puntos, $creditos, $pointsCookies, $creditsCookies)!=true){
                         echo " Introduce los numeros exactos que has acumulado";
                          print "  <p><a href=\"../error/suma_error.html\">Volver al juego</a></p>\n";
                    }
                                                
                break;
                case ['helena','helena10']:
                    $pointsCookies = 'puntosHelena';
                    $creditsCookies = 'creditosHelena';
                    if(saveCookies($puntos, $creditos, $pointsCookies, $creditsCookies)!=true){
                         echo " Introduce los numeros exactos que has acumulado";
                          print "  <p><a href=\"../error/suma_error.html\">Volver al juego</a></p>\n";
                    }
                   
                                
                break;     
                case ['cristian','cristian10']: 
                     $pointsCookies = 'puntosCristian';
                     $creditsCookies = 'creditosCristian';
                     if(saveCookies($puntos, $creditos, $pointsCookies, $creditsCookies)!=true){
                         echo " Introduce los numeros exactos que has acumulado";
                          print "  <p><a href=\"../error/suma_error.html\">Volver al juego</a></p>\n";
                     }
                         
                break;
                case ['anna','anna10']: 
                     $pointsCookies = 'puntosAnna';
                     $creditsCookies = 'creditosAnna';
                     if(saveCookies($puntos, $creditos, $pointsCookies, $creditsCookies)!=true){
                         echo " Introduce los numeros exactos que has acumulado";
                          print "  <p><a href=\"../error/suma_error.html\">Volver al juego</a></p>\n";
                     }
                           
                break;
                default:
                  echo "No has introducido bien el usuario y contraseña";
                  print "  <p><a href=\"../error/suma_error.html\">Volver al juego</a></p>\n";
            }
                          
          }else{
              echo " Presione el link otra vez y pon los creditos logrados para pasar al siguiente nivel o el nombre<br><br>";
              print "  <p><a href=\"../error/suma_error.html\">Volver a la página principal</a></p>\n";
          }
        ?> 
    </div>    
  </div>
    

</body>

</html>