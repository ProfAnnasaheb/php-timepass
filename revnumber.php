<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form method="POST">
<input type="text" name="number">
<br>
<input type="submit" name="submit">
<br>
</form>
<?php
if($_POST){
$no=$_POST['number'];
echo $no;
$rev=0;
while($no>1)
{
$rem=$no%10;
$rev=($rev*10)+$rem;
$no=($no/10);
}
echo "<br>Reverse number is".$rev;
}
?>
</body>
</html>