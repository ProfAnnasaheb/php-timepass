<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form action="" method="POST">
Enter no to check even or odd:<input type=text name="no">
<br>
<input type="submit" name="submit">
<br>

<?php 

    if (isset($_POST['submit']))
    
    {
            $num=$_POST['no'];
           

            if($num%2==0)
            {
                    echo "number is even";
            }
            else{

                echo"number is odd";

            }
            
    }

?>
</form>
    
</body>
</html>