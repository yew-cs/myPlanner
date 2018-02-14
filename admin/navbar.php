<header class="header black-bg">
  <div class="sidebar-toggle-box">
    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation">      
    </div>
  </div>
  <!--logo start-->
  <a href="index.php" class="logo"><i class="fa fa-book"></i>&nbsp;&nbsp;<b>MY PLANNER</b></a>
  <!--logo end-->

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
                  
                  </ul>
                </div>
              </header>
             