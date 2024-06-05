<?php

echo "Enter input format like eg. 2 3 : ";
$input = trim(fgets(STDIN));
function getColumn($input){
    $pos = strpos($input," ");
    return substr($input,0,$pos);
}

function getRow($input){
    $pos = strpos($input," ");
    return substr($input,$pos);
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

    return $results;
}


$column = getColumn($input) + 1;
$row = getRow($input);

echo ("User input format is B_{".$column.",". $row."}.It means ($column column) and ($row row).Please Enter values with space separate.Press Enter to continue");
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


$count = count($output);
for ($i = 0; $i < $count; $i += $column) {
    $group = array_slice($output, $i, $column);
    echo implode(' ', $group) . "\n";
}