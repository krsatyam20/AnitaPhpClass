<?php

$a=array(10,12,12,12,11,13,14,15,16,17);

$count=0;
for($i=0;$i<count($a); $i++){
	
	if($a[$i]==12){
		
	$count++;		
	}
	
}

echo $count;

?>