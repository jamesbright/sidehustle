<?php

function sum($arr){
//if array is empty terminate execution
if(count($arr) == 0){echo 'given array is empty'; return; }

//variable to hold summed values
$sum = 0;

//iterate through the array and sum values
for($i = 0; $i < count($arr); $i++){
    $sum = $sum + $arr[$i];
}

//return the summed value
return $sum;
}

//testing
$arr = [5,6,9,8,2,3,5,0];
print_r(sum($arr));
?>