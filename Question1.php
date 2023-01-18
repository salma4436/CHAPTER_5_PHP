<h1>
  Name:Fowsiyo Abdirisak Dahir<br>
  IDNO:C119930<br>
  Class:Ca191
</h1>

<?php
function LCM($x,$y){
    if ($x > $y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
      }
      for($i = 1; $i < ($x+1); $i++) {
        if ($x%$i == 0 && $y%$i == 0)
          $gcd = $i;
      }
      $lcm = ($x*$y)/$gcd;
      echo "LCM of $x and $y is: $lcm";
}

LCM(35,18);




?>