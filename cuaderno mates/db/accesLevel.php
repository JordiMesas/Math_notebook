<?php
declare(strict_types=1);

include_once 'adapters/MySQLAdapter.php';
include_once '../models/User.php';

class accesLevel {
    
    protected $user;
    protected $db;
    protected $datauser = [];

    public function __construct( user $user, MySQLAdapter $db) {      
        $this->level = $level;
        $this->db = $db;
    }

    public function acces(){ 
        
        $query = "SELECT level FROM control_users WHERE name = '" . $this->user->name(). "';";
        $db->executeQuery($query, $this->datauser);
        switch ($datauser[0]['level']) {
            case "1":
                header('location: ../views/levels/level-1/suma.html');            
            break;       
            case "2":
                header('location:../views/levels/level-2/resta.html');
            break;
            case "3":
                header('location: ../views/levels/level-3/multiplicacion.html');
            break;
            case "4":
                header('location: ../views/levels/level-4/division.html');
            break;
            case "5":
                header('location: ../views/levels/level-5/division_2.html');
            break;                    
            default:          
            header('location: ../views/end-game/finjuego.php');
        }
    }

}