<?php



//function in php
function division($a,$b){
  
   
    $sub=$a/$b;
    echo "the Division of a/b is:".$sub;

}

division(200,2);

echo "<hr>";

//for loop in php 


$i;

for($i=1;$i<=10;$i++){
   
    echo "$i";
   
    
}
echo "<hr>";

//display considered to a current Hour

$date=Date("H");


if($date<20){
    echo "Have a nice day";
}else{
    echo "Good night";
}
?>