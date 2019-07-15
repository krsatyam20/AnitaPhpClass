<?php
$sub1=60;
$sub2=65;
$sub3=55;
$sub4=70;
$total=$sub1+$sub2+$sub3+$sub4;
$percent=($total/400)*100;
$a=50;
$b=60;
$elig=$b-$a;
if($a < $b){
	 echo "<h5>eligible </h5>";
	}
	else {
		echo "<h5>not eligible </h5>";
	}




echo "<h5>Percentage= $percent</h5>";
echo "<h5>Age= 45</h5>";
echo "<h5>$elig</h5>";
?>
