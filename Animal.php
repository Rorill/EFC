<?php
abstract class animal {
    private $name; 
    private $age;
    public function __construct(string $name, int $age) {
}
public function getName():string {
    return $this->name;
}
public function getAge():int {
    return $this->age;
}
public function setAge($age):void {  
    $this->age = $age;
}
public function setName($name):void {
    $this->name = $name;
}
abstract public function makeSound():string;

abstract public function move():string;
}