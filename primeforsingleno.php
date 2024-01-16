<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form method="POST">
Check Number prime or not<br>
<input type="text" name="number">
<br>
<input type="submit" name="submit">
</form>

<?php

if ($_POST)
{
    $n=$_POST['number'];

    $flag=0;

    for($i=2;$i<$n;$i++)
    {
        if(($n%$i)==0)
        {
            $flag=1;
            break;
        }
    }
    if($flag==1)
    {
            echo"Not Prime Number";
    }
    else{
            echo "Prime Number";

    }
}
?>
</body>
</html>