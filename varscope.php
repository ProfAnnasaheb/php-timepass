<?php
$a=30;
$c=15;

function myfun()
{
	echo "<br> Function Visited<br>";
	$b=20;
	global $a;
	global $c;
	echo "Value of a inside function is: $a<br>";
	echo "Value of b inside function is: $b<br>";
	echo "Value of c inside function is: $c<br>";

}

myfun();
myfun();
myfun();
echo "<br><br>value of a outside function: $a<br>";
echo "value of b outside function:$b<br>";

?>