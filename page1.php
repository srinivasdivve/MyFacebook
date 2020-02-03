<?php
    $a = array(0 => 100, "color" => "red");
    print_r(array_keys($a));
    print "<br>";
    $b = array(20,40,30,"20");
     print_r($b);
    print_r(array_keys($b,"20",false));
    
    
 ?> 
