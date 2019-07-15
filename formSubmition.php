<?php//formSubmition.php$name=''; //Globale Variable 
$email='';
$msg='';
$imgName='';
if(isset($_POST['submit'])) {
	print_r($_POST);
	print_r($_FILES);
/*	echo $_POST['UserName'];
	echo $_POST['UserEmail'];
*/
$name=!empty($_POST['UserName']) ? $_POST['UserName'] : " ";
$email=!empty($_POST['UserEmail']) ? $_POST['UserEmail'] : " " ;

$source=$_FILES['img']['tmp_name'];
$imgName=time().$_FILES['img']['name'];
$target='image/'.$imgName;
   copy($source,$target);
   
}
else {
	
	$msg="Please Submit Your Details";
}

?>

<html>
<head>

</head>
<body> 
<!--  ByDefault GET : 1000 char send all data show in address bar 

POST: Unlimted data send data no show any where 
 -->
 <h1 style="color:red;"><?php echo $msg; ?> </h1>
<form method="POST" enctype="multipart/form-data"  >

<input type="text"  name="UserName" value="<?php echo $name ; ?>"/>
<input type="text" name="UserEmail" value="<?php echo $email ; ?>" />
<input type="file" name="img"  />
<img src="<?php echo "image/".$imgName ; ?>" width="250px" height="250px" />
<input type="submit" name="submit" />



</form>

</body>
</html>