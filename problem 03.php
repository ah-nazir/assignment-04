// 3. Remove the first and last element from an array and return the remaining elements as a new array.
function remove_first_and_last($arr) {
    array_shift($arr);
    array_pop($arr);
    return $arr;
}

$arr = array(1, 2, 3, 4, 5);
print_r(remove_first_and_last($arr));
// Output: Array ( [0] => 2 [1] => 3 [2] => 4 )
