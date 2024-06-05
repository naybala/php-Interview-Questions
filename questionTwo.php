<?php
function getLargestAndSmallest($numbers) {
    $largest = max($numbers);
    $smallest = min($numbers);
    return array('largest' => $largest, 'smallest' => $smallest);
}

echo "Enter first int: ";
$inputOne = trim(fgets(STDIN));
echo "Enter second int: ";
$inputTwo = trim(fgets(STDIN));
echo "Enter third int: ";
$inputThree = trim(fgets(STDIN));
echo "Enter fourth int: ";
$inputFour = trim(fgets(STDIN));
echo "Enter fifth int: ";
$inputFive = trim(fgets(STDIN));

$numbers = [$inputOne,$inputTwo,$inputThree,$inputFour,$inputFive];
if (count($numbers) !== 5) {
    echo "Please enter exactly five integers.\n";
    exit(1);
}

$result = getLargestAndSmallest($numbers);
echo "\n";
echo "The output is enter below "."\n";
echo "Largest integer is: " . $result['largest'] . "\n";
echo "Smallest integer is: " . $result['smallest'] . "\n";
?>