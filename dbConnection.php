<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="school";
//process kill here no any action after this line  
//die();
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else {
//echo "Connected successfully";

}

/* $sql="create table student (id int(11) PRIMARY key auto_increment, student_name varchar(55))";
*/
         
?>