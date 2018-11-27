<?php 
 $st=4;
 $v=2;
 $i=0;
function stepen($v,$st){
if($i==$st){
    return $v; 
    }
    $v=$v*$v;
    stv($v,$st);
    $i++;
    }

echo stv($v,$st);
?>