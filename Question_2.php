<h1>
  Name:Fowsiyo Abdirisak Dahir<br>
  IDNO:C119930<br>
  Class:Ca191
</h1>
<?php
function GCD($x,$y){
    if ($x > $y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
      }
      for($i = 1; $i < ($x+1); $i++) {
        if ($x%$i == 0 and $y%$i == 0)
          $hcf = $i;
      }
      echo "HCF of $x and $y is: $hcf";
}
GCD(18,24);





?>