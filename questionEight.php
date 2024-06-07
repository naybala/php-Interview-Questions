<?php

echo "Enter max words and highlight count : ";
$input = trim(fgets(STDIN));
$arr = explode(" ",$input);
$words = $arr['0'];
$highlightCount = $arr['1'];

function numbersInRange($start, $end) {
    if ($start <= $end) {
        $result = null;
        for ($i = $start; $i <= $end; $i++) {
            $result[] =  $i;
        }
        return $result;
    } else {
        return "Start number must be less than or equal to end number.";
    }
}


echo "Enter max the highlight count was : $highlightCount"."\n";
$orderNo = null;
for ($x = 0; $x <= $highlightCount-1 ; $x++) {
    $input = trim(fgets(STDIN));
    $arr = explode(" ",$input);
    $startNo = $arr['0'];
    $endNo = $arr['1'];
    $resultArr = numbersInRange($startNo,$endNo);
    $resultString = implode(" ",$resultArr);
    $orderNo[] = $resultArr;
}

$url_string = http_build_query($orderNo,",");
$res = urldecode($url_string); 

$res = preg_replace('/^./', '', $res);
$res = $res."&";
preg_match_all('/=(\d+)&/', $res, $matches);
if (isset($matches[1])) {
    $numbersArray = $matches[1]; 
} else {
    $numbersArray = [];
}
sort($numbersArray); 
$itemCounts = array_count_values($numbersArray);
$resultArray = array_filter($numbersArray, function($item) use ($itemCounts) {
    return $itemCounts[$item] % 2 !== 0;
});
$resultArray = array_values($resultArray);
$resultArray = array_unique($resultArray);
$finalResult = count($resultArray);
echo "The output is enter below "."\n";
echo ($finalResult);
die();