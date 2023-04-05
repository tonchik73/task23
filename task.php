<?php

interface VehicleInterface
{
    public function move();
    public function ability();
    public function wipers();
    public function honk() {
        echo('Beep')
    }
}

class Car implements VehicleInterface
{
    public function move() {
        echo('Move')
    }
    public function ability() {
        echo('Nitro')
    }
    public function wipers() {
        echo('Wipers ON')
    }
    
}

class Buildozer implements VehicleInterface
{
    public function move() {
        echo('Move')
    }
    public function ability() {
        echo('Bucket control')
    }
    public function wipers() {
        echo('Wipers ON')
    }
}

class Tank implements VehicleInterface
{
    public function move() {
        echo('Move')
    }
    public function ability() {
        echo('Shot')
    }
    public function wipers() {
        echo('Wipers missing')
    }
}


?>