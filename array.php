<html>
    <body>
        <?php 
        $friends = array("Kevin",1,"John","flowers","plants","vegetables") +["Kevin",1,"John","flowers","plants","vegetables"];
        $friends[1] = 400;//for updating the value inside an array;
        echo $friends[1];//1,2,3,4 to print out the value inside an array;
        echo '<br>';
        echo count($friends);//to count the number of friends;
        ?>
    </body>
</html>
