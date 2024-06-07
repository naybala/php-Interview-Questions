<?php

$finalTime = "539";//it means 8:59
echo "Enter three time division with space : ";
$input = trim(fgets(STDIN));
$arr = explode(" ",$input);
$aMinute = $arr['0'];
$bMinute = $arr['1'];
$cMinute = $arr['2'];
$totalMinute = $bMinute + $cMinute;

echo "Enter Train count : ";
$trainCountInput = trim(fgets(STDIN));
echo "The Train coming count was $trainCountInput the format is if 06:15 the input is 6 15 : "."\n";
for ($x = 0; $x <= $trainCountInput-1 ; $x++) {
    $input = trim(fgets(STDIN));
    $input = explode(" ",$input);
    $minute = $input['0']*60 + $input['1'];
    $trainInput [] = $minute;
}

$trainInput = array_reverse($trainInput);

$getTrainTime = null;

foreach ($trainInput as $key => $value) {
    if($finalTime > $value + $totalMinute){
        $getTrainTime = $key;
        break;
    }
}

$finalTime = $trainInput["$getTrainTime"] - $aMinute;
$hour = intdiv($finalTime,60);
$minute = fmod($finalTime,60);
echo "The output is enter below "."\n";
echo ("You should leave from house at $hour:$minute");
die();