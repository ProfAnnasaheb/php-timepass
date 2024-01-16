<?php
if(isset($_POST['submit']))
{
	$age=$_POST['age'];

	if($age>=18)
	{
		echo "You are eligible for voting";
	}
	else
	{
		echo "You are not eligible for voting";
	}
}
?>