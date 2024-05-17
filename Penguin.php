<?php

final class penguin extends bird {
    private $swimSpeed;

    public function __construct(float $swimSpeed) {}

    public function getswimSpeed():float {
        return $this->swimSpeed;
    }
    public function setSwimSpeed($swimSpeed):void {
        $this->swimSpeed = $swimSpeed;
}
    public function swim():string {}

}