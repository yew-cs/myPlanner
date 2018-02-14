  <head>


    <title>My Planner || Home</title>
    <link rel="shortcut icon" href="favicon.ico"/>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />  
        
    <!-- Custom styles for this template -->
   <link href="assets/css/styleee.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <style type="text/css">
    .forms i {
    width: 10px;
	}
	</style>

    <script>
	function validateForm1() {
				


		var x = document.forms["form1"]["input1"].value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");

		if (x == null || x == "") {
			alert("Username/email must be filled out.");
			return false;
		}
		// else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
		// 	alert("Invalid e-mail format.(Eg.xxx@yahoo.com)");
		// 	return false;
		// }

		var a = document.forms["form1"]["password1"].value;
		if(a == null || a == ""){
			alert("Password must be filled out");
			return false;
		}
		if(a.length<5 || a.length>25){
			alert("Passwords must be 5 to 25 characters long.");
			return false;
		}

		
	}
</script>

<script>
	function validateForm2() {
		var y = document.forms["form2"]["name2"].value;
		var letters = /^[A-Za-z]+$/;
		if (y == null || y == "") {
			alert("Name must be filled out.");
			return false;
		}

		
		var x = document.forms["form2"]["email2"].value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
			alert("Invalid e-mail format.(Eg.xxx@yahoo.com)");
			return false;
		}

		var a = document.forms["form2"]["password2"].value;
		if(a == null || a == ""){
			alert("Password must be filled out");
			return false;
		}
		if(a.length<5 || a.length>25){
			alert("Passwords must be 5 to 25 characters long.");
			return false;
		}

		var b = document.forms["form2"]["passwords2"].value;
		if (a!=b){
			alert("Passwords must match.");
			return false;
		}
	}
</script>

<script>
		function validateForm11() {
				


		var xx = document.forms["form11"]["eemail"].value;
		var atpos = xx.indexOf("@");
		var dotpos = xx.lastIndexOf(".");

		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){
			alert("Invalid e-mail format.(Eg.xxx@yahoo.com)");
			return false;
		}
</script>

  
  </head>

  <body>
 	<?php include('modal.php'); ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">

	  	<div class="forms">

			<ul class="tab-group">
		<li class="tab active"><a href="#login">Log In</a></li>
		<li class="tab"><a href="#register">Register</a></li>
			</ul>	


		      <form class="form-login" name="form1" action="loginProcess.php" id="login" onSubmit="return validateForm1()" method="POST">
		        <h2 class="form-login-heading">Log in </h2>
		        <div class="login-wrap">
		        	

		        	   <div class="form-group " >
                       <div class="input-group">
                       <div class="input-group-addon"><i class="fa fa-user"></i></div>
		            <input type="text" name="input1" class="form-control" placeholder="Username or Email" title="Enter your Username">
		            
		        </div>
		    </div>

		            	
		           <div class="form-group ">
                   <div class="input-group">
                   <div class="input-group-addon"><i class="fa fa-lock" ></i></div>
		            <input type="password" name="password1" class="form-control" placeholder="Password " title="Enter your Password" >

		             </div>
		    </div>

		            <label class="checkbox">
		                <span class="pull-right">
		                    <a class="log2" data-toggle="modal" href="#myModal" ><b> Forgot Password?</b></a>
		
		                </span>
		            </label>
					
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-sign-in"></i>&nbsp;&nbsp; LOG IN</button>
					<!--<button class="btn btn-theme01 btn-block" href="index.html" type="submit"><i class="fa fa-times"></i> CLOSE</button>-->
		            
		            
		            
		           <!-- <hr>
		           		<div class="registration">
		                Don't have an account yet?<br/>
		                <a class="form-login" href="login.html#register">
		                    Create an account
		                </a>
		            </div>-->
		
		        </div>
		
		         
		
		      </form>	
		      
		      <form class="form-login" name="form2" action="registerProcess.php" id="register" onSubmit="return validateForm2()" method="POST">  	
		      	<h2 class="form-login-heading">register</h2>
		        <div class="login-wrap">

		        	 <div class="form-group " >
                       <div class="input-group">
                       <div class="input-group-addon"><i class="fa fa-user"></i></div>
		            <input type="text" name="userid2" class="form-control"  placeholder="Username"  pattern="[A-Za-z0-9]{8,20}" title="At least 8 characters & unique" autocomplete="off" required/>
		            </div>
		        </div>
		         <div class="form-group " >
                       <div class="input-group">
                       <div class="input-group-addon"><i class="fa fa-male"></i></div>
		            <input type="text" name="name2" class="form-control"  placeholder="Name" oninvalid="this.setCustomValidity('Enter your name')" oninput="setCustomValidity('')" title="Enter your name" required/>
		            </div>
		        </div>
		        <div class="form-group " >
                       <div class="input-group">
                       <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
		             <input type="text" name="email2" class="form-control" placeholder="Email"  type="email"oninvalid="this.setCustomValidity('Enter a valid email')" oninput="setCustomValidity('')" autocomplete="off" title="Eg.xxx@yahoo.com" required/>
		            </div>
		        </div>

		        <div class="form-group " >
                       <div class="input-group">
                       <div class="input-group-addon"><i class="fa fa-lock"></i></div>
		            <input type="password" name="password2" class="form-control" placeholder="Password" oninvalid="this.setCustomValidity('Enter a password (5-25 to 25 characters long)')" oninput="setCustomValidity('')" title=" 5- 25 characters long"required />
		            <br>
		            <br>
		            <input type="password"name="passwords2" class="form-control" placeholder="Comfirm Password" oninvalid="this.setCustomValidity('Enter your password again" oninput="setCustomValidity('')" required/>
		          </div>
		      </div>
					
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-user-plus"></i>&nbsp;&nbsp; REGISTER</button>
					<!--<<button class="btn btn-theme01 btn-block" href="index.html" type="submit"><i class="fa fa-times"></i> CLOSE</button>-->
		            
		        </div>
		         </form>
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("img/login-bg.jpg", {speed: 500});
    </script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">
$(document).ready(function(){
	  $('.tab a').on('click', function (e) {
	  e.preventDefault();
	  
	  $(this).parent().addClass('active');
	  $(this).parent().siblings().removeClass('active');
	  
	  var href = $(this).attr('href');
	  $('.forms > form').hide();
	  $(href).fadeIn(500);
	});
});
</script>

  </body>
</html>
