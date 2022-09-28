<?php
$name="Ummy";
$present="car";
$age=20;
$year=$age-1;
$city="kigali";
$yourname="Divin";

echo "Dear $name,Thank you for the $present.I really like it<br> i can't believe i am already $age years old,
but it doesn't fell that much different than being $year<br>,i hope that sometime in the next year we can come visit you
$city.<br>Thank you once again for the $present.<br>Sincerely,<br>$yourname <hr>"

?>
<?php
$pi=3.14;
$r=3;

echo "circumference is:".(2*($r*$pi));
echo "<br>Area is:".($pi*$r*$r);
echo "<br>volume is:".(4/3*($pi*$r*$r*$r));

$x=2;
$y=4;

echo "<br><br>|x+y|:".abs($x+$y);
echo "<br>|x|+|y|:".(abs($x)+abs($y));
echo "<br>x^3/x+y:".pow($x,3)/($x+$y);
echo "<br>sqrt(x^4)+(y^5):".sqrt(pow($x,4)+pow($y,5));
echo "<br>pow(x+sqrt(y),7):".pow($x+sqrt($y),7);
?>

<?php
echo '<br><br>"Hello World"';

?>

