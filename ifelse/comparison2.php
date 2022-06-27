<html>

<body>
    <?php
    function getMax($num1, $num2,$num3)
    {
        if ($num1 >= $num2 && $num1 >= $num3) {
            return $num1;
        } else if ($num2 >= $num1 && $num2 >= $num3) {
            return $num2;
        }else {
            echo $num3;
        }
    }
    echo getMax(300,300,400);
    ?>
</body>

</html>