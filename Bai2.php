<?php 
    class Circle {
        public function __construct(public float $radius) {
            if ($radius <= 0) {
                throw new Exception("Radius  is invalid");
            }
            $this -> radius = $radius;
        }

        public function getArea() : float {
            return round(pi() * $this->radius * $this->radius , 2);
        }

        public function getPerimeter() : float {
            return round(pi() * $this->radius * 2, 2);
        }
    }

    $circle = new Circle(10);
    echo sprintf("Area: %s<br>", $circle->getArea());
    echo sprintf("Perimater: %s<br>", $circle->getPerimeter());
?>