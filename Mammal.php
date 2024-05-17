<?php
abstract class mammal extends animal {
    private $furColor;

    public function __construct(string $furColor) { 
}   

    public function setfurColor($color):void {
        $this->furColor = $color;
    }
    public function getFootColor():string {
        return $this->furColor;
}
}