<?php
session_start();
include_once 'dbConnection.php';

	$userid = trim($_POST['userid2']);
	$name = trim($_POST['name2']);
	$email = trim($_POST['email2']);	
	$password = trim($_POST['password2']);

	// $password = md5(trim($_POST['password2']));


		//if user is already registerd
		$check = mysqli_query($con,"SELECT * FROM user WHERE (uemail='$email' or userid ='$userid') ");

		if(mysqli_num_rows($check)==1){
			?>
			<script>window.alert("This Userid & Email is registered."); window.history.back();</script>
			<?php 
		}
		else{
			mysqli_query($con,"INSERT INTO user(userid,uname,uemail,upassword,access) VALUES('$userid','$name','$email','$password',2) ");
			if(mysql_error()==""){

				?>
			<script>window.alert("Register successful,Login to Access");window.history.back(); </script>
			<?php 


			}
			else{
				?>
			<script>window.alert("Something Went Wrong, Try Again."); window.history.back();</script>
			<?php 
			}
		}	
	
				
?>