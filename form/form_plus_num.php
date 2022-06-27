<html>

<body>
    <form action="">
        <input type="text" name="num1">
        <input type="text" name="num2">
        <input type="submit" value="Submit" />
    </form>
   Answer: <?php 
    echo $_GET["num1"] + $_GET["num2"];
    ?>
</body>

</html>