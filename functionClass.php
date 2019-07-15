<?php

//Create a function
function hello(){
	
	echo "Good morning";
}

function helloWithArgu($name){
	
	echo "Good morning".$name;
}

function add($x,$y){
	return $x+$y;
	
}

//call a function

hello();
echo "</br>";
helloWithArgu("Simiran");

echo "</br>";
$res=add(10,20);

echo $res;
echo "</br>";
$a=20;
$b=30;
$c=40;
$res1=add($a,$b);

echo $res1;

echo "</br>";
echo $res*$res1;
?>