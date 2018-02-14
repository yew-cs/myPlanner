<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Planner || Add Notes</title>
    <link rel="shortcut icon" href="../favicon.ico"/>
    <!-- Bootstrap core CSS -->
    <!-- <link href="../assets/css/bootstrap.css" rel="stylesheet"> -->
    <!--external css-->
    <link href="../assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
    
    <!-- new -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Custom styles for this template -->
    <link href="../assets/css/styleee.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <script src="../assets/ckeditor/ckeditor.js" type="text/javascript"></script>
    <link href="../assets/css/test1.css" rel="stylesheet">
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
              <a href="task.php" >
                <i class="fa fa-tasks"></i>
                <span>Task</span>
              </a>
            </li>
            <li class="sub-menu">
              <a class="active"    href="javascript:;" >
                <i class="fa fa-newspaper-o"></i>
                <span>Notes</span>
              </a>
              <ul class="sub">
                <li class="active"  ><a  href="addNotes.php">Add</a></li>
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
              <a href="addFeedback.php" >
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
          <h3><i class="fa fa-angle-right"></i>Add Notes</h3>
          <div class="row mt">
            <div class="col-lg-12">
              <div class="form-panel">
                <form style="margin:25px" name="form" method="POST">
                  <div class="form-group">
                    <label for="title">Subject:</label>
                    <select  name="subject" style="width:420px;" class="form-control" id="subject" required>
                      <option value="">Choose</option>
                      
                      <?php
                      $resss = mysqli_query($con,"SELECT * FROM course WHERE uid='".$_SESSION['uid']."'");
                      while($row = mysqli_fetch_array($resss)){
                      
                      $subcode = ($row['subcode']);
                      $subname = ($row['subname']);
                      $lec = ($row['lecturer']);?>
                      <option value="<?php echo $subcode?>"> <?php echo $subname?>&nbsp;&nbsp;-&nbsp;&nbsp;<?php echo $lec?></option>
                      <?php }?>
                    </select></div>
                    
                    <div class="form-group">
                      <label for="title">Title:</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Enter title" oninvalid="this.setCustomValidity('Enter title')" oninput="setCustomValidity('')" required>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <label for="title">Date:</label>
                        <input type="datetime-local" readonly class="form-control" name="date" value="<?php echo date('Y-m-d\TH:i', strtotime($date1)); ?>">
                      </div>
                      <div class="form-group">
                        <label for="editor">Notes :</label>
                        <textarea class="form-control ckeditor" id="editor" name="editor"></textarea>
                        <script type="text/javascript">
                        
                        CKEDITOR.replace( "editor",
                        {
                        removeButtons: "Source,About",
                        
                        });
                        </script>
                      </div>
                      <div class="form group">
                        <div class="col-lg-12" >
                          <center>
                          
                          <button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                          <button type="submit" class="btn btn-success" name="addnotes" name="addnotes" ><span class="fa fa-save"></span> Save </button></center>
                        </div></div>
                      </form>
                    </form>
                    <?php
                    if(isset($_POST['addnotes'])){
                    $title = trim($_POST['title']);
                    $subject = trim($_POST['subject']);
                    $date = trim($_POST['date']);
                    $notes = trim($_POST['editor']);
                    $uid = $srow['uid'];
                    
                    
                    $sql1="INSERT INTO notes(title,subject, date, notes,uid) VALUES('$title','$subject','$date','$notes','$uid') ";
                    if ($con->query($sql1) === TRUE) {
                    
                    echo '<script> window.alert("Notes Uploaded."); window.location.href="viewNotes.php"</script>';
                    } else {
                    echo "Error Upload record: " . mysqli_error($con);
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