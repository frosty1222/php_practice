<html>

<body>
    <?php
      function getMax($num1,$num2){
          if($num1 > $num2){
              return $num1;
          }else if($num1 < $num2){
              return $num2;
          }else if($num1 == $num2){
              return $num1; echo '<br>';
              return $num2;
          }else{
              echo "invalid number";
          }
      }
      echo getMax(300,90);
    ?>
</body>

</html>