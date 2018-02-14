<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Planner || View Event</title>
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
              <a  class="active" href="javascript:;" >
                <i class="fa fa-calendar"></i>
                <span>Events</span>
              </a>
              <ul class="sub">
                <li><a  href="eventCalendar.php">Calendar</a></li>
                 <li class="active"><a  href="viewEvent.php">View</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a   href="task.php" >
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
          <h3><i class="fa fa-angle-right"></i> On-going Events</h3>
          <div class="row mt">
            <div class="col-lg-12">
              <section class="task-panel tasks-widget">
                <div class="panel-body">
                  <div class="task-content">
                    <div class=" add-task-row">
                      <a href="eventCalendar.php" type="button" class="btn btn-success btn-sm pull-right" ><span class="glyphicon glyphicon-plus"></span>&nbsp;New Event</a>
                    </div>
                    <br>
                    <br>
                    <br>                    
                 
                  <ul id="sortable" class="task-list"><?php
                    date_default_timezone_set('Asia/Kuala_Lumpur');
                    $ress = mysqli_query($con,"SELECT * FROM events WHERE uid='".$_SESSION['uid']."' ORDER BY start ASC");
                    while ($row = mysqli_fetch_array($ress)){
                    $id = $row['id'];
                    $title1 = $row['title'];
                    $type1 = $row['type'];
                    $venue1 = $row['venue'];
                    $duedate1 = $row['start'];
                    $end1=$row['end'];
                    $todaydate1 = date('Y-m-d');
                    $ddue = strtotime( $duedate1);
                    $ttoday = strtotime( $todaydate1);
                    
                    $diff=$ttoday-$ddue;
                    $x= abs(floor($diff/(60*60*24)));
                    
                    if($ddue>=$ttoday){
                    if ($x==2){
                    $message= "tomorrow";
                    $pattern ="success";
                    $badgee ="success";

                    }
                    elseif($x==1){
                    $message = "today";
                    $pattern ="warning";
                     $badgee ="warning";
                    }
                    else{
                    $message = "in ".$x." days";
                     $pattern ="primary";
                    $badgee ="primary";
                     }}
                    else{
                    $message = "Overdue";
                    $pattern ="danger";
                    $badgee ="important";
                    }



                    ?>

<?php if($duedate1 >=$todaydate1){?> 
                    <li class="list-<?php echo $pattern; ?>">
                      <!-- <i class=" fa fa-ellipsis-v"></i>                      -->
                      <div class="task-title">
                        <span class="task-title-sp"><b><?php echo $title1 ?></b></span><span class="badge bg-<?php echo $badgee; ?>"> <?php echo $message; ?></span>
                        <div class="pull-right hidden-phone">
                          <a href="#view<?php echo $id;?>" data-toggle="modal">
                          <button class="btn btn-default btn-xs fa fa-eye"></button></a>
                          <a href="#edit<?php echo $id;?>" data-toggle="modal">
                          <button class="btn btn-warning btn-xs fa fa-pencil"></button></a>
                          <a href="#delete<?php echo $id;?>" data-toggle="modal">
                          <button class="btn btn-danger btn-xs fa fa-trash-o"></button></a>
                        </div><br>                        
                        <span class="task-title-sp"><?php echo date('Y-m-d H:i A', strtotime($duedate1));?></span>
                        
                        
                        
                      </div>
                    </li>
                    <?php }?>
                    
                    <!--View  Modal -->
                    <div id="view<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><b><center>My Event</center></b></h4>
                          </div>
                          <div class="modal-body" >
                            <div class="container-fluid">
                              <div style="height: 10px;"></div>
                              <b>Title     : </b><?php echo $title1; ?>
                              <hr>
                              <b>Type   : </b><?php echo $type1; ?>
                              <hr>
                              <b>Venue   : </b><?php echo $venue1; ?>
                              <hr>
                              <b>Start   : </b><?php echo date('Y-m-d H:i A', strtotime($duedate1)); ?>
                              <hr>
                              <b>End   : </b><?php echo date('Y-m-d H:i A', strtotime($end1)); ?>
                              <hr>
                            </div>
                            <center>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                            </center>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Edit  Modal -->
                    <div class="modal fade" id="edit<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><b><center>Edit Event</center></b></h4>
                          </div>
                          <div class="modal-body">
                            <div class="container-fluid">
                              <form class="form-horizontal" method="POST">
                                <div style="height: 10px;"></div>
                                <div class="form-group input-group">
                                  <input type="hidden" name="edit_item_id" value="<?php echo $id; ?>">
                                </div>
                                <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">Title:</span>
                                  <input type="text" style="width:420px;" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $title1; ?>">
                                </div>
                                <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">Type:</span>
                                  <select style="width:420px;" name="type" class="form-control" id="type" >
                                    <option value= "<?php echo $type1; ?>"><?php echo $type1; ?></option>
                                     <option value="Assignment"> Assignment</option>
                                    <option value=" Event">Event</option>
                                     <option value=" Class">Class</option>
                                     <option value=" Meeting">Meeting</option>
                                    <option value=" Others ">Others</option>          
                                  </select>
                                </div>

                                <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">Venue:</span>
                                  <input type="text" style="width:420px;" class="form-control" name="venue" id="venue" placeholder="Venue" value="<?php echo $venue1; ?>">
                                </div>
                                
                                <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">Start Date :</span>
                                  <input type="datetime-local" style="width:420px;" name="due" class="form-control" id="due" value="<?php echo date('Y-m-d\TH:i:s', strtotime($duedate1)); ?>">
                                </div>
                                
                                  <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">End Date :</span>
                                  <input type="datetime-local" style="width:420px;" name="end" class="form-control" id="end" value="<?php echo date('Y-m-d\TH:i:s', strtotime($end1)); ?>">
                                </div>

                                <div class="modal-footer">
                                  <center>
                                  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                                  <button type="submit" class="btn btn-success" name="update"><span class="glyphicon glyphicon-check"></span> Update</button></center>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </section>


<br>
<br>
<h3><i class="fa fa-angle-right"></i> Past Events</h3>
          <div class="row mt">
            <div class="col-lg-12">
              <section class="task-panel tasks-widget">
                <div class="panel-body">

                    <br>
                                     
                 
                  <ul id="sortable1" class="task-list"><?php
                    date_default_timezone_set('Asia/Kuala_Lumpur');
                    $ress = mysqli_query($con,"SELECT * FROM events WHERE uid='".$_SESSION['uid']."' ORDER BY start ASC");
                    while ($row = mysqli_fetch_array($ress)){
                    $id = $row['id'];
                    $title1 = $row['title'];
                    $type1 = $row['type'];
                    $venue1 = $row['venue'];
                    $duedate1 = $row['start'];
                    $end1=$row['end'];
                    $todaydate1 = date('Y-m-d');
                    $ddue = strtotime( $duedate1);
                    $ttoday = strtotime( $todaydate1);
                    
                    $diff=$ttoday-$ddue;
                    $x= abs(floor($diff/(60*60*24)));
                    
                    if($ddue>=$ttoday){
                    if ($x==1){
                    $message= "tomorrow";
                    $pattern ="success";
                    $badgee ="success";

                    }
                    elseif($x==0){
                    $message = "today";
                    $pattern ="warning";
                     $badgee ="warning";
                    }
                    else{
                    $message = "in ".$x." days";
                     $pattern ="primary";
                    $badgee ="theme";
                     }}
                    else{
                    $message = "Over";
                    $pattern ="danger";
                    $badgee ="important";
                    }



                    ?>

<?php if($duedate1 < $todaydate1){?> 
                    <li class="list-<?php echo $pattern; ?>">
                                       <!-- <i class=" fa fa-ellipsis-v"></i>     -->
                      <div class="task-title">
                        <span class="task-title-sp"><b><?php echo $title1 ?></b></span><span class="badge bg-<?php echo $badgee; ?>"> <?php echo $message; ?></span>
                        <div class="pull-right hidden-phone">
                          <a href="#view<?php echo $id;?>" data-toggle="modal">
                          <button class="btn btn-default btn-xs fa fa-eye"></button></a>
                          <a href="#edit<?php echo $id;?>" data-toggle="modal">
                          <button class="btn btn-warning btn-xs fa fa-pencil"></button></a>
                          <a href="#delete<?php echo $id;?>" data-toggle="modal">
                          <button class="btn btn-danger btn-xs fa fa-trash-o"></button></a>
                        </div><br>                        
                        <span class="task-title-sp"><?php echo date('Y-m-d H:i A', strtotime($duedate1));?></span>
                        
                        
                        
                      </div>
                    </li>
                    <?php }?>
                    
                    <!--View  Modal -->
                    <div id="view<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><b><center>My Event</center></b></h4>
                          </div>
                          <div class="modal-body" >
                            <div class="container-fluid">
                              <div style="height: 10px;"></div>
                              <b>Title     : </b><?php echo $title1; ?>
                              <hr>
                              <b>Type   : </b><?php echo $type1; ?>
                              <hr>
                              <b>Venue   : </b><?php echo $venue1; ?>
                              <hr>
                              <b>Start   : </b><?php echo date('Y-m-d H:i A', strtotime($duedate1)); ?>
                              <hr>
                              <b>End   : </b><?php echo date('Y-m-d H:i A', strtotime($end1)); ?>
                              <hr>
                            </div>
                            <center>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                            </center>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Edit  Modal -->
                    <div class="modal fade" id="edit<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><b><center>Edit Event</center></b></h4>
                          </div>
                          <div class="modal-body">
                            <div class="container-fluid">
                              <form class="form-horizontal" method="POST">
                                <div style="height: 10px;"></div>
                                <div class="form-group input-group">
                                  <input type="hidden" name="edit_item_id" value="<?php echo $id; ?>">
                                </div>
                                <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">Title:</span>
                                  <input type="text" style="width:420px;" class="form-control" name="title" id="title" placeholder="Title" value="<?php echo $title1; ?>">
                                </div>
                                <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">Type:</span>
                                  <select style="width:420px;" name="type" class="form-control" id="type" >
                                    <option value= "<?php echo $type1; ?>"><?php echo $type1; ?></option>
                                     <option value="Assignment"> Assignment</option>
                                    <option value=" Event">Event</option>
                                     <option value=" Class">Class</option>
                                     <option value=" Meeting">Meeting</option>
                                    <option value=" Others ">Others</option>          
                                  </select>
                                </div>

                                <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">Venue:</span>
                                  <input type="text" style="width:420px;" class="form-control" name="venue" id="venue" placeholder="Venue" value="<?php echo $venue1; ?>">
                                </div>
                                
                                <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">Start Date :</span>
                                  <input type="datetime-local" style="width:420px;" name="due" class="form-control" id="due" value="<?php echo date('Y-m-d\TH:i:s', strtotime($duedate1)); ?>">
                                </div>
                                
                                  <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">End Date :</span>
                                  <input type="datetime-local" style="width:420px;" name="end" class="form-control" id="end" value="<?php echo date('Y-m-d\TH:i:s', strtotime($end1)); ?>">
                                </div>

                                <div class="modal-footer">
                                  <center>
                                  <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                                  <button type="submit" class="btn btn-success" name="update"><span class="glyphicon glyphicon-check"></span> Update</button></center>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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


                    <?php } ?>





                    <?php
                    if(isset($_POST['update'])){
                    $id = $_POST['edit_item_id'];
                    $title = $_POST['title'];
                    $type = $_POST['type'];
                    $venue = $_POST['venue'];
                    $due= $_POST['due'];
                    $end = $_POST['end'];
                    
                    $sql = "UPDATE events SET
                    title='$title',
                    type='$type',
                    venue='$venue',
                    start='$due',
                    end ='$end'
                    WHERE id='$id' ";
                    if ($con->query($sql) === TRUE) {?>
                    <script>window.alert("Updated successfully."); window.location.href = "viewEvent.php";</script>
                    <?php
                    } else {
                    ?>
                    <script>window.alert("Something Went Wrong, Try Again."); window.history.back();</script>
                    <?php
                    }
                    }
                    if(isset($_POST['delete'])){  // sql to delete a record
                    $delete_id = $_POST['delete_id'];
                    $sql = "DELETE FROM events WHERE id='$delete_id' ";
                    if ($con->query($sql) === TRUE) {
                    $sql = "DELETE FROM events WHERE id='$delete_id' ";
                    if ($con->query($sql) === TRUE) {
                    $sql = "DELETE FROM events WHERE id='$delete_id' ";
                    echo '<script> window.alert("Deleted."); window.location.href="task.php"</script>';
                    } else {
                    echo "Error deleting record: " . mysqli_error($con);
                    }
                    } else {
                    echo "Error deleting record: " . $con->error;
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
                jQuery(document).ready(function() {
                TaskList.initTaskWidget();
                });
                $(function() {
                $( "#sortable1" ).sortable();
                $( "#sortable1" ).disableSelection();
                });
                </script>
                
                <script>
                //custom select box
                $(function(){
                $('select.styled').customSelect();
                });
                </script>
                <script type="text/javascript">
                
                </script>
              </body>
            </html>