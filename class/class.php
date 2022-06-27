<html>
    <body>
        <?php 
        class Book{
            var $title;
            var $author;
            var $pages;
        }
        $book1 = new Book;
        $book1->title = "Harry potter";
        $book1->author = "JK Rowling";
        $book1->pages = 500;
        echo $book1->pages;
        $book2 = new Book;
        echo '<br>';
        $book2->title = "the lord of the rings";
        $book2->author = "Tolken";
        $book2->pages = 700;
        echo $book2->author;
        ?>
    </body>
</html>