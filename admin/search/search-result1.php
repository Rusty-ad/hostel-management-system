<?php
	include 'variables.php';
	include $root.'auth.inc.php';
	include $back.'session.php';
?>

<!doctype html>
<html>
	<head>
		<meta charset= "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Hostel Management | Admin</title>
		<link rel="stylesheet" href="<?php echo $root?>bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $root?>font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $root?>css/custom.css">
		<link rel="stylesheet" href="../admin-css.css">
		
	</head>
	
	<body>
		<?php include $root.'header.php';?>
		<div class="container-fluid" style="margin-top:10px;">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-xs-12">
					<?php include $back.'sidebar.php';?>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="page-header">
						<center><h1>Search Results</h1></center>      
					</div>

					<?php 
						if(isset($_POST['name']) && !empty($_POST['name'])){
							$name=$_POST['name'];
						}else{
						echo '<script>
							alert("Please fill in all fields");
							window.location.href="query.php"
							</script>';
						die();
						}
						error_reporting(0);
						$query = "SELECT * FROM user";
						$data = mysqli_query($conn, $query);
						$id=0;
						if (mysqli_num_rows($data)){
							while($result = mysqli_fetch_assoc($data)){
								if ($name == $result['name']){
									echo "<div class='table-responsive'>
									<table class='table table-striped'>
									<tr>
										<th> Name </th> 
										<td>".$result['name']."</td>
									</tr>	
									<tr>
										<th>Father's Name </th>
										<td> ".$result['father']."</td>
									</tr>
									<tr>
										<th>Registration No </th> 
										<td>".$result['Reg_name']."</td>
									</tr>
									<tr>
										<th>Email id </th> 
										<td>".$result['email']."</td>
									<tr><tr>
										<th>Room No </th>";
									if (!$result['rooms'])
										echo "<td><b>Room not alloted</b></td></tr>";
									else
										echo "<td>".$result['rooms']."</td>";
									echo "</table></div>";
									echo "<br>";
									$id=1;
								}
							}
							if ($id==0)
								echo "No results found<br>";
						}
						$conn->close;
					?>
					Back to <a href="search.php">search</a>.
				</div>
				
				<div class="col-lg-3 col-md-3 col-xs-12">
					<form action="<?php echo $back?>logout-confirm.php" method="POST">
						<button type="submit" class="admin-button" id="logout-button" onclick="return confirm('Are you sure you want to logout?');">Logout</button>
					</form>
				</div>				
			</div>
		</div>
		
		<?php include $root."js.php";?>
		<script src="<?php echo $root?>js/jquery-3.2.1.min.js"></script>
		<script src="<?php echo $root?>bootstrap/js/bootstrap.min.js"></script>
		<script>selectside(7);</script>
	</body>
</html>