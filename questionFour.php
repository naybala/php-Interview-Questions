<?php

echo "Enter input format like eg. P_{2,3}: ";
$input = trim(fgets(STDIN));
function getColumn($input) {
    $pattern = '/P_\{(\d+),\d+\}/';
    
    if (preg_match($pattern, $input, $matches)) {
        return $matches[1];
    } else {
        return null;
    }
}
function getRow($input){
    $pattern = '/P_\{\d+,(\\d+)\}/';
    
    if (preg_match($pattern, $input, $matches)) {
        return $matches[1];
    } else {
        return null;
    }
}

function considerResult($inputArray) {
    $results = [];
    
    foreach ($inputArray as $pair) {
        $values = explode(' ', $pair);
        foreach ($values as $value) {
            $intValue = (int)$value;
            if ($intValue >= 128) {
                $results[] = 1;
            } else {
                $results[] = 0;
            }
        }
    }

    return implode(' ', $results);
}


$column = getColumn($input) + 1;
$row = getRow($input);
echo ("User input format is B_{".$column.",". $row."}.It mean ($column column) and ($row row).Please Enter values with space separate.Press Enter to continue");
$enterInput = trim(fgets(STDIN));
if($enterInput != ""){
    return "Operation failed";
}
for ($x = 0; $x <= $column-1 ; $x++) {
    $input = trim(fgets(STDIN));
    $afterInput [] = $input;
}
echo "\n";
echo "The output is enter below "."\n";
$output = considerResult($afterInput);
echo $output; 
die();