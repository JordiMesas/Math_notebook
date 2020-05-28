<?php
    include "utils/cookies.php";

    function getUser() {
        removeCookie();
    }

    function getUserCurrentLevel() {

    }

    function logUser(string $user) {
        if ($user) {
            console.log($user);
        }
    }

    function redirectToLevel() {
        logUser($user);
    }

    function redirectToLogin() {
        logUser($user);
    }
?>
