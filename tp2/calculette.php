<?php 
$x = readline('Saisir un entier x : '. PHP_EOL);
$y = readline('Saisir un entier y : '. PHP_EOL);
echo $x . " + " . $y . " = " . $x + $y . PHP_EOL;
echo $x . " - " . $y . " = " . $x - $y . PHP_EOL;
echo $x . " x " . $y . " = " . $x * $y . PHP_EOL;
echo $x . " / " . $y . " = " . $x / $y . PHP_EOL;
echo $x . " % " . $y . " = " . $x % $y . PHP_EOL;
echo $x . " ** " . $y . " = " . $x ** $y . PHP_EOL;

if($x > $y){
    echo "Le plus grand est : ". $x;
}
else
{
    echo " Le plus grand est : " . $y;
}







