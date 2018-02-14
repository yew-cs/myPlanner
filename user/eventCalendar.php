<?php include('dbConnection2.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Planner || Calendar</title>
    <link rel="shortcut icon" href="../favicon.ico"/>
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="../assets/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
    
    <!-- Custom styles for this template -->
    
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <link href='../assets/css/fullcalendar.css' rel='stylesheet' />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="../assets/css/sty.css" rel="stylesheet">
       <link href="../assets/css/test1.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
    #calendar {
    max-width:850px;
    background-color: white;
    padding: 50px;
    }
    .col-centered{
    float: none;
    margin: 0 auto;
    }
    </style>
  </head>
  <body background-color="#fff">
    <section id="container" >
      <?php include('navbarR.php'); ?>
      <?php include('modal1.php'); ?>
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
            
            <p class="centered"><a href="profile.php"><img src="../<?php if(empty($image)){echo "upload/avatar.png";}else{ echo $image; } ?>" class="img-circle" height="80" width="80"></a></p>
            <h5 class="centered"><?php echo $name; ?></h5>
            
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
              <a class="active" href="javascript:;" >
                <i class="fa fa-calendar"></i>
                <span>Events</span>
              </a>
              <ul class="sub">
                <li class="active" ><a  href="eventCalendar.php">Calendar</a></li>
       
                <li><a  href="viewEvent.php">View</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a  href="task.php ">
                <i class="fa fa-tasks"></i>
                <span>Task</span>
              </a>
            </li>
            <li class="sub-menu">
              <a  href=javascript:;" >
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
      <a name="top"></a>
      <section id="main-content">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i>Calendar</h3>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <div id="calendar" class="col-centered">
                </div>
              </div>
              
            </div>
          </div>
          <!-- /.row -->
          
          <!--Add Modal -->
          <!-- Add modal-->
          <div class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <center><h4 class="modal-title" id="myModalLabel"><b>Add Event</b></h4></center>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                    <form method="POST" action="addEventS.php">
                      <div style="height: 10px;"></div>
                      <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Title:</span>
                        <input type="text" style="width:420px;" class="form-control" name="title" id="title" placeholder="Eg.Nike Run 2019" autocomplete="off"required>
                      </div>
                       <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Type:</span>
                       <select  name="type" style="width:420px;" class="form-control" id="type" required>
                                    <option value="">Choose</option>
                                    <option value="Assignment"> Assignment</option>
                                    <option value=" Event">Event</option>
                                     <option value=" Class">Class</option>
                                     <option value=" Meeting">Meeting</option>
                                    <option value=" Others ">Others</option>                                    
                                  </select>
                                                           
                      </div>
                      <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Venue:</span>
                        <input type="text" style="width:420px;" class="form-control" name="venue" class="form-control" id="venue" placeholder="Eg.Stadium Merdeka">
                      </div>
                      
                      <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Color:</span>
                        <select style="width:420px;" name="color" class="form-control" id="color">
                          <option value="">Choose</option>
                          <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                          <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                          <option style="color:#008000;" value="#008000">&#9724; Green</option>
                          <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                          <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                          <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                          <option style="color:#000;" value="#000">&#9724; Black</option>
                          
                        </select>
                        
                      </div>
                      <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Start:</span>
                        <input type="text" style="width:420px;" name="start" class="form-control" id="start">
                      </div>
                      <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">End:</span>
                        <input type="text" style="width:420px;" name="end" class="form-control" id="end" readonly="">
                      </div>
                      <br>
                      <center><button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                      <button  type="submit"  class="btn btn-success"><span class="fa fa-save"></span> Save</button>
                      </center>
                      
                    </form>
                  </div>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal-->
          
          
          
          <!-- Edit  Modal -->
          <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <form class="form-horizontal" method="POST" action="editEventTitle.php">
              <div class="modal-content">
                 
                
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel"><b><center>Edit Event</center></b></h4>
                </div>
                <div class="modal-body">
                  <div class="container-fluid">
                   
                      <div style="height: 10px;"></div>
                      <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Title:</span>
                        <input type="text" style="width:420px;" class="form-control" id="title" name="title" " placeholder="Title" required>
                      </div>
                        <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Type:</span>
                       <select  name="type" style="width:420px;" class="form-control" id="type">
                                    <option value="">Choose</option>
                                    <option value="Assignment"> Assignment</option>
                                    <option value=" Event">Event</option>
                                     <option value=" Class">Class</option>
                                     <option value=" Meeting">Meeting</option>
                                    <option value=" Others ">Others</option>                                    
                                  </select>
                                                           
                      </div>
                      <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Venue:</span>
                        <input type="text" style="width:420px;" class="form-control" name="venue" id="venue" placeholder="Venue">
                      </div>
                      <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Color:</span>
                        <select style="width:420px;" name="color" class="form-control" id="color">
                          <option value="">Choose</option>
                          <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                          <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                          <option style="color:#008000;" value="#008000">&#9724; Green</option>
                          <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                          <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                          <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                          <option style="color:#000;" value="#000">&#9724; Black</option>
                          
                        </select>
                      </div>
                      
                      <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">Start:</span>
                        <input type="text" style="width:420px;" name="start" class="form-control" id="start" required>
                      </div>
                      
                      <div class="form-group input-group">
                        <span class="input-group-addon" style="width:150px;">End:</span>
                        <input type="text" style="width:420px;" name="end" class="form-control" id="end" required>
                      </div>
                      
                      
                      <div class="form-group">
                        
                        <div class="checkbox"><center>
                          <label class="text-danger"><input type="checkbox"  name="delete"> Delete event</label></center>
                        </div>
                        <input type="hidden" name="id" class="form-control" id="id">
                        
                      </div>
                    </div>
                    <div class="modal-footer">
                      <center>
                      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                      <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button></center>
                    </div>
                  </form>
                </div>
              </div>
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
                      <a href="#top" class="go-top">
                        <i class="fa fa-angle-up"></i>
                      </a>
                    </div>
                  </footer>
      <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <!-- jQuery Version 1.11.1 -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- FullCalendar -->
    <script src='../assets/js/moment.min.js'></script>
    <script src='../assets/js/fullcalendar.min.js'></script>
    
    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>
    <!--script for this page-->
    <script>
      $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,agendaDay'
      },
      

      defaultDate: '2019-02-01',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      selectable: true,
      selectHelper: true,
      select: function(start, end, jsEvent, view) {
        
        $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
        $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
        $('#ModalAdd').modal('show');
      },

      eventMouseover: function (data, event, view) {

            tooltip = '<div class="tooltiptopicevent" style="width:auto;height:auto;color:#fff;background:#00b4ab;position:absolute;z-index:10001;padding:10px 10px 10px 10px; border-radius: 5px; line-height: 200%;">' + '<b>Event: </b>' + data.title + '</br>' +'<b>Type: </b>' + data.type + '</br>' +'<b>Venue: </b>' + data.venue + '</br>' + '<b>Start: </b>' + ': ' + data.start.format('YYYY-MM-DD HH:mm') + '</br>' + '<b>End: </b>' + ': ' + data.end.format('YYYY-MM-DD HH:mm') +'</div>';


              $("body").append(tooltip);
            $(this).mouseover(function (e) {
                $(this).css('z-index', 10000);
                $('.tooltiptopicevent').fadeIn('500');
                $('.tooltiptopicevent').fadeTo('10', 1.9);
            }).mousemove(function (e) {
                $('.tooltiptopicevent').css('top', e.pageY + 10);
                $('.tooltiptopicevent').css('left', e.pageX + 20);
            });


        },
        eventMouseout: function (data, event, view) {
            $(this).css('z-index', 8);

            $('.tooltiptopicevent').remove();

        },
      eventRender: function(event, element) {
        element.bind('dblclick', function() {

          // var string = moment(start).format('YYYY-MM-DD HH:mm:ss');

          $('#ModalEdit #id').val(event.id);
          $('#ModalEdit #title').val(event.title);
          $('#ModalEdit #type').val(event.type);
    $('#ModalEdit #venue').val(event.venue);
          $('#ModalEdit #color').val(event.color);
          $('#ModalEdit #start').val(event.start.format('YYYY-MM-DD HH:mm:ss'));    
          $('#ModalEdit #end').val(event.end.format('YYYY-MM-DD HH:mm:ss'));
          $('#ModalEdit').modal('show');
        });
      },
      eventDrop: function(event, delta, revertFunc) { // si changement de position

        edit(event);

      },
      eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

        edit(event);

      },
      events: [
      <?php foreach($events as $event): 
      
        $start = explode(" ", $event['start']);
        $end = explode(" ", $event['end']);
        if($start[1] == '00:00:00'){
          $start = $start[0];
        }else{
          $start = $event['start'];
        }
        if($end[1] == '00:00:00'){
          $end = $end[0];
        }else{
          $end = $event['end'];
        }
      ?>
        {
          id: '<?php echo $event['id']; ?>',
          title: '<?php echo $event['title']; ?>',
          venue: '<?php echo $event['venue']; ?>',
          type: '<?php echo $event['type']; ?>',
          start: '<?php echo $start; ?>',
          end: '<?php echo $end; ?>',
          color: '<?php echo $event['color']; ?>',
        },
      <?php endforeach; ?>
      ]
    });
    
    function edit(event){
      start = event.start.format('YYYY-MM-DD HH:mm:ss');
      if(event.end){
        end = event.end.format('YYYY-MM-DD HH:mm:ss');
      }else{
        end = start;
      }
      
      id =  event.id;
      
      Event = [];
      Event[0] = id;
      Event[1] = start;
      Event[2] = end;
      
      $.ajax({
       url: 'editEventDate.php',
       type: "POST",
       data: {Event:Event},
       success: function(rep) {
          if(rep == 'OK'){
            alert('Saved');
          }else{
            alert('Could not be saved. try again.'); 
          }
        }
      });
    }
    
  });

</script>
    
    <script>
    //custom select box
    $(function(){
    $('select.styled').customSelect();
    });
    </script>
  </body>
</html>