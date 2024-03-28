<?php
$connection = new mysqli("localhost" , "root","" ,"mytest")
if($connection->connect_error){
	die("Connection failed: " . $connection->connect_error);

}
if($_SERVER["REQYEST_METHOD"]=="POST")
$email = $_POST['email'];
$password =password_hash($_POST['password'], PASSWORD_DEFAULT)
$sql ="INSERT INTO user (email,password) VALUES('$email','$')
if($connection->query($sql)==TRUE){
	echo "Registration successiful";
	}else{
		echo "Error:".$sql."<br>" .$connection->$error;
	}
	$connection->close();
?>