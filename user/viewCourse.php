<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Planner || View Course</title>
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
    
    var x = document.forms["form2"]["email2"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
      alert("Invalid e-mail format.(Eg.xxx@yahoo.com)");
      return false;
      }
      var y = document.forms["form2"]["mobile2"].value;
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
                <a  class="active"   href="javascript:;" >
                  <i class="fa fa-calendar-check-o"></i>
                  <span>Timetable</span>
                </a>
                <ul class="sub">
                  <li ><a  href="addCourse.php">Add Course</a></li>
                   <li  class="active" ><a  href="viewCourse.php">View Course</a></li>
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
                <a  href="javascript:;" >
                  <i class="fa fa-newspaper-o"></i>
                  <span>Notes</span>
                </a>
                <ul class="sub">
                  <li ><a  href="addNotes.php">Add</a></li>
                  <li ><a  href="viewNotes.php">View</a></li>
                  
                </ul>
              </li>
              <li class="sub-menu">
                <a  href="javascript:;" >
                  <i class="fa fa-address-book-o"></i>
                  <span>Contacts</span>
                </a>
                <ul class="sub">
                  <li><a  href="addContact.php">Add</a></li>
                  <li  ><a  href="viewContact.php">View</a></li>
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
        <a name="top"></a>
        <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i>View Course</h3>
            <div class="row mt">
              <div class="col-lg-12">
                <div class="content-panel">
                  <table id="example" class="table table-striped table-hover" cellspacing="100" width="98%">
                    <thead>
                      <tr>
                        <th><h4>No</h4></th>
                        <th><h4><i class="fa fa-tag"></i> Subject Code</h4></th>
                        <th><h4><i class=" fa fa-file"></i> Subject Name</h4></th>
                        <th><h4><i class="fa fa-child"></i> Lecturer</h4></th> 
                         <th><h4><i class="fa fa-bookmark"></i> Action</h4></th>
                                      

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count=1;
                      $res = mysqli_query($con,"SELECT * FROM course WHERE uid='".$_SESSION['uid']."'");
                      while($row = mysqli_fetch_array($res)){
                      $id = $row['id'];
                        $subcode = ($row['subcode']);
                    $subname = ($row['subname']);
                    $lecturer = ($row['lecturer']);
                  
                   
                      ?>
                      <tr><td>
                        <?php echo $count++; ?>
                      </td>
                      <td>
                        <?php echo $subcode; ?>
                      </td>
                      <td>
                        <?php echo $subname; ?>
                      </td>
                      <td>
                        <?php echo $lecturer; ?>
                      </td>                    
                      
                      <td>
                        <a href="#view<?php echo $id;?>" data-toggle="modal">
                          <button type='button' class='btn btn-default btn-sm' title="View"><span class='fa fa-eye' aria-hidden='true'></span></button>
                        </a>
                        <a href="#edit<?php echo $id;?>" data-toggle="modal">
                          <button type='button' class='btn btn-warning btn-sm' title="Edit"><span class='fa fa-pencil' aria-hidden='true'></span></button>
                        </a>
                        <a href="#delete<?php echo $id;?>" data-toggle="modal">
                          <button type='button' class='btn btn-danger btn-sm' title="Delete"><span class='fa fa-trash-o' aria-hidden='true'></span></button>
                        </a>
                      </td>
                 
                      <!--View Feedback Modal -->
                      
                      <div id="view<?php echo $id; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title"><center><b>Contact Details</b></center></h4>
                            </div>
                            <div class="modal-body" >
                              <div class="container-fluid">
                                <b>Subject Code      : </b><?php echo $subcode; ?>
                                <hr>
                                <b>Subject Name     : </b><?php echo $subname; ?>
                                <hr>
                                <b>Lecturer     : </b><?php echo $lecturer; ?>
                                <hr>                              
                             
                              </div>
                              <br>
                              <center>
                              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                              </center>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--Edit  Modal -->
                      <div class="modal fade" id="edit<?php echo $id; ?>"tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <center><h4 class="modal-title" id="myModalLabel1"><b>Update Course</b></h4></center>
                            </div>
                            <div class="modal-body">
                              <div class="container-fluid">
                                <form method="POST" id="form2" name="form2" >
                                  <div style="height: 10px;"></div>
                                  <div class="form-group input-group">
                                    <input type="hidden" name="edit_item_id" value="<?php echo $id; ?>">
                                  </div>
                                  <div class="form-group input-group">
                                    <span class="input-group-addon" style="width:150px;">Subject Code:</span>
                                    <input type="text" style="width:420px;" class="form-control" name="code" value="<?php echo $subcode; ?>" required autofocus />
                                  </div>
                                  
                                  <div class="form-group input-group">
                                    <span class="input-group-addon" style="width:150px;">Subject Name:</span>
                                    <input type="text" style="width:420px;" class="form-control" name="name" value="<?php echo $subname; ?>" required autofocus/>
                                  </div>
                                  
                                  <div class="form-group input-group">
                                    <span class="input-group-addon" style="width:150px;">Lecturer:</span>
                                    <input type="text" style="width:420px;" class="form-control" name="lec" value="<?php echo $lecturer; ?>" required >                             </div>                                 
                                  
                                  <div class="modal-footer"><center>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                    <button type="submit" class="btn btn-success" name="update_item" ><span class="glyphicon glyphicon-edit"></span> Save </button></center>
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
                                <?php echo $subname; ?>?</strong> </div>
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
                    </tr>
                    <?php
                    }
                    if(isset($_POST['update_item'])){
                    $id = $_POST['edit_item_id'];
                    $name = $_POST['name'];
                    $code = $_POST['code'];
                    $lec= $_POST['lec'];
                    
                    $sql = "UPDATE course SET
                    subname='$name',
                    subcode='$code',
                    lecturer='$lec'           
                    WHERE id='$id' ";
                    if ($con->query($sql) === TRUE) {?>
                    <script>window.alert("Updated successfully."); window.location.href = "viewCourse.php";</script>
                    <?php
                    } else {
                    echo "Error updating record: " . $con->error;
                    }
                    }
                    if(isset($_POST['delete'])){  // sql to delete a record
                    $delete_id = $_POST['delete_id'];
                    $sql = "DELETE FROM course WHERE id='$delete_id' ";
                    if ($con->query($sql) === TRUE) {                  
                    echo '<script> window.alert("Deleted."); window.location.href="viewCourse.php"</script>';
                    } else {
                    echo "Error deleting record: " . mysqli_error($con);}}
                 
                    ?>
                  </tbody>
                </table>
                </div><!-- /content-panel -->
                </div><!-- /col-md-12 -->
                </div><!-- /row -->
              </div>
            </tbody>
          </table>
        </div>
      </div>
    </div>

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