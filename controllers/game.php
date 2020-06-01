<?php

declare(strict_types=1);

include_once '../db/adapters/DBConnectionFactory.php';
include_once '../db/controlDb.php';
include_once '../models/User.php';


class gameController {

    protected $dbinformation;
    protected $level;
    protected $points;
    protected  $credits;

    private function __construct() {
                      
        $id = (int) filter_input(INPUT_COOKIE, 'userid');
        $username = filter_input(INPUT_COOKIE, 'username');
        $this->level = (int) filter_input(INPUT_COOKIE, 'userlevel');
        $this->points = (int) filter_input(INPUT_COOKIE, 'userpoints');       
        $this->credits = (int) filter_input(INPUT_COOKIE, 'usercredits');

        $this->dbinformation = new controlDb(new User($id,$username,$this->level, $this->points, $this->credits), DBConnectionFactory::getConnection());
    }

    public static function getController() {
        return new gameController();
    }

    public function updatedb(){
        $this->dbinformation->updateStatus();
    }

    public function accesNextGame(){
        $this->dbinformation->acces();
    }  
   
}
  

