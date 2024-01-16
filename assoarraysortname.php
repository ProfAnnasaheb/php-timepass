
<?php
$arr1=array("Annasaheb"=>"150000","Anil"=>"100000","Sanket"=>"50000");
echo "<br>Associative Array<br>";
print_r($arr1);

foreach($arr1 as $empnm => $empsal)
{
    echo "<br>";
    echo "Employee Name:".$empnm.",    "."Employee Sal:".$empsal;
    echo "<br>";
}

?>