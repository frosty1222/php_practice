<html>

<body>
    <form action="" method="POST">
        Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears:<input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit" value="Submit">
    </form>
    <?php 
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    ?>
</body>

</html>