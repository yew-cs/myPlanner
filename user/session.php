<?php
	session_start();
	include('../dbConnection.php');
	
	if (!isset($_SESSION['uid']) ||(trim ($_SESSION['uid']) == '')) {?>
		<script>window.alert("Your session expired,click OK to login again...");window.location.href='../login.php';</script>
		<?php
    exit();
	}
	
	$sq=mysqli_query($con,"select * from user where uid='".$_SESSION['uid']."'");
	$srow=mysqli_fetch_array($sq);
		
	if ($srow['access']!=2){
		?>
		<script>window.alert("Invalid access,click OK to login again...");window.location.href='../login.php';</script>
		<?php

		//header('location:../');
		exit();
	}
	
	$name=$srow['uname'];
?>