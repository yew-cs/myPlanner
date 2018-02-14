<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Planner || Home</title>
    <link rel="shortcut icon" href="../favicon.ico"/>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    <link href="../assets/css/styleee.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <link href="../assets/css/test1.css" rel="stylesheet">
          <script src="../assets/ckeditor/ckeditor.js" type="text/javascript"></script>
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include('navbar.php'); ?>
    <?php include('modal.php'); ?>
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
            <a  class="active" href="index.php">
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
    <section id="main-content">
      <section class="wrapper site-min-height">
        
        <div class="row mt">
          <div class="col-lg-12">
            <!--state overview start-->
            <a href="viewContact.php">  <div class="row state-overview">
              <div class="col-lg-3 col-sm-6">
                <section class="panel">
                  <div class="symbol terques">
                    <i class="fa fa-address-book-o"></i>
                  </div>
                  <div class="value">
                    <h1 class="count">
                    <?php
                    $abc="SELECT count(*) as c FROM person WHERE uid='".$_SESSION['uid']."'";
                    $result=mysqli_query($con,$abc);
                    if($result)
                    {
                    while($row=mysqli_fetch_assoc($result))
                    {
                    $total= $row['c'];
                    }
                    }?>
                    <?php echo $total?>
                    </h1>
                    <p>Contacts</p>
                  </div>
                </section>
              </div>
            </a>
            <a href="viewEvent.php">
              <div class="col-lg-3 col-sm-6">
                <section class="panel">
                  <div class="symbol red">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <div class="value">
                    <h1 class=" count2">
                    <?php
                    $abc1="SELECT count(*) as c FROM events WHERE uid='".$_SESSION['uid']."' AND start >= NOW();";
                    $result1=mysqli_query($con,$abc1);
                    if($result1)
                    {
                    while($row=mysqli_fetch_assoc($result1))
                    {
                    $total1= $row['c'];
                    }
                    }?>
                    <?php echo $total1?>
                    </h1>
                    <p>Events</p>
                  </div>
                </section>
              </div>
            </a>
            <a href="task.php">
              <div class="col-lg-3 col-sm-6">
                <section class="panel">
                  <div class="symbol yellow">
                    <i class="fa fa-flag"></i>
                  </div>
                  <div class="value">
                    <h1 class=" count3">
                    <?php
                    $abc2="SELECT count(*) as c FROM task WHERE uid='".$_SESSION['uid']."'";
                    $result2=mysqli_query($con,$abc2);
                    if($result2)
                    {
                    while($row=mysqli_fetch_assoc($result2))
                    {
                    $total2= $row['c'];
                    }
                    }?>
                    <?php echo $total2?>
                    </h1>
                    <p>Task</p>
                  </div>
                </section>
              </div>
            </a>
            <a href="viewNotes.php">
              <div class="col-lg-3 col-sm-6">
                <section class="panel">
                  <div class="symbol blue">
                    <i class="fa fa-newspaper-o"></i>
                  </div>
                  <div class="value">
                    <h1 class=" count4">
                    <?php
                    $abc3="SELECT count(*) as c FROM notes WHERE uid='".$_SESSION['uid']."'";
                    $result3=mysqli_query($con,$abc3);
                    if($result3)
                    {
                    while($row=mysqli_fetch_assoc($result3))
                    {
                    $total3= $row['c'];
                    }
                    }?>
                    <?php echo $total3?>
                    </h1>
                    <p>Notes</p>
                  </div>
                </section>
              </div>
            </div>
          </a>
          <!--state overview end-->
        </div>
      </div>
      <div class="chat-room">
        <aside class="left-side">
          <div class="user-head">
            <i class="fa fa-flag"></i>
            <h3>Task</h3>
          </div>
          <ul class="chat-list">
            
            
            <ul class="chat-list chat-user">
              <?php
              $ress = mysqli_query($con,"SELECT * FROM task WHERE uid='".$_SESSION['uid']."' ORDER BY id LIMIT 0,10");
              while ($row = mysqli_fetch_array($ress)){
              $iddd = $row['id'];
              $title = $row['title'];?>
              <li>
                <a href="#">
                  <form method="POST">
                  <i class="fa fa-rocket text-success"></i>                  
                  <span><?php echo $title?><input type="hidden" name="delete_iddd" value="<?php echo $iddd; ?>"></span><button type="submit" name="deleteee" id="delete" class="close" aria-hidden="true" title="delete" >×</button></form>
                </a>
              </li>
              
              <?php }?>
            </ul>
            <footer><center>
              <div class="chat-txt">
                <form method="POST" name="addtask">
                  <input type="text" name="title111" id="title111" placeholder="New task" class="form-control" required>
                </div>
                <button type="submit" name="addtask" class="btn btn-danger"><i class=" fa fa-plus"></i></button>
              </form>
            </center> </footer>
          </aside>
          <?php
          if(isset($_POST['addtask'])){
          $title111 = $_POST['title111'];
          $uid = $srow['uid'];
          
          
          $sql111="INSERT INTO task(title,  uid) VALUES ('$title111','$uid')";
          if ($con->query($sql111) === TRUE) {         
           echo '<script> window.alert("Added."); window.location.href="index.php"</script>';
          } else {
          echo "Error Add record: " . mysqli_error($con);
          }
          } 

          elseif(isset($_POST['deleteee'])){  // sql to delete a record
                $delete_id = $_POST['delete_iddd'];
                $sql = "DELETE FROM task WHERE id='$delete_id' ";
                if ($con->query($sql) === TRUE) {
                echo '<script> window.alert("Deleted."); window.history.back()</script>';
                } else {
                echo "Error deleting record: " . mysqli_error($con);
                }
                
                }?>
          
          
          
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3><i class="fa fa-newspaper-o"></i>&nbsp; Notes</h3>
               <form  class="pull-right position">
                             <a href="#add"  data-toggle="modal"class="chat-tools btn-danger"><i class="fa fa-plus"></i> </a>
                          </form>
            </div>

            <?php
              $ress = mysqli_query($con,"SELECT * FROM notes WHERE uid='".$_SESSION['uid']."' ORDER BY date ASC LIMIT 0,10");
              while ($row = mysqli_fetch_array($ress)){
              $id = $row['id'];
              $ntitle = $row['title'];
              $nsub = $row['subject'];
               $ndate = $row['date'];
              $nnotes= $row['notes'];?>
               <div class="group-rom">
                <form method="POST">
                              <div class="first-part odd"><center><?php echo $nsub?></center></div>
                              <div class="second-part"><?php echo $ntitle?></div>
                              <input type="hidden" name="vieww" value="<?php echo $id; ?>">
                              <div class="third-part"><a href="#view<?php echo $id;?>" data-toggle="modal"> <button type="button" class="btn-xs btn-warning"><i class="fa fa-eye"></i></button></a></div></form>
                          </div> 


                         <div id="view<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel"><b><center>My Notes</center></b></h4>
                          </div>
                          <div class="modal-body" >
                            <div class="container-fluid">
                              <div style="height: 10px;"></div>
                              <b>Subject     : </b><?php echo $nsub; ?>
                              <hr>
                              <b>Title     : </b><?php echo $ntitle; ?>
                              <hr>
                              <b>Date   : </b><?php echo $ndate; ?>
                              <hr>
                              <b>Notes   : </b><?php echo $nnotes; ?>
                              <hr>
                            </div>                            
                            <center>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                            </center>                            
                          </div>
                        </div>
                      </div>
                    </div>
<?php } date_default_timezone_set('Asia/Kuala_Lumpur'); 
                  $date1 = date("Y-m-d H:i:s");?>
          
               <a class="log3" href="viewNotes.php"><footer>            
                <center>
                 <h4><b>See All Notes</b></h4></center>
              </footer></a>
            </aside>
            
            <aside class="right-side">
              <div class="user-head">
               
            <h3><i class="fa fa-calendar"></i>Events <a href="eventCalendar.php" type="button" class="chat-tools btn-danger"><i class="fa fa-plus"></i> </a></h3>
          </div>
              <li class="online">
                  <div class="media">
                     
                      </a>
                         <!--main content start-->
      <?php
      date_default_timezone_set('Asia/Kuala_Lumpur');
      $date1 = date("Y-m-d H:i:s");
      ?>
                    <?php
                  $ress = mysqli_query($con,"SELECT * FROM events WHERE uid='".$_SESSION['uid']."' LIMIT 0,10");
                  while ($row = mysqli_fetch_array($ress)){
                  $id22 = $row['id'];
                  $title2 = $row['title'];
                  $start2 = $row['start'];
                  $todaydate1 = date('Y-m-d');
                  $startt = strtotime( $start2);
                  $ttoday = strtotime( $todaydate1);
                  $diff=$ttoday-$startt;
                  $x= abs(floor($diff/(60*60*24)));
                  if($startt>=$ttoday){
                  if ($x==2){
                  $message= "tomorrow";
                   $pattern ="success";
                  }
                  elseif($x==1){
                  $message = "today";
                   $pattern ="warning";
                  }
                  else{
                  $message = "in ".$x." days";
                   $pattern ="primary";
                  }}
                  else{
                  $message = "Overdue";
                  
                  }
                  ?>
                  <?php if($start2 >= $todaydate1){?>


                    <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-<?php echo $pattern; ?>"><?php echo $message?></span>
                          </div>
                          <strong><?php echo $title2?></strong>
                          <small>  <?php echo date('Y-m-d H:i A', strtotime($start2));?></small>
                      </div>
                      <br>
                      <br>
                       <?php }}?>
                  </div><!-- media -->
              </li>   
              
              <footer>
                 <a class="log3" href="viewEvent.php"><footer>            
                <center>
                 <h4><b>See All Events</b></h4></center></footer></a>
              </footer>

               


                    <div id="add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          
                              <div class="modal-dialog">
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                         <h4 class="modal-title" id="myModalLabel"><b><center>Add Note</center></b></h4>               </div>
                                      
                                      <div class="modal-body">
                                        <div class="container-fluid">
                                        <form method="post" class="form-horizontal" role="form">
                                          <input type="hidden" name="edit_item_id" value="<?php echo $id; ?>">

                                  <div style="height: 10px;"></div>

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
                                <div class="form-group input-group">
                                  <span class="input-group-addon" style="width:150px;">Title:</span>
                                  <input type="text" style="width:420px;" class="form-control" name="title" id="title" placeholder="Title" required autofocus/>
                                </div>
                                  <div class="form-group">                                         
                                           
                                 

                                    <input type="datetime-local" style="width:550px;" readonly class="form-control" name="date" value="<?php echo date('Y-m-d\TH:i', strtotime($date1)); ?>">
                                           </div>                                       


                                          <div class="form-group">
                                              <label for="editor">Notes :</label>
                                               <textarea class="form-control ckeditor" id="editor" name="editor"></textarea>
                                              <script type="text/javascript">
          
                                               CKEDITOR.replace( "editor",
                                                {
                                                </script> 
                                                         
                                                 
                                               
                                              </div>                                              
                                          </div>
                                      </div>
                                      
                                      <div class="modal-footer">
                                        <center>
                        
                        <button type="reset" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                        <button type="submit" class="btn btn-success" name="addnotes" name="addnotes" ><span class="fa fa-save"></span> Save </button></center>
                                      </div>
                                  </div>
                              </div>
                          </form>
                        </div>
                      </div> 

                         <?php
                  if(isset($_POST['addnotes'])){
                  $title = trim($_POST['title']);
                  $subject = trim($_POST['subject']);
                  $date = trim($_POST['date']);
                  $notes = trim($_POST['editor']);
                  $uid = $srow['uid'];
                  
                  
                 $sql1="INSERT INTO notes(title,subject, date, notes,uid) VALUES('$title','$subject','$date','$notes','$uid') ";
                    if ($con->query($sql1) === TRUE) {                   
                                    
                    echo '<script> window.alert("Notes Uploaded.");  </script>';
                    } else {
                    echo "Error Upload record: " . mysqli_error($con);
                    }
                  }
                  ?>
            </aside>
          </div>
        </section><! --/wrapper -->
        </section><!-- /MAIN CONTENT -->
        <!--main content end-->
        <a href="lock.php" class="float">
          <i class="fa fa-lock my-float"></i>
        </a>
        <div class="label-container">
          <div class="label-text">Lock Screen</div>
          <i class="fa fa-play label-arrow"></i>
        </div>
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