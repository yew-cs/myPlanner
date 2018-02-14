  </head>
  <body>
    <section id="container" >
      <header class="header black-bg">
        <div class="sidebar-toggle-box">
          <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation">
          </div>
        </div>
        <!--logo start-->
        <a href="index.php" class="logo"><i class="fa fa-book"></i>&nbsp;&nbsp;<b>MY PLANNER</b></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">
          <!--  notification start -->
          <ul class="nav top-menu">
            
            <!-- settings start --><?php
            $abc="SELECT count(*) as c FROM task WHERE uid='".$_SESSION['uid']."'";
            $result=mysqli_query($con,$abc);
            if($result)
            {
            while($row=mysqli_fetch_assoc($result))
            {
            $total= $row['c'];
            }
            }?>
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#" title="Pending task">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-warning"><?php echo $total ?></span>
              </a>
              <ul class="dropdown-menu extended tasks-bar">
                <div class="notify-arrow notify-arrow-green"></div>
                <li>
                  <p class="green">You have <?php echo $total ?> pending tasks</p>
                </li><?php
                $ress = mysqli_query($con,"SELECT * FROM task WHERE uid='".$_SESSION['uid']."' ORDER BY id LIMIT 0,10");
                while ($row = mysqli_fetch_array($ress)){
                $id = $row['id'];
                $title = $row['title'];?>
                <li>
                  <a href="index.php#">
                    <div class="task-info">
                      <form method="post">
                        <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                        <div class="desc"><?php echo $title ?><button type="submit" name="delete" id="delete" class="close" href="index.php" aria-hidden="true" title="delete" >×</button></div></form>
                        
                      </div>
                      
                    </a>
                  </li>
                  <?php }?>
                  <li class="external">
                    <a href="task.php">See All Tasks</a>
                  </li>
                </ul>
              </li>
              <li id="header_inbox_bar" class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="index.php#" title="Upcoming event">
                  <i class="fa fa-calendar"></i>
                  <?php
                  $abcd="SELECT count(*) as d FROM events WHERE uid='".$_SESSION['uid']."'AND start >= NOW();";
                  $result1=mysqli_query($con,$abcd);
                  if($result1)
                  {
                  while($row=mysqli_fetch_assoc($result1))
                  {
                  $total1= $row['d'];
                  }
                  }?>
                  
                  <span class="badge bg-theme"><?php echo $total1 ?></span>
                </a>
                <ul class="dropdown-menu extended inbox">
                  <div class="notify-arrow notify-arrow-green"></div>
                  <li>
                    <p class="green">You have <?php echo $total1 ?> Upcoming Events</p>
                  </li><?php
                       date_default_timezone_set('Asia/Kuala_Lumpur');
                  $ress = mysqli_query($con,"SELECT * FROM events WHERE uid='".$_SESSION['uid']."' ORDER BY id LIMIT 0,10");
                  while ($row = mysqli_fetch_array($ress)){
                  $id = $row['id'];
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
                  }
                  elseif($x==1){
                  $message = "today";
                  }
                  else{
                  $message = "in ".$x." days";
                  }}
                  else{
                  $message = "Overdue";
                  
                  }
                  ?>
                  <?php if($start2 >=$todaydate1){?>
                  <li>
                    <a href="index.php#">
                      <span class="subject">
                        <span class="from"><?php echo $title2?></span>
                        <span class="time"><?php echo $message?></span>
                      </span>
                      <span class="message">
                        <?php echo date('Y-m-d H:i A', strtotime($start2));?>
                      </span>
                    </a>
                  </li>
                  <li>
                    <?php }}?>
                    <li>
                      <a href="viewEvent.php">See all events</a>
                    </li>
                  </ul>
                </div>
                <?php
                if(isset($_POST['delete'])){  // sql to delete a record
                $delete_id = $_POST['delete_id'];
                $sql = "DELETE FROM task WHERE id='$delete_id' ";
                if ($con->query($sql) === TRUE) {
                echo '<script> window.alert("Deleted."); window.history.back()</script>';
                } else {
                echo "Error deleting record: " . mysqli_error($con);
                }
                
                }?>
                <!-- user login dropdown end -->
                
                <div class="top-nav ">
                  <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="../<?php if(empty($srow['uimage'])){echo "upload/avatar.png";}else{echo $srow['uimage'];} ?>"  height="29" width="29">
                        <span class="username">&nbsp;<?php echo $name; ?></span>
                        <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <div class="log-arrow-up"></div>
                        <li><a href="#account" data-toggle="modal"><i class=" fa fa-suitcase"></i>&nbsp; Account</a></li>
                        <li class="divider"></li>
                        <li><a href="#accountphoto" data-toggle="modal"><i class=" fa fa-image"></i></span>&nbsp;&nbsp;Profile Picture</a></li>
                        <li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span>  Log Out</a></li>
                      </ul>
                    </li>
                    <!-- user login dropdown end -->
                  <!--   <li class="sb-toggle-right">
                      <i class="fa fa-align-right"></i>
                    </li> -->
                  </ul>
                </div>
              </header>
             