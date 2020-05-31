<?php

include_once 'game.php';

if(filter_input(INPUT_COOKIE, 'userpoints') === "20"){
    $gameControl = gameController::getController(); 
    $gameControl->updatedb();
    $gameControl->accesNextGame();
}