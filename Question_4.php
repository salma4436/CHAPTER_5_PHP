<h1>
  Name:Fowsiyo Abdirisak Dahir<br>
  IDNO:C119930<br>
  Class:Ca191
</h1>
<?php
function decibin($dec){
    while ($dec>=1){
        $bin = $dec % 2;
        $dec = round($dec/2, 0, PHP_ROUND_HALF_DOWN);
        print "$bin";
        }
}

decibin(30);
 
?>