<?php
$arr=array(100,2000,300,55,44,86);
print_r($arr);
echo "<br>";
sort($arr);
print_r($arr);
echo "<br>Using asort<br>";
asort($arr);
print_r($arr);
echo "<br>Using rsort<br>";
rsort($arr);
print_r($arr);
echo "<br>Using arsort<br>";
rsort($arr);
print_r($arr);

$arr1=array("1"=>"Sangli","MM"=>"Miraj","Area"=>"Circle");
echo "<br>Associative Array<br>";
print_r($arr1);
echo "<br>Using Key sort Associative Array<br>";
ksort($arr1);
echo "<br>";
print_r($arr1);

echo "<br>Using Key reverse sort Associative Array<br>";
krsort($arr1);
echo "<br>";
print_r($arr1);

?>
