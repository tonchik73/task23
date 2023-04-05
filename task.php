<?php

interface VehicleInterface
{
    public function move();
    public function ability();
    public function wipers();
    public function honk();
}

abstract class Vehicle  implements VehicleInterface {
    public function move() {
        echo('Move')
    }
    public function honk() {
        echo('Beep')
    }
}

class Car extends Vehicle
{
    public function ability() {
        echo('Nitro')
    }
    public function wipers() {
        echo('Wipers ON')
    }
    
}

class Buildozer extends Vehicle
{
    public function ability() {
        echo('Bucket control')
    }
    public function wipers() {
        echo('Wipers ON')
    }
}

class Tank extends Vehicle
{
       public function ability() {
        echo('Shot')
    }
    public function wipers() {
        echo('Wipers missing')
    }
}


?>