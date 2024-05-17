<?php
class eagle extends bird {
    private $flightSpeed;

    public function __construct(float $flightSpeed) {}

    public function setflightSpeed($flightSpeed):void {
        $this->flightSpeed = $flightSpeed;
    }
    public function getFlightSpeed():float {
        return $this->flightSpeed;
    }
    public function hunt():string {}
    
}