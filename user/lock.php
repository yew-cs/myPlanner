<?php include('session.php');
?>
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
        <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
        <!-- Custom styles for this template -->
        <link href="../assets/css/styleee.css" rel="stylesheet">
        <link href="../assets/css/style-responsive.css" rel="stylesheet">
         <script>
    function validateForm1() {
                

     
        var a = document.forms["unlock"]["password1"].value;
        if(a == null || a == ""){
            alert("Password must be filled out");
            return false;
        }
        if(a.length<5 || a.length>25){
            alert("Passwords must be 5 to 25 characters long.");
            return false;
        }

        
    }
</script>
    </head>
    <body onload="getTime()">
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <div class="container">
            
            <div id="showtime"></div>
            <div class="col-lg-4 col-lg-offset-4">
                <div class="lock-screen">
                    <h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
                    <h4 color="white">UNLOCK</h4>
                    
                    <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Welcome Back</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid">
                                    <form class="form-horizontal" name="unlock" method="POST" onSubmit="return validateForm1()">
                                        <p class="centered"><img class="img-circle" height="80" width="80" src="../<?php if(empty($srow['uimage'])){echo "upload/avatar.png";}else{echo $srow['uimage'];} ?>"></p>
                                        <h5 class="centered"><?php echo $srow['uname']; ?></h5>

                                         <div class="form-group input-group">
                                    <span class="input-group-addon" style="width:150px;">Password:</span>
                                  
                                        <input type="password" style="width:420px;"name="password1" placeholder="Enter password to unlock" autocomplete="off" class="form-control placeholder-no-fix" title=" 5- 25 characters long"required required>
                                        
                                    </div>
                                    <br>
                                    <center>
                                        <button data-dismiss="modal" class="btn btn-default" type="button"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                        <button type="submit" class="btn btn-theme03" name="unlock" type="button"><span class="fa fa-sign-in"></span>&nbsp;Login</button>
                                    </center>
                                    </div>
                                
                            </form>
                        </div>
                        </div>
                    </div>
                    <!-- modal -->
                    <?php
                    if(isset($_POST['unlock'])){
                    $pass=$_POST['password1'];
                    if ($pass==$srow['upassword']){   ?>
                    <script>window.alert("Welcome back...");window.location.href='../user/index.php';</script>
                    <?php $_SESSION['uid']=$srow['uid'];}
                    else{
                    ?>
                    <script>window.alert("Invalid access,click OK to login again...");window.location.href='../login.php';</script>
                    <?php
                    exit();
                    }}
                    ?>
                    
                    
                </div><! --/lock-screen -->
                </div><!-- /col-lg-4 -->
                
                </div><!-- /container -->
                <!-- js placed at the end of the document so the pages load faster -->
                <script src="../assets/js/jquery.js"></script>
                <script src="../assets/js/bootstrap.min.js"></script>
                <!--BACKSTRETCH-->
                <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
                <script type="text/javascript" src="../assets/js/jquery.backstretch.min.js"></script>
                <script>
                $.backstretch("../img/login-bg.jpg", {speed: 500});
                </script>
                <script>
                function getTime()
                {
                var today=new Date();
                var h=today.getHours();
                var m=today.getMinutes();
                var s=today.getSeconds();
                // add a zero in front of numbers<10
                m=checkTime(m);
                s=checkTime(s);
                document.getElementById('showtime').innerHTML=h+":"+m+":"+s;
                t=setTimeout(function(){getTime()},500);
                }
                function checkTime(i)
                {
                if (i<10)
                {
                i="0" + i;
                }
                return i;
                }
                </script>
                <script type="text/javascript">
                $(document).ready(function () {
                history.pushState({ page: 1 }, "title 1", "#nbb");
                window.onhashchange = function (event) {
                window.location.hash = "nbb";
                };
                });
                </script>




            </body>
        </html>