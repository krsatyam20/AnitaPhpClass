<?php
//My first program

echo "Hello"; // print hello

$a=10;

echo "<p>".$a."</p>";
$a=10.12;
echo $a."</br>";;
$a="a";
echo $a."</br>";;
$a="Apple";
echo $a."</br>";;
$a=100;
$b=20;
$c=$a+$b;

//bodmas airthmetic operator (given third value (differ)
// + - / %  * =() of 

//logical operator ( true /false )
/*
< less than
> greater than
== Equal to`
>= Gt Equal
<= Ls Equal
! not

!= not Equal


Bitwise Operator 

&&(and) (T and T)(F and F)(T and F)
 || (or)


*/

$x =40;
$y =20;
$w =70;

if($x > $y){
	if($x> $w){
	// true 
	echo "<h1>X is GT </h1>";
	}
	else {
		echo "<h1>W is GT </h1>";
	}
	$z= $x-$y;
}
else {
	// false 
	$z=$x+$y;
	
	if($y> $w){
	// true 
	echo "<h1>Y is GT </h1>";	}
	else {
		echo "<h1>w is GT </h1>";
	}
	
}
?>

<html>
<head>

</head>
<body>
<p><span> Add Value of A and B =</span><?php echo $c;?>
<p> <span> Add Value of x and y =</span>
<?php  echo $z; ?>  </p>
 
 <select> 
 <option>1 <option>
 
 
 </select>
 
</body>

</html>