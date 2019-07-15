<?php

class simpleClass {

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


}

$classCall = new simpleClass;
$classSecCall = new simpleClass;

//call a function
$classCall->hello();
$classCall->helloWithArgu(10);
$classSecCall->hello();

?>