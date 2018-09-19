<?php

class round {
    protected $round;

    public function __construct($round) {
        $this->round = 0; 
    }
    public function getRound() {
        return $this->round;
    }
    public function roundPlus($round) {
        return $round += 1;
    }
}