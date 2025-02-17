<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<p>Task1
<hr>
<?php 
$colors=['red' , 'green' ,'white'];
$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$colors[0]} carpet, the {$colors[1]} lawn, the {$colors[2]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo $paragraph;
?> 
<br>
<p>Task2
<hr>
<?php 
$colors = array('white', 'green', 'red'); 
$ordered_colors = array('green', 'red', 'white');
echo "<ul>"; 
foreach ($ordered_colors as $color) {
    echo "<li>$color</li>"; 
}
echo "</ul>"; 
?>

<p>Task3
<hr>
<?php 
$cities = array (
"Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
"Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
"Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
"Portugal" => "Lisbon", "Spain" => "Madrid"

);

asort ($cities);
foreach ($cities as $country =>$capital) {
echo "The capital of $country is $capital .<br>";

}
?>
<p> Task4 
    <hr>
    <?php
    $color =array (4=>'white' , 6 =>'green' , 11 =>'red');
    $felement = reset($color);
    echo $felement;
    ?>


<p> Task5
    <hr>
    <?php
$array = [1, 2, 3, 4, 5];
$position = 3; 
$new_item = '$'; 
array_splice($array, $position, 0, $new_item);

echo implode(" ", $array);

    ?>
    
    
<p> Task6
    <hr>
    <?php

$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
  );
  ksort($fruits);
foreach ($fruits as $key => $value) {
    echo "$key => $value/";
}
    ?>

<p> Task7
    <hr>
    <?php
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$average = array_sum($temperatures) / count($temperatures);
sort($temperatures);

$lowestTemperatures = array_slice($temperatures, 0, 5);

$highestTemperatures = array_slice($temperatures, -5);

echo "Average Temperature is: " . number_format($average, 1) . "\n";
echo "List of five lowest temperatures: " . implode(", ", $lowestTemperatures) . "\n";
echo "List of five highest temperatures: " . implode(", ", $highestTemperatures) . "\n";
?>

<p> Task8
    <hr>
    <?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$mergedArray = array_merge($array1, $array2);
print_r($mergedArray);
?>


<p> Task9
    <hr>
    <?php
function convertToUpperCase($array) {
    return array_map('strtoupper', $array);
}

$colors = array("red", "blue", "white", "yellow");
$uppercaseColors = convertToUpperCase($colors);
print_r($uppercaseColors);
?>


<p> Task10
    <hr>
    <?php
function convertToLowerCase($array) {
    return array_map('strtolower', $array);
}

$colors = array("RED", "BLUE", "WHITE", "YELLOW");

$lowercaseColors = convertToLowerCase($colors);
print_r($lowercaseColors);
?>

<p> Task11
    <hr>
    <?php
function getStringLengths($array) {
    $shortest = min(array_map('strlen', $array));
    $longest = max(array_map('strlen', $array));
    
    echo "The shortest array length is $shortest. The longest array length is $longest.";
}
$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
getStringLengths($words);
?>


<p> Task12
    <hr>
    <?php
$array1 = array(2, 0, 10, 12, 6);

function getLowestNonZero($array) {
    $min = null; 

    foreach ($array as $value) {
        if ($value !== 0 && ($min === null || $value < $min)) {
            $min = $value;
        }
    }

    return $min;
}

echo getLowestNonZero($array1); 
?>







</body>
</html>