<?php 
class elephant extends mammal {
    private $tuskLength;

    public function __construct(float $tuskLength) {}

    public function settuskLength(int $tuskLength):void {
        $this->tuskLength = $tuskLength;
    }
    public function gettuskLength():int {
        return $this->tuskLength;
    }

    public function trumpet():string {}

}