<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

<form action="" method="POST">
Enter Number to check number armstong or not:
<input type="text" name="number">
<br>
<input type="submit" name="submit">
</form>

<?php
if($_POST)
{
$a=$_POST['number'];
$copy=$a;
$sum=0;

while($a>1)   //or while($a!=0)
{
    $rem=$a%10;
    $sum=$sum+($rem*$rem*$rem);
    $a=$a/10;
}

if($sum==$copy)
{

    echo "this is armstrong number";
}
else{

    echo "NOT armstrong number";
}

}
?>
</body>
</html>