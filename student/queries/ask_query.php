x<?php
	include 'variables.php';
	include $root.'auth.inc.php';
	include $back.'session.php';
	
	if(isset($_POST['room']) && !empty($_POST['room'])){
			$room=$_POST['room'];
			$query=$_POST['problem'];
	}else{
		echo '<script>
			alert("Please fill in all fields");
			window.location.href="query.php"
			</script>';
		die();
	}
	$id=1;
	$sql1="SELECT query FROM user WHERE rooms = '".$room."'";
	$result=$conn->query($sql1);
	if($result->num_rows==1){
		$sql="UPDATE user SET query='". $query ."'WHERE rooms='".$room."'";
		if($conn->query($sql)){
			echo '<script>
				alert("Query successfully asked, will be resolved asap.");
				window.location.href="query.php"
				</script>';
		}else{
			echo '<script>
				alert("Query ask failed");
				window.location.href="query.php"
				</script>';
		}
	}else{
		echo '<script>
			alert("Enter your room correctly");
			window.location.href="query.php"
			</script>';
	}
	$conn->close;
?>