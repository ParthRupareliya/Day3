<?php

$a = $_POST['fname'];
$b = $_POST['er'];
$c = $_POST['m_mark'];
$d = $_POST['e_mark'];
$e = $_POST['s_mark'];


$sum = $c+$d+$e;
$percentage = $sum*100/300;

echo "Name = $a<br/>";
echo "er.no. = $b<br/>";
echo "your total mark = $sum<br/>";
echo "your percentage = $percentage%";

if ($percentage > 80){
	echo "<h1 style='color:green;'>first class</h1>";
}
elseif ($percentage>50) {
	echo "<h2 style='color:yellow;'>second class</h2>";
}
elseif ($percentage>33) {
	echo "<h3 style='color:red;'>third class</h3>";
}
else {
	echo "<h1 style='color:red;'>fail</h1>";
}
?>