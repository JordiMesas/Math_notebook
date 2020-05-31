<?php

declare(strict_types=1);

class User {

    protected $id;
    protected $name;
    protected $level;
    protected $points;
    protected $credits;

    public function __construct(int $id, string $name, int $level, int $points, int $credits) {
        $this->id = $id;
        $this->name = $name;
        $this->level = $level;
        $this->points = $points;
        $this->credits = $credits;
    }

    public function id(): int {
        return $this->id;
    }

    public function name(): string {
        return $this->name;
    }

    public function level(): int {
        return $this->level;
    }

    public function points(): int {
        return $this->points;
    }

    public function credits(): int {
        return $this->credits;
    }

}
