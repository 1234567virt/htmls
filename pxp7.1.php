<?php
$a = 5;
$b = '05';
var_dump($a == $b); // $b=приводиться к числовому значению которое равно $a 
var_dump((int)'012345'); // оператор(int) произвел явное преобразования даных в десятичную систему исчисления
var_dump((float)123.0 === (int)123.0); // операция === сравнивает не только значения ,но и тип переменых
var_dump((int)0 === (int)'hello, world'); // (int) пробразовал 'hello, world' в int(0) 

// -----------------------------------------------------------------------------------


$a=1;
$b=2;
$a=$a+$b;

$b=$a-$b;
$a=$a-$b;

echo $a;
echo $b;