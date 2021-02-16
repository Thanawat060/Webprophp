<?php
 
    $array = (5219921381);
    $i = 0;
     
    foreach( count_chars($array,1) as $value => $key) {
     
        echo chr($value), " : ".$value."<br/>";
        $i++;
     
    }
 
?>