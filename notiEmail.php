<?php
session_start();
include_once 'dbConnection.php';




  $abc="SELECT count(*) as c FROM person WHERE uid='".$_SESSION['uid']."'";
            $result=mysqli_query($con,$abc);
            if($result)
            {
            while($row=mysqli_fetch_assoc($result))
            {
            $total= $row['c'];
            }
            }


                $abc1="SELECT count(*) as c FROM events WHERE uid='".$_SESSION['uid']."' AND start >= NOW();";
            $result1=mysqli_query($con,$abc1);
            if($result1)
            {
            while($row=mysqli_fetch_assoc($result1))
            {
            $total1= $row['c'];
            }
            }


               $abc2="SELECT count(*) as c FROM task WHERE uid='".$_SESSION['uid']."'";
            $result2=mysqli_query($con,$abc2);
            if($result2)
            {
            while($row=mysqli_fetch_assoc($result2))
            {
            $total2= $row['c'];
            }
            }

            $check = mysqli_query($con,"SELECT * FROM user WHERE uemail='$email' ");

		if(mysqli_num_rows($check)==1){	

			while($row = mysqli_fetch_array($check)){
				$password = $row['upassword'];
				$userid = $row['userid'];
				$name = $row['uname'];
			}

            $subject ="My Planner-Your activity";
			$txt =  "Hi, $name ! \n\nYour Pending Task : $total tasks\nYour Coming event : $total1 events,\nPlease Log in to check more details" ;
			$header ="From: juzpromiz@gmail.com\r\n";

			mail($email, $subject, $txt, $header );


			?>