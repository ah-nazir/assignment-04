// 2. Concatenate two strings, but with the second string starting from the end of the first string.
function concatenate_reverse($str1, $str2) {
    return $str1 . strrev($str2);
}

$str1 = "hello";
$str2 = "world";
echo concatenate_reverse($str1, $str2);
// Output: helloworlddlrow

