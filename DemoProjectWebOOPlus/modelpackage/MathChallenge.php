<?php

declare(strict_types=1);

class MathChallenge {

    protected $finishedGame = 0;
    protected $attempts = 0;
    protected $successAttempts = 0;
    protected $opers = [1 => "+", 2 => "-", 3 => "*", 4 => "/"];
    protected $currentLevel = 1;
    protected $currentOper;
    protected $currentValue1;
    protected $currentValue2;
    protected $result=0;

    public const NECESSARYATTEMPTS = 3;
    public const MAXGAMELEVEL = 4;
    public const MAXSCORE = 1000;
    public const MAXVALUE = 11;
    public const MINVALUE = 1;

    public function __construct(int $initialLevel = 1, int $initialAttempts = 0, int $initialSuccess = 0) {
        $this->currentLevel = $initialLevel;
        $this->attempts = $initialAttempts;
        $this->successAttempts = $initialSuccess;
        $this->startGame();
    }

    private function startGame() {
        if ($this->currentLevel <= self::MAXGAMELEVEL and $this->successAttempts < self::NECESSARYATTEMPTS) {
            $this->currentOper = $this->opers[$this->currentLevel];
        } else {
            $this->finishedGame = -1;
        }
    }

    public function evaluateAnswer(int $result): bool {
        $response = false;
        if ($this->finished() == 0) {
            $this->attempts++;
            if ($result == $this->result) {
                $this->applySuccess();
                $response = true;
            } else {
                $this->successAttempts = 0;
            }
        }
        return $response;
    }

    private function applySuccess() {
        $this->successAttempts++;
        if ($this->successAttempts == self::NECESSARYATTEMPTS) {
            $this->currentLevel++;
            if ($this->currentLevel > self::MAXGAMELEVEL) {
                $this->finishedGame = 1;
                $this->currentLevel = 1;
            } else {
                $this->successAttempts = 0;
            }
            $this->currentOper = $this->opers[$this->currentLevel];
        }
    }

    public function next(): void {
        $this->currentValue1 = rand(self::MINVALUE, self::MAXVALUE);
        $this->currentValue2 = rand(self::MINVALUE, self::MAXVALUE);
        $this->result = $this->solution();
    }

    private function solution(): int {
        $result = 0;
        switch ($this->currentOper) {
            case "+": $result = $this->currentValue1 + $this->currentValue2;
                break;
            case "-": $result = $this->currentValue1 - $this->currentValue2;
                break;
            case "*": $result = $this->currentValue1 * $this->currentValue2;
                break;
            case "/": $result = (int)$this->currentValue1 / (int)$this->currentValue2;
        }
        return (int)$result;
    }

    public function gamelevel(): int {
        return $this->currentLevel;
    }

    public function attempts(): int {
        return $this->attempts;
    }

    public function numoperssuccess(): int {
        return $this->successAttempts;
    }

    public function finished(): int {
        return $this->finishedGame;
    }

    public function currentChallenge(): string {
        if ($this->finished() == 0) {           
            return $this->currentValue1 . ";" . $this->currentOper . ";" . $this->currentValue2;
        } else {
            return "";
        }
    }

    public function result(): int {
        return $this->result;
    }
    
    public function score(): int {
        if ($this->finished() == 1) {
            return (int)(self::MAXSCORE * self::MAXGAMELEVEL * self::NECESSARYATTEMPTS / $this->attempts);
        } else {
            return 0;
        }
    }

}
