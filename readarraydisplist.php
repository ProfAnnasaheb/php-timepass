<?php
$items=array("Pen","Pencil","Paper");
echo "Print Array using Print_r() function:"."<br>";
print_r ($items);
echo "<br> Display Array in list"."<br>";
foreach($items as $val)
{

    echo $val."<br>";
}


?>