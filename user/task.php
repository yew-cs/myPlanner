<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Planner || task</title>
    <link rel="shortcut icon" href="../favicon.ico"/>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../assets/css/to-do.css">
    <link href="../assets/css/styleee.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
     <link href="../assets/css/test1.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <a class="top"></a>
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
              <a class="active"  href="task.php" >
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
      <a class="top"></a>
    
      <section id="main-content">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Todo Task List</h3>
          <div class="row mt">
            <div class="col-lg-12">
              <section class="task-panel tasks-widget">
                <div class="panel-body">
                  <div class="task-content">
                    <form method="POST" name="add_task">
                      <center>
                      <div class="form-group input-group">
                        <input type="text" style="width:500px;" class="form-control" name="title11" id="title11" placeholder="Add your To-do Task here! "required>&nbsp;&nbsp;
                        <button type="submit" class="btn btn-success btn-sm" name="add_task" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span></button>
                      </div>
                      </center>
                    </div>
                  </form>
                  <hr>
                  
                  <ul class="task-list"><?php
                    date_default_timezone_set('Asia/Kuala_Lumpur');
                    $ress = mysqli_query($con,"SELECT * FROM task WHERE uid='".$_SESSION['uid']."'");
                    while ($row = mysqli_fetch_array($ress)){
                    $id = $row['id'];
                    $title1 = $row['title'];                  
                    ?>
                    <li class="<?php echo $message; ?>">                      
                      
                      <div class="task-title">
                        <span class="task-title-sp"><i class="fa fa-rocket "></i>&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $title1 ?></b></span>
                        <div class="pull-right hidden-phone">
                          <a href="#delete<?php echo $id;?>" data-toggle="modal">
                          <button class="btn btn-danger btn-xs"><i class="fa fa-close "></i></button></a>
                        </div>
                      </div>
                    </li>
                    <!--Delete Modal -->
                    <div id="delete<?php echo $id; ?>" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <form method="post">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title"><b><center>Delete</center></b></h4>
                            </div>
                            <div class="modal-body">
                              <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                              <div class="alert alert-danger">Are you Sure you want Delete <strong>
                              <?php echo $title1; ?> </strong> ?</div>
                              <div class="modal-footer">
                                <center>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                <button type="submit" name="delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                </center>
                                
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                    
                    
                    
                    
                    <?php }
                    if(isset($_POST['delete'])){  // sql to delete a record
                    $delete_id = $_POST['delete_id'];
                   
                    $sql = "DELETE FROM task WHERE id='$delete_id' ";
                    if ($con->query($sql) === TRUE) {                   
                    echo '<script> window.alert("Deleted."); window.location.href="task.php"</script>';
                    } else {
                    echo "Error deleting record: " . mysqli_error($con);
                    }    }
                    elseif (isset($_POST['add_task'])) {
                    
                    $title = $_POST['title11'];
                      $uid = $srow['uid'];
                    
                    $sql1="INSERT INTO task(title, uid) VALUES ('$title','$uid')";
                    if ($con->query($sql1) === TRUE) {                   
                                    
                    echo '<script> window.alert("Task Added."); window.location.href="task.php"</script>';
                    } else {
                    echo "Error Added record: " . mysqli_error($con);
                    }
                    
                    }
                    
                    ?>
                    
                    
                    
                    
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
                <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
                <script src="../assets/js/tasks.js" type="text/javascript"></script>
                <script>
                jQuery(document).ready(function() {
                TaskList.initTaskWidget();
                });
                $(function() {
                $( "#sortable" ).sortable();
                $( "#sortable" ).disableSelection();
                });
                </script>
                
                <script>
                //custom select box
                $(function(){
                $('select.styled').customSelect();
                });
                </script>
                <script type="text/javascript">
                $('#packersOff').change(function() {
                if ($('#packersOff').prop('checked') ) {
                $('#test').css('text-decoration','line-through');
                }
                });
                </script>
              </body>
            </html>