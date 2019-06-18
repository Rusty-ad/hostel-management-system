<?php
	include 'variables.php';
	include $root.'auth.inc.php';
	
	$regNo = $name = $password = $fname =$email = "";
		$regNo=$_POST['username'];
		$name = $_POST['name'];
		$password=$_POST['password'];
		$fname = $_POST['fname'];
		$email = $_POST['email'];

		$sql = "INSERT INTO user(Reg_name,name,father,email,password)VALUES('$regNo','$name','$fname','$email','$password')";
		
		$result=$conn->query($sql);
		
		if($result){
			header("Location: sindex.php");
			
		}else{
			echo "Registration Number already registered.";

		
		}
		$conn->close();
?>