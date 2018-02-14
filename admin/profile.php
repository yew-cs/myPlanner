<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Planner || AdminPanel</title>
    <link rel="shortcut icon" href="../favicon.ico"/>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="../assets/css/styleee.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
 <link href="../assets/css/test1.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
         <?php include('navbar.php'); ?>
     <?php include('modal.php'); ?>

      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->

      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="../<?php if(empty($srow['uimage'])){echo "upload/avatar.png";}else{echo $srow['uimage'];} ?>" class="img-circle" height="80" width="80"></a></p>
              	  <h5 class="centered"><?php echo $srow['uname']; ?></h5>
              	  	
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-desktop"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                       <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                           <li><a  href="viewUser.php">View</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-comments"></i>
                          <span>Feedbacks</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="viewFeedback.php">View Feedback</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                    
                      <a href="#logout" data-toggle="modal" >
                          <i class="fa fa-sign-out"></i>
                          <span>Logout</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Profile Setting</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<div class="content-panel">
            

                   <p class="centered"> <a data-toggle="modal" href="#accountphoto"><img src="../<?php if(empty($srow['uimage'])){echo "upload/avatar.png";}else{echo $srow['uimage'];} ?>" class="img-circle" height="150" width="150"></a></p><hr>

                  <div class="log4">

                               <h4><b>User ID : </b><?php echo $srow['userid']; ?> </h4><br> 
                             <h4><b>Name      : </b><?php echo $srow['uname']; ?></h4><br>
                               <h4><b>Email     : </b><?php echo $srow['uemail']; ?></h4><br>
                               <h4><b>Mobile  :</b><?php echo $srow['umobile']; ?></h4>  
</div>

            <p class="centered"> <input type="submit" href="#account" data-toggle="modal" class="btn btn-success" name="editpro" value="Edit" id="editpro" />                         
            </p>
          </div> 
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
           <a href="lock.php" class="float">
<i class="fa fa-lock my-float"></i>
</a>
<div class="label-container">
<div class="label-text">Lock Screen</div>
<i class="fa fa-play label-arrow"></i>
</div>

      <footer class="site-footer">
          <div class="text-center">
              2019 © MyPlanner by Yao
              <a href="index.php" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
