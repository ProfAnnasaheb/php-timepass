<?php
$a=array(60,80,75,90,95);
$t=0;
$i=0;
$c=count($a);
for($i=0;$i<$c;$i++)
{
	echo "<br><br>Marks of Subject=.$a[$i]";
	$t=$t+$a[$i];
}
$p=$t*100/500;
echo "<br><br>Total is=.$t";
echo "<br><br>Percentage is=.$p";
?>