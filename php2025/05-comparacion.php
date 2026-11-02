<?php
declare(strict_types=1);

$numero1= 20;
$numero2= 30;
$numero3= 20;

var_dump($numero1 == $numero2);

echo $numero1 <=> $numero2;
echo PHP_EOL;
echo $numero1 <=> $numero3;