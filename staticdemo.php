<?php
function mycount()
{
	static $c=0;
	echo $c;
	$c++;

}
echo "Outside of mycount function:<br>";
mycount();
echo "<br>";
mycount();
echo "<br>";
mycount();
echo "<br>";
mycount();
echo "<br>";
mycount();
?>