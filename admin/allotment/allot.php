<?php
	include 'variables.php';
	include $root.'auth.inc.php';
	include $back.'session.php';
	
	if(isset($_POST['room']) && isset($_POST['reg'])){
		$regno=$_POST['reg'];
        $room_no=$_POST['room'];
	}else{
		die('Error: Please fill in all the fields');
    }
    
    $qr="SELECT rooms FROM user WHERE rooms = '".$room_no."'";
    $result=$conn->query($qr);
    
    if ($result->num_rows>0){
        echo '<script>
        alert("Room already alloted!");
        window.location.href="new_room.php"
        </script>';
    }
    else{
        $q="UPDATE user SET rooms= ". $room_no . " WHERE Reg_name = ".$regno; 
        $result=$conn->query($q);
        if($result){
            echo '<script>
                alert("Room alloted successfully");
                window.location.href="new_room.php"
                </script>';
        }else{
            echo '<script>alert("Issue not resolved");
            window.location.href="new_room.php"
            </script>';
        }
    }
?>