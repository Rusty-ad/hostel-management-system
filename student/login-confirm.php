<?php
	include 'variables.php';
	include $root.'auth.inc.php';
	
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
				
		$sql = "SELECT Reg_name, password FROM user WHERE Reg_name = '" . $username . "' AND password='". $password ."'";
		$result=$conn->query($sql);
		if($result->num_rows>0){
			session_start();
			$_SESSION['user']['username']=$username;
			$_SESSION['user']['password']=$password;
			echo '<script>
				window.location.href = "index.php";
				</script>';
		}else{
			echo '<script>
				alert("Use correct username and password.");
				window.location.href="login.php";
			</script>';
			die();
			echo 'No';
		}
		$conn->close();
	}
?>