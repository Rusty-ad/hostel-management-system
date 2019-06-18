<?php
	include 'variables.php';
?>

<!doctype html>
<html>
	<head>
		<style type="text/css">
			#psw, #username, #name, #fname, #email, #password{
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    box-sizing: border-box;
		}
		</style>
		<meta charset= "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Hostel Management | Admin Login</title>
		<link rel="stylesheet" href="<?php echo $root?>bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $root?>font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $root?>css/custom.css">
	</head>
	<body>
		<?php include $root.'header.php';?>
		<?php include 'navbar.php';?>
		
		<div class="container">
			<div class="page-header">
				<h1><center>Registeration</center></h1>      
			</div>
		</div>
			
		<form action="signup-confirm.php" method="POST" id="admin-form">			
			<div class="container" id="logCont">
				
				<label><b>Registration No</b></label>
				<input type="text" placeholder="Registration No" name="username" id="username" required></br></br>

				<label><b>Name</b></label>
				<input type="text" placeholder="Enter Your Name" name="name" id="name" required></br></br>
				
				<label><b>Father's Name</b></label>
				<input type="text" placeholder="Father's Name" name="fname" id="fname" required></br></br>
				
				<label><b>EMail_ID</b></label>
				<input type="email" placeholder="abc@gmail.com" name="email" id="email" required></br></br>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" id="password" required></br></br>

				<form action="upload.php" method="post" enctype="multipart/form-data">
				    Select image to upload:</br>
				    <input type="file" name="fileToUpload" id="fileToUpload">
				    <input type="submit" value="Upload Image" name="submit">
				</form>
						
				<button type="submit" class="admin-button">Register</button>
			</div>
		</form>

		<!--<div class="container-fluid" style="margin-top:10px;">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12">
					<div class="page-header">  
						<center><h1>Registeration Panel</h1></center>
					</div>
						<form action="add-confirmation.php" method="POST">
							<label for="name">Name:</label>
							<input type="text" name="name" required /><br><br>
							<label for="registeration_no">Registeration Number:</label>
							<input type="text" name="registeration_no" required /><br><br>
							<input type="submit" name="submit" value="Register" id="button">
							<input type="reset" name="reset" value="Reset" id="button">
						</form>
					</div>
							
			</div>
		</div>-->
		
		<?php include $root.'footer.php';?>
		<script src="<?php echo $root?>js/jquery-3.2.1.min.js"></script>
		<script src="<?php echo $root?>bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>