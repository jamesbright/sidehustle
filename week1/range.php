<?php

function getRange($start,$end,$arr){
//if array is empty terminate execution
if(count($arr) == 0){echo 'given array is empty'; return; }

//a new array to hold selected values
$range_values = array();

//push values from the given array into the new array using the start and end range
for($start; $start <= $end; $start++){
    $range_values[$start] = $arr[$start];
}

//return the selected values
return $range_values;
}

//testing
$start = 1;
$end = 4;
$arr = [5,6,9,8,2,3,5,0];
print_r(getRange($start,$end,$arr));
?>
