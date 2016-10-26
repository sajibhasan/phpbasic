<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$b = 20;   //0x1234
$c = &$b;  // by value

echo "B : ".$b."<br />";
echo "C : ".$c."<br />";

$b = 10;
$e = &$b;

echo "B : ".$b."<br />";
echo "C : ".$e."<br />";

$a = 8; // 1000
$b = 5; // 0101

// 1001
// 10010

// 1001
// 0100

// or
// 0 or 0 = 0
// 0 or 1 = 1
// 1 or 0 = 1
// 1 or 1 = 1

echo $a | $b;

echo "<br>";

$a = 5;  // 101
$b = 6; //  110

// 101000000

echo $a << $b ;
echo $a ^ $b ;
