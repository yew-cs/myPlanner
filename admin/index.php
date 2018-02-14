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
    <link href="../assets/css/styleee1.css" rel="stylesheet">
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
              <a class="active" href="index.php">
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
          
          <div class="row mt">
            <div class="col-lg-12">
              <!--state overview start-->
              <a href="viewUser.php">  <div class="row state-overview">
                <div class="col-lg-3 col-sm-6">
                  <section class="panel">
                    <div class="symbol terques">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="value">
                      <h1 class="count">
                      <?php
                      $abc="SELECT count(*) as c FROM user";
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
                      <p>Users</p>
                    </div>
                  </section>
                </div>
              </a>
              <a href="viewFeedback.php">
                <div class="col-lg-3 col-sm-6">
                  <section class="panel">
                    <div class="symbol red">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <div class="value">
                      <h1 class=" count2">
                      <?php
                      $abc1="SELECT count(*) as d FROM feedback";
                      $result1=mysqli_query($con,$abc1);
                      if($result1)
                      {
                      while($row=mysqli_fetch_assoc($result1))
                      {
                      $total1= $row['d'];
                      }
                      }?>
                      <?php echo $total1?>
                      </h1>
                      <p>Feedbacks</p>
                    </div>
                  </section>
                </div>
              </a>
              <!--state overview end-->
            </div>
          </div>
          <div class="chat-room ">
            <aside class="mid-side">
              <div class="chat-room-head">
                <h3><i class="fa fa-users"></i>&nbsp; Users</h3>
                <!-- <form  class="pull-right position">
                  <a href="#add"  data-toggle="modal"class="chat-tools btn-danger"><i class="fa fa-plus"></i> </a>
                </form> -->
              </div>
              <?php
              $ress = mysqli_query($con,"SELECT * FROM user WHERE access=2 LIMIT 0,8");
              while ($row = mysqli_fetch_array($ress)){
              $id = $row['uid'];
              $name = $row['uname'];
              $mob = $row['umobile'];
              $email = $row['uemail'];
               $image = $row['uimage'];
                 $access = $row['access'];
              ?>
              <div class="group-rom">
                <form method="POST">                 
                  <div class="second-part"><?php echo $name?></div>
                  <input type="hidden" name="vieww" value="<?php echo $id; ?>">
                  <div class="third-part"><a href="#view<?php echo $id;?>" data-toggle="modal"> <button type="button" class="btn-xs btn-warning pull-right"><i class="fa fa-eye"></i></button></a></div></form>
                </div>
                <div id="view<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><b><center>Users details</center></b></h4>
                      </div>
                      <div class="modal-body" >
                        <div class="container-fluid">
                          <div style="height: 10px;"></div>

                            <p class="centered"><a href="profile.php"><img src="../<?php if(empty($image)){echo "upload/avatar.png";}else{echo $image;} ?>" class="img-circle" height="60" width="60"></a></p>
                          <b>Name     : </b><?php echo $name; ?>
                          <hr>
                          <b>Mobile     : </b><?php echo $mob; ?>
                          <hr>
                          <b>Email   : </b><?php echo $email; ?>
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
                
                <a class="log3" href="viewUser.php"><footer>
                  <center>
                  <h4><b>See All Users</b></h4></center>
                </footer></a>
              </aside>
              <aside class="right-side">
                <div class="user-head">
                  
                  <h3><i class="fa fa-flag"></i>Feedbacks<!--  <a href="eventCalendar.php" type="button" class="chat-tools btn-danger"><i class="fa fa-plus"></i> </a>
                  --></h3>
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
                  $ress = mysqli_query($con,"SELECT * FROM feedback ORDER BY date DESC LIMIT 0,10");
                  while ($row = mysqli_fetch_array($ress)){
                  $id22 = $row['id'];
                  $sub = $row['subject'];
                  $start2 = $row['date'];
                  $todaydate1 = date('Y-m-d');
                  $startt = strtotime( $start2);
                  $ttoday = strtotime( $todaydate1);
                  $diff=$ttoday-$startt;
                  $x= abs(floor($diff/(60*60*24)));
                  
                  if ($x==2){
                  $message= "yesterday";
                  $pattern ="success";
                  }
                  elseif($x==1){
                  $message = "today";
                  $pattern ="warning";
                  }
                  else{
                  $message = " ".$x." days ago";
                  $pattern ="primary";
                  }
                  
                  ?>
                  
                  <div class="media-body">
                    <div class="media-status">
                      <span class=" badge bg-<?php echo $pattern; ?>"><?php echo $message?></span>
                    </div>
                    <strong><?php echo $sub?></strong>
                    <small>  <?php echo date('Y-m-d H:i A', strtotime($start2));?></small>
                  </div>
                  <br>
                  <br>
                  <?php }?>
                  </div><!-- media -->
                </li>
                
                <footer>
                  <a class="log3" href="viewFeedback.php"><footer>
                    <center>
                  <h4><b>See All Feedbacks</b></h4></center></footer></a>
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