<?php
//B9
$s1=65;
$s2=75;
$s3=55;
$s4=85;
$s5=75;
$tmarks=$s1+$s2+$s3+$s4+$s5;
$pmarks=($tmarks/500)*100;
echo $pmarks;


if($pmarks>=60) {
	
	echo "first";
}elseif($pmarks >=50 || $pmarks<=59) {

echo "Second";	
}	




?>