// 4. Check if a string contains only letters and whitespace.
function has_only_letters_and_whitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
}

$str1 = "This is a valid string";
$str2 = "This is a valid string, with a comma";
$str3 = "This string is not valid!";
echo has_only_letters_and_whitespace($str1); // Output: 1
echo has_only_letters_and_whitespace($str2); // Output: 0
echo has_only_letters_and_whitespace($str3); // Output: 0
