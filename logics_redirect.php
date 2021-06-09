<?php

$a = $_POST['fact'];
$b = $_POST['mini'];
$c = $_POST['maxi'];
 
if ($b > $c)
{
	 echo "<h1> Maximum number = $b<br/>";
}
else{
	echo "<h1> Maximum number = $c<br/>";
}


$num = $a;
$fact = 1;
for ($x=$num; $x>=1; $x--)   
{  
  $fact = $fact * $x;  
}  
echo "Factorial of $num is $fact";  
?>