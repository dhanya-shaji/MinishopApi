<?php

header('Access-Control-Allow-Origin: *');
$servername="localhost";
$username="root";
$password="";
$database="minishop";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn) {
  die("connection failed".mysqli_connect_error());
}
$sql="INSERT INTO minishopapi (`id`, `name`, `password`) VALUES
(1, 'dhanya', '123'),
(2,'dhaneesh','1345')";
$result=mysqli_query($conn,$sql);
	if($result) {
 			echo "added successfully";
 		}
 		else
 		{
 			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 		}

?>