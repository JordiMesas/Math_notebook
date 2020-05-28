<?php

declare(strict_types=1);

session_start();

include_once '../adapterspackage/DBConnectionFactory.php';
include_once 'UserDAO.php';
include_once '../modelpackage/User.php';
include_once '../modelpackage/MathChallenge.php';

class MathChallengeController {

    protected $dbuser;
    protected $challenge;

    private function __construct() {
        if (isset($_SESSION['initialized']) == null) {
            $_SESSION['initialized'] = 1;
            $_SESSION['gamelevel'] = 1;
            $_SESSION['attempts'] = 0;
            $_SESSION['numoperssuccess'] = 0;
        }
        $id = (int) filter_input(INPUT_COOKIE, 'userid');
        $username = filter_input(INPUT_COOKIE, 'username');
        $level = (int) filter_input(INPUT_COOKIE, 'userlevel');
        $points = (int) filter_input(INPUT_COOKIE, 'userpoints');
        $this->dbuser = new UserDAO(new User($id, $username, $level, $points),
                DBConnectionFactory::getConnection());

        //EN ESTA SECCION PODREMOS INCLUIR LA FUNCIONALIDAD DE CARGAR ACTIVIDADES QUE HAN SIDO PAUSADAS

        $this->challenge = new MathChallenge((int) $_SESSION['gamelevel'],
                (int) $_SESSION['attempts'],
                (int) $_SESSION['numoperssuccess']);
    }

    public static function getController() {
        return new MathChallengeController();
    }

    public function currentChallenge(): string {
       
        $response = $this->challenge->currentChallenge();
        $response = str_replace(";", "   ", $response);
        return $response;
    }

    public function newChallenge() {
        $this->challenge->next();
    }
    
    public function currentResult(): int {
        return $this->challenge->result();
    }

    public function updateWithSuccess() {
        $result = $this->challenge->result();
        $this->challenge->evaluateAnswer($result);
        $_SESSION['gamelevel'] = $this->challenge->gamelevel();
        $_SESSION['attempts'] = $this->challenge->attempts();
        $_SESSION['numoperssuccess'] = $this->challenge->numoperssuccess();
    }

    public function updateWithError() {
        $result = $this->challenge->result() + 1;
        $this->challenge->evaluateAnswer($result);
        $_SESSION['attempts'] = $this->challenge->attempts();
        $_SESSION['numoperssuccess'] = 0;
    }

    public function finished(): int {
        return $this->challenge->finished();
    }

    public function attempts(): int {
        return $this->challenge->attempts();
    }

    public function gamelevel(): int {
        return $this->challenge->gamelevel();
    }

    public function numoperssuccess(): int {
        return $this->challenge->numoperssuccess();
    }

    public function closeChallenge(): int {
        $this->dbuser->updateStatus();
        unset($_SESSION['initialized']);
        unset($_SESSION['gamelevel']);
        unset($_SESSION['attempts']);
        unset($_SESSION['numoperssuccess']);
        $level = (int) filter_input(INPUT_COOKIE, 'userlevel');
        if ($level == 1) {
            setcookie('userlevel', '2', 0, '/', 'localhost');
        }
        $score = $this->challenge->score();
        $points = $score + filter_input(INPUT_COOKIE, 'userpoints');
        setcookie('userpoints', (string)$points, 0, '/', 'localhost');

        return $score;
    }

}
