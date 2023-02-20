// 5. Find the second largest number in an array of numbers.
function find_second_largest($arr) {
    $max = $arr[0];
    $second_max = $arr[0];
    foreach ($arr as $num) {
        if ($num > $max) {
            $second_max = $max;
            $max = $num;
        } elseif ($num > $second_max && $num < $max) {
            $second_max = $num;
        }
    }
    return $second_max;
}

$arr = array(1, 5, 2, 8, 3, 10, 4);
echo find_second_largest($arr);
// Output: 8
