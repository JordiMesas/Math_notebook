<?php

include_once 'game.php';

if(filter_input(INPUT_COOKIE, 'userpoints') === "80"){
    $gameControl = gameController::getController(); 
    $gameControl->updatedb();
    $gameControl->accesNextGame();
}