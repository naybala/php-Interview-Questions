<?php
function checkString($input) {
    if (!preg_match('/^[W S]+$/', $input)) {
        return "Invalid input. Only 'W' and 'S' with space are allowed.";
    }
    $countW = substr_count($input, 'W');
    if ($countW > 5) {
        return "OK";
    } else {
        return "NG";
    }
}


echo "Enter letters only W And S separated by spaces: ";
$input = trim(fgets(STDIN));
$result = checkString($input);
echo "\n";
echo "The output is enter below "."\n";
echo ($result);
?>