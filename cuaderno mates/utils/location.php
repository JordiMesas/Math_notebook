<?php
    /* Redirect to a view html */
    function redirectToView(string $view){
        switch (filter_input(INPUT_COOKIE, $view)){                                
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
?>
