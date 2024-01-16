<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fibonancci series</title>
</head>
<body>
    
<form action="" method="POST">
Enter No: <input type="text" name="no">
<input type="submit" value="submit">
</form>

<?php 
if($_POST)
{
    $no=$_POST['no'];
    $a=0; 
    $b=1;

    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";

    for($i=0;$i<$no;$i++)
    {
        $c=$a+$b;
        echo $c;
        echo "<br>";
        $a=$b;
        $b=$c;
    }
}

?>


</body>
</html>