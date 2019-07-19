<?php

include('dbConnection.php');

$sql="select * from student";

$query=$conn->query($sql);


?>

<html>
<head>


</head>
<body>

<table>
<tr>
<th>Student Id</th>
<th>Student name</th>

</tr>
<?php  while($row=mysqli_fetch_array($query)) { 

//print_r($row);
?>
<tr>
<td><?php echo $row['id']; ?><td>
<td><?php echo $row['student_name']; ?><td>

</tr>
<?php } ?>


</table>


</body>
</html>