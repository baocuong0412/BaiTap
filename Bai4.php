<?php 
    interface Resizable {
        function resize($percentage);
    }

    class Square implements Resizable {
        public function __construct(public float $side) {
            ($side <= 0 )
            ? throw new Exception("Size is invald")
            : $this-> side = $side;
        }

        public function resize($percentage) {
            ($percentage <= 0)
            ? throw new Exception("Percentage is invalid")
            : $this->side = $this->side * ($percentage / 100);
        }

        public function getArea() : float {
            return $this->side * $this->side;
        }

        public function getSide() : float {
            return $this->side;
        }
    }

    $square = new Square(10);

    echo sprintf("Initial Side Length: %s<br>", $square->getSide());

    $square->resize(1);

    echo sprintf("Resized Side Length: %s<br>", $square->getSide());

    echo sprintf("Area: %s<br>", $square->getArea());
?>