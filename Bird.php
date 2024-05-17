<?php
abstract class bird extends animal {
    private $wingSpan;

    public function __construct(float $wingSpan) {
}   
    public function setwingSpan($wingSpan):void {
        $this->wingSpan = $wingSpan;
    }
    public function getwingSpan():float {
        return $this->wingSpan;
    }
}

