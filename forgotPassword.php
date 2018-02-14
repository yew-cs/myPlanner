<?php
session_start();
include_once 'dbConnection.php';
		
		$email = $_POST['eemail'];
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($regex, $email)) {

			$check = mysqli_query($con,"SELECT * FROM user WHERE uemail='$email' ");

		if(mysqli_num_rows($check)==1){	

			while($row = mysqli_fetch_array($check)){
				$password = $row['upassword'];
				$userid = $row['userid'];
				$name = $row['uname'];
			}
		
			$subject ="My Planner-Reset password";
			$txt =  "Hi, $name ! \n\nYour Userid : $userid\nYour password : $password " ;
			$header ="From: juzpromiz@gmail.com\r\n";

			mail($email, $subject, $txt, $header );			

			?>
			<script>window.alert("Retrieve password Email is sent.");window.location.href = "login.php";</script>
			<?php 
		} else {
			
			?>
			<script>window.alert("User does not exist."); window.history.back();</script>
			<?php
		}
	

     		
		}else{
			
			?>
			<script>window.alert("Invalid e-mail format.(Eg.xxx@yahoo.com)");window.location.href = "login.php#myModal";</script>
			<?php
	}?>


		



