<?php
$items=array("Good Morning","Good Afternoon","Good Evening","Good Night");
echo "<br> Display Items without delete:";
var_dump($items);

unset($items[1]);

echo "<br> Display Items after delete:";
var_dump($items);

?>