<?php
    /* Delete cookies */
    function deleteCookies(string $pointsCookies, string $creditsCookies){
        setcookie($pointsCookies, "", time()- 3600, "/", 'localhost');
        setcookie($creditsCookies, "", time()- 3600, "/", 'localhost');
        header("Location: ../portal.html");
    }
?>
