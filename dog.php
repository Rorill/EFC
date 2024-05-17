<?php

final class dog extends mammal {
    private $breed;

    public function __construct(string $breed) {}

    public function getBreed():string {
        return $this->breed;
    }

    public function setBreed(string $breed):void {
        $this->breed = $breed;
    }

    public function bark():string {

    }

}