<?php 
    interface Area {
        function getArea();
    }

    interface Perimeter {
        function getPerimeter();
    }

    class Rectangle implements Area, Perimeter {
        public function __construct(public float $lenght, public float $widht){
            if ($lenght <= 0 || $widht <= 0) {
                throw new Exception("Lenght or widht is invalid");
            }
            $this->lenght = $lenght;
            $this->widht = $widht;
        }

        public function getArea() : float {
            return $this->lenght * $this->widht;
        }

        public function getPerimeter() : float {
            return ($this->lenght + $this->widht) * 2;
        }
    }

    class Circle implements Area, Perimeter {

        public function __construct(public float $radius) {
            if ($radius <= 0) {
                throw new Exception("Radius is invalid");
            }
            $this-> radius = $radius;
        }

        public function getArea() : float {
            return round(pi() * $this->radius * $this->radius , 2);
        }

        public function getPerimeter() : float {
            return round(pi() * $this->radius * 2, 2);
        }

    }

    $rectangle = new Rectangle(12, 9);
    $circle = new Circle(5);

    echo sprintf("Area of Rectangle: %s<br> Perimeter of a Rectangle: %s<br>",
        $rectangle->getArea(),
        $rectangle->getPerimeter()
    );

    echo sprintf("Area of Circle: %s<br> Perimeter of a Circle: %s<br>",
        $circle->getArea(),
        $circle->getPerimeter()
    );
?>