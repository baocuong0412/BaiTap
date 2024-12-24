<?php 
    class Vehicle {
        public function __construct(public string $brand, public string $model, public int $year) {
            if(empty($brand) || empty($model) || $year <= 0) {
                throw new Exception("Brand, Model, Year is invalid");
            }
            $this-> brand = $brand; 
            $this->model = $model; 
            $this->year = $year;
        }

        public function displayDetails() {
            echo sprintf("Brand: %s<br>Model: %s<br>Year: %s",
            $this->brand, 
            $this->model, 
            $this->year
        );
        }
    }

    $car = new Vehicle("RR","a", 2020);
    $car->displayDetails();
?>