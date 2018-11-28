<?php
$v=10;
$st=3;
function stepen($val, $st){
  if($st == 0){
    return 1;
  }
  if($n < 0){
    return stepen( 1/$val, -$st); 
  }
  return $val * stepen($val, $st-1); 
}
 
echo stepen($v, $st); 
