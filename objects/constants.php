<?php

class Circle{
    const PIPI = 3.1415;
    protected $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function circumference(){
        return 2 * $this->radius * self::PIPI;
    }
}

$circ = new Circle(4);

print $circ->circumference();