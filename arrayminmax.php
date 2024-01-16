<?php
$arr=array(10,20,90,40,34,345,54);
$arr1=array(20,45,69,47,38);

echo "<br>Display array elements:";

foreach($arr as $val)
{

    echo "<br>".$val;

}
echo "<br>Display largest element:";
echo max($arr)."<br>";
echo "<br>Display Lowest element:";
echo min($arr)."<br>";
echo "<br>Display Sum of element:";
echo array_sum($arr)."<br>";

echo "<br>Merge Two Arrays:";
print_r (array_merge($arr,$arr1))."<br>";
?>