<?php
// 1. Sort an array of strings by their length, in ascending order.
function sort_strings_by_length($arr) {
    usort($arr, function($a, $b) {
        return strlen($a) - strlen($b);
    });
    return $arr;
}

$arr = array("apple", "orange", "banana", "grape");
print_r(sort_strings_by_length($arr));
// Output: 
//Array(
//     [0] => apple
//     [1] => grape
//     [2] => orange
//     [3] => banana
//)

?>