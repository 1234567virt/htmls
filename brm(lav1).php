<?php 
function bmr($a,$b){
switch(true){
    case ($a>=0 and $b>=0):
        return $a-$b;
    break;
    case ($a<0 and $b<0):
        return $a*$b;
    break;
    case (($a<0 and $b>0) || ($b<0 and $a>0)):
        return $a+$b;
    break;
    }
}
?>