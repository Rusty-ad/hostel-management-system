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
						<center><h1>Student Queries</h1></center>      
					</div>
					
					<?php
						error_reporting(0);
						$conn = new mysqli($host,$user,$pass,$db);
						$q="SELECT id, Reg_name, name, query, rooms FROM user WHERE query!='". 0 ."'"; 
						$result=$conn->query($q);
						$i=1;
						if($result->num_rows>0){
							echo '<div class="table-responsive">
								<table class="table table-striped">
								<tr>
									<th>S.No.</td>
									<th>Name</td>
									<th>Registration id</td>
									<th>Queries</td>
									<th>Room no</td>
								</tr>';
								
							while($row=$result->fetch_assoc()){
									echo "<tr><td>$i</td>". "<td>".$row["name"] . "</td>" . "<td>" .
									$row["Reg_name"] . "</td>" . "<td>" . $row["query"] ."</td>". "<td>" . $row["rooms"] . "</td>";
									$i++;
							}
							echo "</table></div>";
						}else{
								echo '<b>No queries</b>';
						}
						$conn->close();
					?>
					
					<h1>Resolve Queries</h1>
						<form action="resolve.php" method="POST">
							<label for="room_no">Room Number:</label>
							<input type="text" name="room_no" required name="room_no"><br><br>
							<input type="submit" name ="resolve" value="Resolve" id="button">
						</form>
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
		<script>selectside(3);</script>
	</body>
</html>