<html>

<body>
    <?php
    $isMale = true;//boolean variable
    $isTall = false;
    if ($isMale && $isTall){
         echo "you are Male and really tall";
    }else if($isMale && !$isTall){
        echo "you are not Male but not tall too";
    }else if(!$isMale && $isTall){
        echo "you are not Male but not tall too";
    }else{
        echo "invalid value";
    }
    ?>
</body>
<!-- +the condition cause action, && two conditions true then the condition excuted if not the condition will not be executed
   +  || one of two condition true or false will excuted the values
     + ! equal to !=;
 -->
</html>