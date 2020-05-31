<?php

include_once '../db/controlDb.php';
include_once '../models/User.php';
include_once '../db/adapters/DBConnectionFactory.php';

class gameController {

    protected $dbinformation;
    
    private function __construct() {
                      
        $id = (int) filter_input(INPUT_COOKIE, 'userid');
        $username = filter_input(INPUT_COOKIE, 'username');
        $level = (int) filter_input(INPUT_COOKIE, 'userlevel');
        $points = (int) filter_input(INPUT_COOKIE, 'userpoints');       
        $credits = (int) filter_input(INPUT_COOKIE, 'usercredits');

        $this->dbinformation = new controlDb(new User($id,$username,$level,$points,$credits), DBConnectionFactory::getConnection());
    }

    public static function getController() {
        return new gameController();
    }

    public function updatedb(){
        $this->dbinformation->updateStatus();
    }
}
  

