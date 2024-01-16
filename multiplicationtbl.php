<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="" method="POST">
<h2>Enter Number:</h2>
<input type="text" name="no">
<br>
<input type="submit" name="submit">
</form>
<?php
if(isset($_POST ['submit']))
{
    $n=$_POST['no'];

    for($i=1;$i<=10;$i++)
    {
        echo "<br>".$n*$i;
        
    }
}
?>
</body>
</html>