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
		<title>Hostel Management | Student</title>
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
						<center><h1>NOTICE</h1></center>
					</div>
					<?php
						error_reporting(0);
						$conn=new mysqli($host, $user, $pass, $db);
						$q="SELECT * FROM notice";
						$qr=$conn->query($q);
						if ($qr->num_rows>0){
							while($result = $qr->fetch_assoc()){
								echo "<b><center><h3><u>Notice No - ".$result['notice_no']."</u></h3></center>";
								echo "<center>Date of issue - ".$result['date_of_issue']."</center></br>";
								echo "Notice From - ".$result['notice_from']."<p align='right'>Notice To - ".$result['notice_to']."</p>";
								echo "<style>
								.boxed{
									border: 1px solid green ;
									background-color: lightgray; 
								}</style>
								<div class='boxed'><center><b><u>Subject: ".$result['subject']."</u></</br></br>";
								echo $result['content']."</center></div></b>";
							}
						}
					?>
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
		<script>selectside(8);</script>
	</body>
</html>
