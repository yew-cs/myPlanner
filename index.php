<?php
session_start();
include_once 'dbConnection.php';
?>

<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>My Planner || Home</title>
    <link rel="shortcut icon" href="favicon.ico"/>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="assets/css/custom.css" rel="stylesheet">
     <link href="assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    
</head>

<body>

    <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	<i class="fa fa-book"></i>
                	MY PLANNER
                </a>
            </div>
            <!-- Navbar links -->
            <!-- <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                 	<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="#">Calendar</a></li>
							<li><a href="#">Contact Book</a></li>
							<li><a href="#">Reminders</a></li>
						</ul>
					</li>
                    <li>
                        <a href="#">Contact us</a>
                    </li>
                </ul>
                
            </div> --><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	<!-- Header -->
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>Personal Planner</h1>
                <p >Are you having a hard time tracking your daily activities and reminders? </p>
                <a href="login.php" class="btn btn-primary btn-lg">Get started </a>
            </div>
        </div>
    </header>

	<!-- Intro Section -->
    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                	<h2 class="section-heading"><b>Make your study life easier to manage</b></h2>
                    <div class="feature scheduling">
                        <br>
                        <i class="fa fa-calendar" ></i>
                    <h3>Scheduling / Timetabling</h3>
                    
                    <p>Written from the ground up for schools, My Planner supports week and day rotation timetables as well as traditional weekly schedules.</p>

                   
                    <div class="feature reminders">
                        <br>
                         <br>
                        <i class="fa fa-bell" ></i>
                    <h3>Reminders</h3>
                    <p>Wont be miss out your events.Get notified about incomplete tasks and upcoming classes and events.</p>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>




   
	<!-- Content 1 -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="img/time.jpg" alt="">
                </div>
                <div class="col-sm-6"><br>
                    <br>
                    <br><br>
                	<h2 class="section-header">Organise your time</h2>
                	<p class="lead text-muted">My Planner can help you to stay organized and on track even during the busiest of times, read on.Organise your classes, tasks and exams & never forget a lecture or assignment again!</p>
                	
                </div>                
                
            </div>
        </div>
    </section>

	<!-- Content 2 -->
     <section class="content content-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <br>
                    <br>
                	<h2 class="section-header">Access via Internet</h2>
                	<p class="lead text-light">To use monkkee all you need is a computer with Internet access. Whether you are at home or on the move – if you have a sudden urge to write, you can access your data at any time and from anywhere.</p>
                	
                </div>    
                <div class="col-sm-6">
                    <img class="img-responsive img-circle center-block" src="img/5.jpg" alt="">
                </div>            
                
            </div>
        </div>
    </section>    

    <!-- <!-- Promos -->
	<!-- <div class="container-fluid">
        <div class="row promo">
        	<a href="#">
				<div class="col-md-4 promo-item item-1">
					<h3>
						Unleash
					</h3>
				</div>
            </a>
            <a href="#">
				<div class="col-md-4 promo-item item-2">
					<h3>
						Synergize
					</h3>
				</div>
            </a>
			
			<a href="#">
				<div class="col-md-4 promo-item item-3">
					<h3>
						Procrastinate
					</h3>
				</div>
            </a>
        </div>
    </div> -->
    <!-- /.container-fluid --> -->

	<!-- Content 3 -->
     <section class="content content-3">
        <div class="container">
			<h2 class="section-header"><br>Ready to say goodbye to your paper planner?</h2>
            <br>
			    <a href="login.php" class="btn btn-primary btn-lg">Register Now</a>               
            </div>
        </div>
    </section>
    
	<!-- Footer -->
    <footer class="page-footer">
    
    	<!-- Contact Us -->
        <div class="contact">
        	<div class="container">
				<h2 class="section-heading">Contact Us</h2>
				<p><span class="glyphicon glyphicon-earphone"></span><br> +6011-16606110</p>
				<p><span class="glyphicon glyphicon-envelope"></span><br> yao@myplanner.com</p>
        	</div>
        </div>
        	
        <!-- Copyright etc -->
        <div class="small-print">
        	<div class="container">
        		<p>Copyright &copy; yao 2019</p>
        	</div>
        </div>
        
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    
    <!-- Custom Javascript -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
