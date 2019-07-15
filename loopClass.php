<?php // loop
/* 
loop: rerpetation (strat point end point  steps )

increment
a=10
  post
	a=a+1
    a=10+1
	a++
	
  pre
	++a
  
decrement 
 Post
 a--
 a=a-1
Pre
 --a

Types of loop

for(){}

while(){}
do{}while;
foreach(){}


for($startpoint;$endPoint;steps){
echo "hello Student ";
}

//wrong
/*
for(); 
for ()
for (){};

*/



for($i=1;$i<=100;$i++){
	if($i==10){
		break;
	}
     echo "</br>hello Student ".$i;
}


//break 

//continue

for($i=1;$i<=20;$i++){
	if($i==10){
		continue;
	}
     echo "</br>hello Student ".$i;
}


//While loop

$i=1;
while($i<=5){
echo "<br>While Loop".$i;
$i++;
}


//do while
$i=11;

do{
echo "<br>Do While Loop".$i;
$i++;		
}while($i<10);


//foreach 

$x=array(1,2,3,4,"satyam","raman");

foreach($x as $items){  // $x is previous array and $items is a new array
	
	echo "<p>".$items ."</p>";
	
	
}


?>