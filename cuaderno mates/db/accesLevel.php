<?php
declare(strict_types=1);

include_once 'adapters/MySQLAdapter.php';
include_once '../models/User.php';

class accesLevel {
    
    protected $user;
    protected $db;   

    public function __construct( user $user, MySQLAdapter $db) {      
        $this->user = $user;
        $this->db = $db;
    }

    public function acces(){ 
        $datauser = [];
        $query = "SELECT level FROM control_users WHERE name = '" . $this->user->name(). "';";
        $this->db->executeQuery($query, $datauser);
        switch ($datauser[0]['level']) {
            case "1":
                header('location: ../views/levels/level-1/suma.php');            
            break;       
            case "2":
                header('location:../views/levels/level-2/resta.php');
            break;
            case "3":
                header('location: ../views/levels/level-3/multiplicacion.php');
            break;
            case "4":
                header('location: ../views/levels/level-4/division.php');
            break;                           
            default:          
            header('location: ../views/levels/level-1/suma.php');
        }
    }

}
