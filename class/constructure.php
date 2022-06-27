<html>

<body>
    <?php
    class Book
    {
        var $title;
        var $author;
        var $pages;
        function __construct($aTitle,$aAuthor,$aPages){
             $this->title = $aTitle;
             $this->author = $aAuthor;
             $this->pages = $aPages;
        }
    }
    $book1 = new Book("Harry potter", "JK Rowling",500);
    $book1->pages =600;//this is for updating the value inside Book();
    echo $book1->pages;
    $book2 = new Book("the lord of the rings", "Tolken",700);
    echo '<br>';
    echo $book2->author;
    ?>
</body>

</html>