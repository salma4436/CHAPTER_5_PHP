<h1>
  Name:Fowsiyo Abdirisak Dahir<br>
  IDNO:C119930<br>
  Class:Ca191
</h1>
<?php
function arr($arr){
    $total=0;
    $total2=0;
    $total3=0;
    echo "prints All array Elements:<br>";
    echo "____________________________<br>";
    for($i=0; $i<count($arr);$i++){      
            echo "$arr[$i]<br>";
            $total+=$arr[$i]; 
            if($arr[$i]%2==0){
                $total2+=$arr[$i];   
                 
            }
            if($arr[$i]%2==1){
                $total3+=$arr[$i];   
                 
            }
    }
    echo "calculates and prints total of all elements:<br>";
    echo "____________________________<br>";
    echo "$total<br>";

    echo "calculates and prints total of even  elements:<br>";
    echo "____________________________<br>";
    echo "$total2<br>";

    echo "calculates and prints total of odd  elements:<br>";
    echo "____________________________<br>";
    echo "$total3<br>";
}
$arr=array(20,65,40,75,80,15,60,45,13,11,17,19);
arr($arr);
?>