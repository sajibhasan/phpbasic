<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//odd number

for($i=1;$i<=10;$i++){
    if($i % 2){
        echo "$i is a odd number"."<br>";
    }
}

echo "<br>";

//another way
for($i=1;$i<=10;$i++){
    if($i & 1){
        echo "$i is a odd number"."<br>";
    }
}
echo "<br>";
//even number
for($i=1;$i<=10;$i++){
    if($i % 2 == 0 ){
        echo "$i is a even number"."<br>";
    }
}

//count odd and even number

echo "<br>";

for($i=1;$i<=10;$i++){
    if($i % 2){
        echo "$i is a odd number"."<br>";
    }  else {
        echo "$i is a even number"."<br>";
    }
}