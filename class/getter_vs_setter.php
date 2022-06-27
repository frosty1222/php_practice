<html>

<body>
    <?php
    class Movie
    {
        public $title;
        private $rating;
        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->rating = $rating;
            $this->setRating($rating);
        }
        function getRating(){
           return $this->rating;
        }
        function setRating($rating){
            if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "RN") {
                $this->rating = $rating;
            }else{
                $this->rating = "PG";
            }
        }
    }
    $avengers = new Movie("Avemgers", "PG-13");
    $avengers->setRating("R");
    echo $avengers->getRating();
    ?>
</body>

</html>