<?php

include_once 'game.php';

if(filter_input(INPUT_COOKIE, 'userpoints') === "200"){
    $gameControl = gameController::getController(); 
    $gameControl->updatedb();
    $gameControl->accesNextGame();
}