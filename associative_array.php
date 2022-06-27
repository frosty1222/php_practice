<html>
    <body>
        <form action="" method="post">
          <input type="text" name="student">
          <input type="submit" value="Submit" />
        </form>
    <?php 
        $grades = array("Jim"=>"A+","Pam"=>"B-","Oscar"=>"C+");
        $grades["Jim"] = "A+";
        echo $grades[$_POST["student"]];
    ?>
    </body>
</html>