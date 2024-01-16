<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Palindrome string checking using function</title>
</head>
<body>
<form action="" method="POST">
Enter Number to check number armstong or not:
<input type="text" name="name">
<br>
<input type="submit" name="submit">
</form>
<?php
if($_POST)
{
$a=$_POST['name'];
$temp=$a;


  if ($a == strrev($temp))
      echo "Palindrome String";
  else
      echo "Not Palindrome String";


}

?>
</body>
</html>