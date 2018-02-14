<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Planner || Feedback</title>
    <link rel="shortcut icon" href="../favicon.ico"/>
    <!-- Bootstrap core CSS -->
    <!-- <link href="../assets/css/bootstrap.css" rel="stylesheet"> -->
    <!--external css-->
    <link href="../assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
    
    <!-- new -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Datatable CSS-->
    <link href="../assets/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../assets/css/dataTables.responsive.css" rel="stylesheet">
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    
    <!-- Data Table JS-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="../assets/css/styleee.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
       <link href="../assets/css/test1.css" rel="stylesheet">
    <script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable( {
    dom: '1Bfrtip',
    buttons: ['pageLength',
    {
    extend: 'excelHtml5',
    exportOptions: {
    columns: ':visible'
    }
    },
    {
    extend: 'pdfHtml5',
    exportOptions: {
    columns: [  0, 1, 2, 3, 4]
    }
    },
    'colvis'
    ]
    } );
    } );
    </script>
    <script>
    function validateForm2() {
    
    var x = document.forms["form2"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
      alert("Invalid e-mail format.(Eg.xxx@yahoo.com)");
      return false;
      }
      var y = document.forms["form2"]["mobile"].value;
      var num = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
      if (y.match(num))
      {
      return true;
      }
      else
      {
      alert("You have entered an invalid phone number!");
      return false;
      }
      }
      </script>
    </head>
    <body onload="myFunction()" style="margin:0;">
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
                <a   href="javascript:;" >
                  <i class="fa fa-calendar-check-o"></i>
                  <span>Timetable</span>
                </a>
                <ul class="sub">
                  <li ><a  href="addCourse.php">Add Course</a></li>
                   <li ><a  href="viewCourse.php">View Course</a></li>
                   <li   ><a  href="setTime.php">Setup</a></li>
                    <li ><a  href="viewTime.php">View List</a></li>
                  <li     ><a  href="viewTable.php">View Table</a></li>
                  
                </ul>
              </li>
              
              <li class="sub-menu">
                <a href="javascript:;" >
                  <i class="fa fa-calendar"></i>
                  <span>Events</span>
                </a>
                <ul class="sub">
                  <li><a  href="eventCalendar.php">Calendar</a></li>             
                  <li><a  href="viewEvent.php">View</a></li>
                </ul>
              </li>
              <li class="sub-menu">
                <a  href="task.php" >
                  <i class="fa fa-tasks"></i>
                  <span>Task</span>
                </a>
              </li>
              <li class="sub-menu">
                <a  href="javascript:;" >
                  <i class="fa fa-newspaper-o"></i>
                  <span>Notes</span>
                </a>
                <ul class="sub">
                  <li ><a  href="addNotes.php">Add</a></li>
                  <li><a  href="viewNotes.php">View</a></li>
                  
                </ul>
              </li>
              <li class="sub-menu">
                <a href="javascript:;" >
                  <i class="fa fa-address-book-o"></i>
                  <span>Contacts</span>
                </a>
                <ul class="sub">
                  <li><a  href="addContact.php">Add</a></li>
                  <li><a  href="viewContact.php">View</a></li>
                </ul>
              </li>
              <li class="sub-menu">
                <a class="active" href="addFeedback.php" >
                  <i class="fa fa-comments"></i>
                  <span>Feedback</span>
                </a>
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
        <?php
        date_default_timezone_set('Asia/Kuala_Lumpur');
        $date1 = date("Y-m-d H:i:s");
        ?>
        <a name="top"></a>
        <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i>Feedback Form</h3>
            <div class="row mt">
              <div class="col-lg-12">
                <div class="form-panel">
                  <br>
                  <form class="form-horizontal style-form" method="POST">
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" value="<?php echo $srow['uname']; ?>" readonly>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="<?php echo $srow['uemail']; ?>" readonly >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Date</label>
                      <div class="col-sm-10">
                        <input type="datetime-local" readonly class="form-control" name="date" value="<?php echo date('Y-m-d\TH:i', strtotime($date1)); ?>">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Subject</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="subject" placeholder="eg. Thanks...." required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-2 col-sm-2 control-label">Feedback</label>
                      <div class="col-sm-10">
                        <textarea  required class="form-control" rows="3" name="feedback" placeholder="eg. I would like to...."></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-12" > <center>
                        <button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Reset</button>
                        <button type="submit" class="btn btn-success" name="feedback" ><span class="fa fa-save"></span> Save </button></center>
                      </div>
                    </div>
                  </form>
                  
                  <?php
                  if(isset($_POST['feedback'])){
                  $name = trim($_POST['name']);
                  $email = trim($_POST['email']);
                  $date = $_POST['date'];
                  $feedback = trim($_POST['feedback']);
                  $subject = trim($_POST['subject']);
                  
                  $sql1="INSERT INTO feedback(name, email, date, feedback, subject) VALUES('$name','$email','$date','$feedback','$subject')";
                 if ($con->query($sql1) === TRUE) {                   
                                    
                    echo '<script> window.alert("Feedback submitted."); window.location.href="addFeedback.php"</script>';
                    } else {
                    echo "Error Submission record: " . mysqli_error($con);
                    }
                  }
                  ?>
                </div>
                </div><!-- col-lg-12-->
                </div><!-- /row -->
                
              </section><! --/wrapper -->
              </section><!-- /MAIN CONTENT -->
              <!--main content end-->
              <!--footer start-->
              <footer class="site-footer">
                    <div class="text-center">
                      2019 © MyPlanner by Yao
                      <a href="#top" class="go-top">
                        <i class="fa fa-angle-up"></i>
                      </a>
                    </div>
                  </footer>
              <!--footer end-->
                <a href="lock.php" class="float">
<i class="fa fa-lock my-float"></i>
</a>
<div class="label-container">
<div class="label-text">Lock Screen</div>
<i class="fa fa-play label-arrow"></i>
</div>
            </section>
            <!-- js placed at the end of the document so the pages load faster -->
            <!-- <script src="../assets/js/jquery.js"></script> -->
            <!-- <script src="../assets/js/bootstrap.min.js"></script> -->
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