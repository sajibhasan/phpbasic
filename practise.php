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

echo $a+$b+$c+$d;
echo "<pre>";


$a = 9+ 9;

echo $a;
echo gettype($a)."<br />";
echo gettype($b)."<br />";
echo gettype($c)."<br />";
echo gettype($d)."<br />";

echo "<br/>";

echo is_bool($b)."<br/>";
echo is_int($a)."<br/>";
echo is_string($d)."<br/>";

$a = "10.5 i am mizan. i am 36 years old";

settype($a, 'float');

echo $a;
echo "<br/>";

$a = "10 years 6 month";

$b = (int) $a;

echo $b;
echo "<pre>";

$a = "5.5i am mizan";
$b = 15;
$c = true;

echo $a+$b+$c;

echo "<pre>";

$a = "techmasters";
$$a = "php";

$$$a = "v 7.1";
echo $php;
echo"<pre>";

$a = 5;
$b = 6;
$c = $a**$b;

echo $c;
