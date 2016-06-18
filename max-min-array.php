<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Count maximum number

$arr = [10,5,36,8,56,85,78,52,12,43];
$max = $arr[0];
$len = count($arr);
for($i = 0; $i < $len; $i++){
    if($arr[$i] > $max){
        $max = $arr[$i];
    }
}

echo "Maximum Number is " . $max."<br>";

//count minimum nubber

$arr = [52,63,21,23,25,6,5,4,3,];
$min = $arr[0];
$len = count($arr);
for($i = 0; $i < $len; $i++){
    if($arr[$i]< min){
        $min = $arr[$i];
    }
}
echo "Minimum Number is ". $min;