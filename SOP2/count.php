<?php
if(isset($_POST['submit']))
{
	$str=strtolower($_POST['str']);
	$vowels=array('a','e','i','o','u');
	$len=strlen($str);
	$count=0;
	
	for($i=0;$i<$len;$i++)
	{
		if(in_array($str[$i],$vowels))
		{
			$count++;
		}
	}
	echo "Number of vowels are=$count";
}
?>