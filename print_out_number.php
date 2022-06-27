<?php 
  $phrase = "Giffe panama";
  echo $phrase[0];//0,1,2,3,4,5;=Giffe ;print out order number that is containing the character
  echo '<br>';
  echo str_replace("Giffe","panda",$phrase);// replce text;
  echo '<br>';
  echo substr($phrase, 8, 3);//in ra ki tu vi tri so 8 voi 3 ki tu lin tiep
?>