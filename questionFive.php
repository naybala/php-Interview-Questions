<?php
echo "Enter first input : ";
$input = trim(fgets(STDIN));

echo "Enter second input : ";
$inputTwo = trim(fgets(STDIN));


function findIntersection($str1, $str2) {
    $arr1 = str_split($str1);
    $arr2 = str_split($str2);
    
    $intersection = array_intersect($arr2, $arr1);
    $intersection = array_unique($intersection);
    if($intersection == ""){
        return "no input match found!";
    }else{
        return implode('', $intersection);
        return $intersection;
    }
}

$result = findIntersection($input,$inputTwo);
echo "\n";
echo "The output is enter below "."\n";
echo ($result);