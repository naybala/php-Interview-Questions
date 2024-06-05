<?php
echo "Enter first input : ";
$input = trim(fgets(STDIN));

echo "Enter second input : ";
$inputTwo = trim(fgets(STDIN));

function customSort($arr1, $arr2) { 
    $intersection = array_intersect($arr1, $arr2);
    return implode('', $intersection);
    
}

function findIntersection($str1, $str2) {
    $arr1 = str_split($str1);
    $arr2 = str_split($str2);
    
    $intersection = array_intersect($arr1, $arr2);
    $intersection = array_unique($intersection);
    $finalResult = customSort($arr2,$intersection);
    if($finalResult == ""){
        return "no input match found!";
    }else{
        return $finalResult;
    }
}

$result = findIntersection($input,$inputTwo);
echo "\n";
echo "The output is enter below "."\n";
echo ($result);