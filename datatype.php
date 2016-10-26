<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$mizan = 10;

echo 'i am a string $mizan <br />';

echo "Yes i am also a string \$mizan";

$string = <<<MIZAN
   
   <div class='row'>
                <div class="col-sm-6"><div class="time">ঢাকা, শুক্রবার,&nbsp;২৭&nbsp;জ্যৈষ্ঠ&nbsp;১৪২৩,&nbsp;১০ জুন ২০১৬</div></div>
                
                </div>

        $mizan
MIZAN;
        echo $string;
        
        $string = NULL;
        
$string = <<<'MIZAN'
   
   <div class='row'>
                <div class="col-sm-6"><div class="time">ঢাকা, শুক্রবার,&nbsp;২৭&nbsp;জ্যৈষ্ঠ&nbsp;১৪২৩,&nbsp;১০ জুন ২০১৬</div></div>
                
                </div>

        $mizan
MIZAN;
        echo $string;
        
        $mizan = "i am a string";
        
        $mizan = true;
        
        
        
        $student1 = "a";
        $student2 = "b";
        
        $student100 = "za";
        
        $student = ["a","b","c","d", 100, 5.5, true, ["a","b"]];
        
        
        