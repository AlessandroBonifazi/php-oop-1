<?php
    class Movie {

        public $title;
        public $director;
        public $genre;
        public $year;

        function __construct($title, $director, $genre, $year) {
            $this ->title = $title;
            $this->director = $director;
            $this->genre = $genre;
            $this->year = $year;
        }

        public function getDetails(){
             $this->title;
                    $this->director;
                    $this->genre;
                    $this->year;
        }
    }

    $movies=[
        new Movie( 'Space Jam', 'Joe Pytka', 'animazione', 1996),
        new Movie('Legend', 'Brian Helgeland', 'biografico-thriller', 2015),
        new Movie('8 Mile', 'Curtis Hanson', 'biografico-musicale', 2002),
    ];
?>    