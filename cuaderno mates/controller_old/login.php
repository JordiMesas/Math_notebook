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
        
         include 'library.php';
                                        
         if(($usuario = filter_input(INPUT_POST, 'user'))!=null &&
          ($password = filter_input(INPUT_POST, 'password'))!=null){                       
                         
            $user = [
                       ["usuari"=>"jordi", "password"=>"jordi10", "email"=>"jordi@gmail.com", "nivel"=> 2, "puntos"=>0, "creditos"=>0],
                       ["usuari"=>"xavi", "password"=>"xavi10", "email"=>"xavi@gmail.com", "nivel"=> 20, "puntos"=> 0, "creditos"=> 0],
                       ["usuari"=>"helena", "password"=>"helena10", "email"=>"helena@gmail.com", "nivel"=> 2, "puntos"=> 0, "creditos"=>0],
                       ["usuari"=>"cristian", "password"=>"cristian10", "email"=>"cristian@gmail.com", "nivel"=> 70, "puntos"=>0, "creditos"=>0],
                       ["usuari"=>"anna", "password"=>"anna10", "email"=>"anna@gmail.com", "nivel"=> 100, "puntos"=>0, "creditos"=>0]                            
                             
            ];                       
                       
            $bandera = false;  
            foreach($user as $line){               
                if($line["usuari"]==$usuario and $line["password"]==$password ){                     
                     switch ([$usuario, $password]){
                        case ['jordi','jordi10']:                            
                            header("Location: ../suma.html");
                            $nameCookie = 'puntosJordi';                            
                             locationsLogin($nameCookie);                                   
                        break;
                        case ['xavi','xavi10']:
                            header("Location: ../suma.html");
                            $nameCookie = 'puntosXavi';
                            locationsLogin($nameCookie);         
                                          
                        break;
                        case ['helena','helena10']:
                            header("Location: ../suma.html");
                            $nameCookie = 'puntosHelena';
                            locationsLogin($nameCookie);                                
                        break;     
                        case ['cristian','cristian10']:
                             header("Location: ../suma.html");
                            $nameCookie = 'puntosCristian';
                            locationsLogin($nameCookie); 
                          
                        break;
                        case ['anna','anna10']:
                             header("Location: ../suma.html");
                             $nameCookie = 'puntosAnna';
                             locationsLogin($nameCookie);
                          
                        break;
                        
                    }                                
                    $bandera = true;
                }else if($bandera === false){                                       
                    if(filter_input(INPUT_COOKIE,'intentos')!=null){
                        setcookie('intentos', filter_input(INPUT_COOKIE, 'intentos')+1, time()+ 3600, "/", 'localhost');                        
                    }else{
                        setcookie('intentos','1', time()+ 3600, "/", 'localhost');                        
                    }
                    header("Location: resultado_portal.php");                    
                    $bandera = true;
                 }
                              
            }
                        
                          
          }
         ?> 
    
            
        </div>
    </article>
   
</body>
</html>
