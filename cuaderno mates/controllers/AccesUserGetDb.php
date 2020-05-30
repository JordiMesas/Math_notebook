<?php

declare(strict_types=1);
                                                     
include_once '../db/adapters/DBConnectionFactory.php';
include_once '../models/User.php';
include_once '../db/accesLevel.php';

$db = DBConnectionFactory::getConnection();
$datauser = [];
$ok = 0;
$usuari = filter_input(INPUT_POST, 'user');
$password = filter_input(INPUT_POST, 'password');
$register = filter_input(INPUT_POST, 'register');

if ($register) {
    $query = "INSERT INTO control_users (name,password,level,points,credits) VALUES ('" . $usuari . "','" . $password . "','" . 1 . "','" . 0 . "','" . 0 . "');";
    $ok = $db->executeQuery($query);
} else {
    $query = "SELECT id FROM control_users WHERE name = '" . $usuari . "' and password = '" . $password . "';";
    $db->executeQuery($query, $datauser);
    $ok = $datauser[0]['id'];
    var_dump($datauser[0]['id']);
}

if ($ok) {
    
    $query = "SELECT id, name, level, points,credits FROM control_users WHERE name = '" . $usuari . "';";
    $db->executeQuery($query, $datauser);

    setcookie('userid', $datauser[0]['id'], 0, '/', 'localhost');
    setcookie('username', $datauser[0]['name'], 0, '/', 'localhost');
    setcookie('userlevel', $datauser[0]['level'], 0, '/', 'localhost');
    setcookie('userpoints', $datauser[0]['points'], 0, '/', 'localhost');
    setcookie('usercredits', $datauser[0]['credits'], 0, '/', 'localhost');

    $user = new User((int) filter_input(INPUT_COOKIE, 'userid'),(string)filter_input(INPUT_COOKIE, 'username'),(int) filter_input(INPUT_COOKIE, 'userlevel'),(int) filter_input(INPUT_COOKIE, 'userpoints'),(int) filter_input(INPUT_COOKIE, 'usercredits'));
    $acces = new accesLevel($user,$db);
    $acces->acces();    
}else{
    header('location: ../views/badLogin/badIndex.php');
}
