<?php 
function plus ($p1,$p2){
    return $p1+$p2;
}

function minus ($p1,$p2){
    return $p1-$p2;
}

function del($p1,$p2){
    return $p1/$p2;
}

function ymn($p1,$p2){
    return $p1*$p2;
}

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case '-':
            echo minus($arg1,$arg2);
             break;
        case '+':
            echo plus($arg1,$arg2);
            break;
        case "*":
            echo ymn($arg1,$arg2);
            break;
        case "/":
            echo del($arg1,$arg2);
             break;
    }
}

function bmr($a,$b){
    switch(true){
        case ($a>0 and $b>0):
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