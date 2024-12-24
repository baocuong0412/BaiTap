<?php 
    class Rectangle {
        public function __construct(public float $lenght, public float $width) {
            if ($lenght <= 0 || $width <= 0) {
                throw new Exception("Lenght or width is invalid");
            }
            $this-> lenght = $lenght;
            $this-> width = $width;
        }

        public function getArea() : float {
            return $this->lenght * $this->width;
        }

        public function getPerimeter() : float {
            return ($this->lenght + $this->width) * 2;
        }
    }

    $rectangle = new Rectangle(12, 9);
    echo sprintf("Area: %s m2<br>", $rectangle->getArea());
    echo sprintf("Perimeter: %s m<br>", $rectangle->getPerimeter());
?>