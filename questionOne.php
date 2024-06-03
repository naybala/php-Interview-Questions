<?php
function leadingZero($number, $totalLength) {
    return str_pad($number, $totalLength, '0', STR_PAD_LEFT);
}


echo "Enter Plus Integer ";
$input = trim(fgets(STDIN));
if($input<=0){
  echo ("input was not appropriate!");
  exit(1);
  die();
}

$result = leadingZero($input, 3); 
echo $result;

?>