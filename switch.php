<html>

<body>
    <form action="" method="post">
        What was your grade?
        <input type="text" name="grade" />
        <input type="submit" value="Submit">
    </form>
</body>
<?php 
 $grade = $_POST["grade"];
 switch ($grade) {
     case "A":
        echo "you did amazing";
        break;
    case "B":
        echo "you pretty good";
        break;
    case "C":
        echo "you did poorly";
        break;
    case "D":
        echo "you failed!";
        break;
    default:
    echo "your grade is not a valid grade";
 }
?>
</html>