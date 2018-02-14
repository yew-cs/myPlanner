<?php
	include('session.php');
	
	$name=$_POST['mname'];
	$cpassword=($_POST['cpassword']);
	$apassword=($_POST['apassword']);
	$mpassword=$_POST['mpassword'];
	$mobile=$_POST['mmobile'];
	
	$myq=mysqli_query($con,"select * from user where uid='".$_SESSION['uid']."'");
	$myqrow=mysqli_fetch_array($myq);
	
	
if ($mpassword!=$apassword){
		?>
		<script>
			window.alert('Verification Password did not match!');
			window.location.href='profile.php';	
		</script>
		<?php
	}
	
	else if ($cpassword!=$myqrow['upassword']){
		?>
		<script>
			window.alert('Current Password did not match!');
			window.location.href='profile.php';	
		</script>
		<?php
	}

	else{
		if($cpassword ==$myqrow['upassword'] && $mpassword==$apassword)
			$newpassword=($apassword);
				
		mysqli_query($con,"update user set umobile='$mobile', upassword='$newpassword', uname='$name' where uid='".$_SESSION['uid']."'");
		?>
		<script>
			window.alert('Changes Saved!');
			window.history.back();
		</script>
		<?php
	}

?>