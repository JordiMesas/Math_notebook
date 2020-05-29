<?php

declare(strict_types=1);
                                                     
include_once '../db/adapters/DBConnectionFactory.php';
include_once '../models/User.php';
include_once '../db/accesLevel.php';

$db = DBConnectionFactory::getConnection();
$datauser = [];
$ok = 0;
$usuari = filter_input(INPUT_POST, 'user');
$password = filter_input(INPUT_POST, 'passwd');
$register = filter_input(INPUT_POST, 'register');

if ($register) {
    $query = "INSERT INTO control_users (name,password) VALUES ('" . $usuari . "','" . $password . "');";
    $ok = $db->executeQuery($query);
} else {
    $query = "SELECT id FROM control_users WHERE name = '" . $usuari . "' and password = '" . $password . "';";
    $db->executeQuery($query, $datauser);
    $ok = $datauser[0]['id'];
}

if ($ok) {
    $query = "SELECT id, name, level, points FROM users WHERE name = '" . $usuari . "';";
    $user = new User($datauser[0]['id'],$datauser[0]['name'],$datauser[0]['level'],$datauser[0]['points']);
    $acces = new accesLevel($user,$db);    
}
