<?php

/* 
 displays 1-2-3-4-5-6-7-8-9-10 on one line
 */
for($i=1; $i<=10; $i++){
    if($i<10){
        echo "$i-";
    }
    else{
        echo $i;
    }
}
