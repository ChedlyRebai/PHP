<?php
do {
    $num1=rand(5,15);
    $num2=rand(5,15);
    $num3=rand(5,15);
} while ($num1 % 2==0 && $num2%2!=0 && $num3%2!=0);
echo "num1: ". $num1."<br>";
echo "num2: ".$num2."<br>";
echo "num3: ".$num3."<br>";


?>