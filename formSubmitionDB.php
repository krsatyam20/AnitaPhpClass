<?php 
require('dbConnection.php');
 $msg="";
if(isset($_POST['submit'])) {

$username=$_POST['username'];

$sql="insert into student(student_name) values ('".$username."')";
if($conn->query($sql) === true){
	
$msg="data succesfuly inserted";
}else{
	$msg="Data not succesfuly insert";
}

}
?>
<html>
<head>
<title>

Data submit in data base 
</title>

</head>
<body>
<h1><?php echo $msg ; ?> </h1>
<form method="POST">
<p><input type="text" name="username" /></p>
<p><input type="submit" name="submit" /></p>

</form>

</body>
</html>