<?php
$a=array(
array("apple",20,30),
array("Mango",20,30),
array("Banana",20,30),
);
echo $a[0][0];
echo $a[0][1];
echo $a[0][2];
echo $a[1][0];
echo "</br>";
for($i=0;$i<count($a);$i++){
	for($j=0;$j<count($a);$j++){

	echo "&nbsp;&nbsp;".$a[$i][$j];		
	}
	echo "</br>";
}




?>