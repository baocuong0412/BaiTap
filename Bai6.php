<?php 
    class LibraryItem {
        public function __construct(protected string $title, protected string $author, protected int $year) {
            if (empty($title) || empty($author) || $year <= 0) {
                throw new Exception("Title, Author, Year is invalid");
            }
            $this->title = $title;
            $this->author = $author;
            $this->year = $year;
        }

        public function getTitle() : string {
            return $this -> title;
        }

        public function getAuthor() : string {
            return $this -> author;
        }

        public function getYear() : string {
            return $this -> year;
        }
    }

    class Book extends LibraryItem {
        public function __construct(protected string $title, protected string $author, protected int $year,protected string $gender) {
            parent::__construct($title, $author, $year);
            (empty($gender))
            ? throw new Exception("Gender is invalid")
            : $this->gender = $gender;
        }

        public function getGender() : string {
            return $this-> gender;
        }

        public function displayDetails() {
            echo sprintf("<br>Title: %s<br>Author: %s<br>Year: %s<br>Genre: %s<br>",
                $this->title,
                $this->author,
                $this->year,
                $this->gender
            );
        }
    }

    class DVD extends LibraryItem {
        public function __construct(protected string $title, protected string $author, protected int $year,protected int $duration) {
            parent::__construct($title, $author, $year);
            (empty($duration))
            ? throw new Exception("Duration is invalid")
            : $this->duration = $duration;
        }

        public function getDuration() : string {
            return $this-> duration;
        }

        public function displayDetails() {
            echo sprintf("<br>Title: %s<br>Author: %s<br>Year: %s<br>Duration: %s minutes",
                $this->title,
                $this->author,
                $this->year,
                $this->duration,
            );
        }
    }

    $book = new Book("Don Quixote", "Miguel de Cervantes", 1605, "Epic novel");
    $book->displayDetails();
    $dvd = new DVD("The Land Before Time", "Charles Grosvenor", 2010, 150);
    $dvd->displayDetails();
?>