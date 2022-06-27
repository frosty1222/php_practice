<html>

<body>
    <form action="" method="post">
        First number: <input type="number" step="0.0001" name="num1"><br>
        Operator: <input type="text" name="op"><br>
        Second number: <input type="number" name="num2"><br>
        <input type="submit" value="Submit">
    </form>
</body>
<?php 
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$op = $_POST["op"];

if($op == "+"){
   echo $num1 + $num2;
}else if($op == "-"){
   echo $num1 - $num2;
} else if ($op == "/") {
    echo $num1 / $num2;
} else if ($op == "*") {
    echo $num1 * $num2;
}else{
    echo "Invalid Operator";
}
?>
</html>