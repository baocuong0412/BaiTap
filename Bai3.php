<?php 
    interface Shape{
        function calculateArea();
    }

    class Triangle implements Shape{
        public function __construct(public float $a, public float $h) {
            if ($a <= 0 || $h <= 0) {
                throw new Exception("A or H is invalid");
            }
            $this-> a = $a;
            $this-> h = $h;
        }

        public function calculateArea() : float {
            return round(($this->a * $this->h) / 2, 2);
        }
    }

    class Rectangle implements Shape{
        public function __construct(public float $lenght, public float $widht){
            if ($lenght <= 0 || $widht <= 0) {
                throw new Exception("Lenght or widht is invalid");
            }
            $this->lenght = $lenght;
            $this->widht = $widht;
        }

        public function calculateArea() : float {
            return $this->lenght * $this->widht;
        }
    }

    $triangle = new Triangle(5, 7);
    $rectangle = new Rectangle(4, 6);

    echo sprintf("Triangle Area: %s<br> Rectangle Area: %s<br>",
        $triangle->calculateArea(),
        $rectangle->calculateArea()
);
?>