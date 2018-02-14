<?php
include 'dbConnection.php';
session_start();

$request = $_POST['input1'];
$password = $_POST['password1'];




/* user */

$queryCheck = "select * from user where ( uemail = '".$request."' OR userid = '".$request."')  and upassword= '".$password."'";

$resultCheck = mysqli_query($con, $queryCheck); //assign query result to a variable

if(!$resultCheck) //to check if query result IS NOT OK
{
	die ("Invalid Query 1: ".mysqli_error($con));
}
else
{
	if(mysqli_num_rows($resultCheck) == 0){?>
		<script>window.alert("Login Failed, Invalid Username/Password!"); window.history.back();</script>
		<?php
	}
	else
	{
		$row=mysqli_fetch_array($resultCheck);
		
		if ($row['access']==1){
				$_SESSION['uid']=$row['uid'];
				?>
				<script>
					window.alert('Login Success, Welcome Admin!');
					window.location.href='admin/';
				</script>
				<?php
			}
		else
		{
		
			$_SESSION['uid']=$row['uid'];
			$name=$row['uid'];	

				?>
				<script>
					window.alert('Login Success, Welcome User!');
					
					window.location.href='user/';
				</script>
				<?php
			
			
		}
	}

}

	mysqli_close($con);
	

?>