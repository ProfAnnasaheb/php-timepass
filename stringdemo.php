<?php
$a="Rajput Science College Sangli";
$b="Information Technology";
echo "<br>Given String is:".$a;
echo "<br>";
echo "<br><br>A var String Length is:".strlen($a);
echo "<br><br>B var String Length is:".strlen($b);
echo "<br>";
echo "<br>";
echo "<br>String Lower converted:".strtolower($a);
echo "<br>A var String Word count is:".str_word_count($a);
echo "<br>B var String Word count is:".str_word_count($b);
echo "<br>";
echo "<br>";
echo "<br>A var String reverse is:".strrev($a);
echo "<br>B var String reverse is:".strrev($b);
echo "<br>";
echo "<br>";
echo "<br>Check wheather word is present:".strpos($a,"Sangli");
echo "<br>";
echo "<br>";
echo "<br>Replace string:".str_replace("College","Mahavidyalaya",$a);
?>