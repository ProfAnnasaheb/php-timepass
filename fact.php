<!DOCTYPE html>
<html>
<body>
<form action ="" method="POST">
Enter No: <input type="text" name="no">
<br>
<input type="submit" name="submit">
<br>

<?php
$fact="";
if ($_POST)
{
	$num=$_POST['no'];
    
    $fact=1;
    
    for($i=$num;$i>0;$i--)
    {
    	$fact=$fact * $i;
    }
//disply ans in echo normal
echo"factorial is:".$fact;

}
?>
</form>
<!--display answer in textbox--> 
<!-- Result is:<input type="text" name="result" value="<?php echo $fact; ?>"> -->
</body>
</html>
