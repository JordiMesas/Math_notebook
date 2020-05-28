<?php

declare(strict_types=1);



// getUserData, getUserFromCookies
function obtenerUsuarioDesdeCookies(string $usuario, string $password) {
    
}

function locationsFinal( string $usuario, string $password): bool {
    
              switch ([$usuario,$password]){
                case ['jordi','jordi10']:
                    $pointsCookies = 'puntosJordi';
                    $creditsCookies = 'creditosJordi';
                    deleteCookies($pointsCookies, $creditsCookies);                    
                break;
                case ['xavi','xavi10']: 
                    $pointsCookies = 'puntosXavi';
                    $creditsCookies = 'creditosXavi';
                    deleteCookies($pointsCookies, $creditsCookies);
                break;
                case ['helena','helena10']:
                    $pointsCookies = 'puntosHelena';
                    $creditsCookies = 'creditosHelena';
                    deleteCookies($pointsCookies, $creditsCookies);            
                break;     
                case ['cristian','cristian10']: 
                    $pointsCookies = 'puntosCristian';
                    $creditsCookies = 'creditosCristian';
                    deleteCookies($pointsCookies, $creditsCookies);
                break;
                case ['anna','anna10']:
                    $pointsCookies = 'puntosAnna';
                    $creditsCookies = 'creditosAnna';
                    deleteCookies($pointsCookies, $creditsCookies); 
                break;
                default:
                    return false;
                
             }                          
                
                
}

/* guardar cookies*/

function locations(string $location, string $pointsCookies, string $creditsCookies, string $points, string $credits){
                setcookie($pointsCookies, $points, time()+ 3600, "/", 'localhost');
                setcookie($creditsCookies, $credits, time()+ 3600, "/", 'localhost');
                header($location);
}


function saveCookies(string $points, string $credits, string $pointsCookies, string $creditsCookies): bool{
    switch([$points,$credits]){
        case ['20','40']:            
                $location = "Location: ../resta.html";
                locations($location, $pointsCookies, $creditsCookies, $points, $credits);                
        break;
    
        case ['40','80']:
                $location = "Location: ../multiplicacion.html";
                locations($location, $pointsCookies, $creditsCookies, $points, $credits);                
        break;
    
        case ['60','120']:
                $location = "Location: ../division.html";
                locations($location, $pointsCookies, $creditsCookies, $points, $credits);                
        break;
    
        case ['80','160']:
                $location = "Location: ../division_2.html";
                 locations($location, $pointsCookies, $creditsCookies, $points, $credits);                 
        break;      
    
        default:
            return false;
    }
    
}

/*transporte de niveles del juego según el nivel*/

function locationsLogin(string $nameCookie){
    switch (filter_input(INPUT_COOKIE, $nameCookie)){                                
           case '20': 
                header("Location: ../resta.html");
           break;
           case '40':
                header("Location: ../multiplicacion.html");                                
           break;     
           case '60': 
                header("Location: ../division.html");
           break;
           case '80': 
                header("Location: ../division_2.html");
           break;                     
                                    
    }
}





