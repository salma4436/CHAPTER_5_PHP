<h1>
  Name:Fowsiyo Abdirisak Dahir<br>
  IDNO:C119930<br>
  Class:Ca191
</h1>
<?php
 
function PRIME($num){
  $n=0;
  for($i=2; $i < $num; $i++) {
    if($num % $i == 0){
      $n++;
      break;
    }
  }
  
  if ($n == 0){
    echo $num." is a prime number.";
  } else {
    echo $num." is not a prime number.";
  }
}

PRIME(18);




?>