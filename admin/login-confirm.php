<?php
	include 'variables.php';
	include $root.'auth.inc.php';
	
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username=$_POST['username'];
		$password=$_POST['password'];

				
		$sql = "SELECT user_name, password FROM admin WHERE user_name = '" . $username ."'";
		$result=$conn->query($sql);

		if($result->num_rows>0){

			//echo "Naman";
			while($row = mysqli_fetch_assoc($result))
			{
				$hashpass = $row["password"];
			}
			if(password_verify($password, $hashpass))
			{
				session_start();
				$_SESSION['admin']['username']=$username;
				$_SESSION['admin']['password']=$password;
				echo '<script>
				window.location.href = "index.php";
				</script>';
			}
			else{
				echo ("Incorrect password");
			}
			
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