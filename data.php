<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<pre>";
$a = 10;
$b = true;
$c = 5.5;
$d = "string";


$a = 9999999999999999 + 99999999999999999;

echo $a;

echo gettype($a)."<br />";
echo gettype($b)."<br />";
echo gettype($c)."<br />";
echo gettype($d)."<br />";

if(is_int($a))
{
    echo "I am integer";
} else
    echo "I am not";

is_bool($b);
is_string($d);
is_float($c);



$a = "10.5 i am mizan. i am 36 years old";

settype($a, 'float');

echo $a;

$a = "10 years 6 month";

$b = (int) $a;

echo $b;

$a = "5.5i am mizan";
$b = 15;
$c = true;

echo $a+$b+$c;

$A = 10;

$_SERVER_MIZAN = "mizan";

print_r($_SERVER);

$a = 10;   // interest rate
$b = 500;  // initial balance
$c = 2;


$d = 500 * pow((1 + 10) , 2);


$interestRate = 10;
$initialBalance = 500;
$years = 2;

$totalAfterMaturity = $initialBalance * pow((1 + $interestRate) , $years);


$a = "techmasters";
$$a = "php";
echo $techmasters;
$$$a = "v 7.1";
echo $php;


$$$$$abc;
