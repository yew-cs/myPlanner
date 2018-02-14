<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("cpassword");
          if (x.type === "password") {
              x.type = "text";
                } else {
                    x.type = "password";
                      }
                  }
    </script>


<!---Logout-->
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Logging out...</h4></center>
                </div>
                <div class="modal-body">
				    <div class="container-fluid">
					  <center><b><span style="font-size: 15px;"><?php echo $name; ?></b>,confirm to log out?</span></center>
                    </div> 
				</div>
                <div class="modal-footer">
                  <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="logout.php" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</a></center>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- /.modal -->              

<!-- Account-->
    <div class="modal fade" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"><b>My Account</b></h4></center>
                </div>
                <div class="modal-body">
				    <div class="container-fluid">
				        <form method="POST" action="update_account.php">
					       <div style="height: 10px;"></div>
                           <!-- <div class="form-group input-group">
                              <span class="input-group-addon" style="width:150px;">Userid:</span>
                              <input type="text" style="width:350px;" readonly class="form-control" name="mname" value="<?php echo $srow['uname']; ?>" required>
                           </div>
                           <div class="form-group input-group">
                              <span class="input-group-addon" style="width:150px;">Email:</span>
                              <input type="text" style="width:350px;" readonly class="form-control" name="musername" value="<?php echo $srow['uemail']; ?>"required>
                           </div> -->
					       <div class="form-group input-group">
						      <span class="input-group-addon" style="width:200px;">Name:</span>
						      <input type="text" style="width:420px;" class="form-control" name="mname" value="<?php echo $name; ?>" required>
					       </div>

                           <div class="form-group input-group">
                              <span class="input-group-addon" style="width:200px;">Mobile:</span>
                              <input type="text" style="width:420px;" class="form-control" name="mmobile" value="<?php echo $mobile; ?>" required>
                           </div>
					       
					       <div class="form-group input-group">
						      <span class="input-group-addon" style="width:200px;">New Password:</span>
						      <input type="password" style="width:400px;" class="form-control" id="mpassword" name="mpassword" value="<?php echo $password; ?>" required>
					       </div>

                 <div class="form-group input-group">
                  <span class="input-group-addon" style="width:200px;">Re-enter new:</span>
                  <input type="password" style="width:420px;" class="form-control" name="apassword" value="<?php echo $password; ?>" required>
                 </div>  
                           

					       <hr>
					       <span>Enter current password to save changes:</span>
					       <div style="height: 10px;"></div>
					           <div class="form-group input-group">
						          <span class="input-group-addon" style="width:200px;">Current Password:</span>
						          <input type="password" style="width:360px;" class="form-control" id="cpassword" name="cpassword" placeholder="Enter your current password"> 
                                                                  
					           </div>
                              <!--  <input type="checkbox" onclick="myFunction()">&nbsp;Show Password  -->
                                
					                                           
                         <br>
                        
                            <center><button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <button  type="submit"  class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</button>
                            </center>  
                           
                        </form>
                    </div>

                    <!--Upload Photo-->
                    <!-- <span>Upload your Profile picture here:</span>
                    <div style="height: 10px;"></div>
                    <form method="POST" enctype="multipart/form-data" action="update_photo.php">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Photo:</span>
                            <input type="file" style="width:280px;" class="form-control" accept="image/*" name="image">

                            <button type="submit" style="float: right;"  class="btn btn-success" a><span class="glyphicon glyphicon-upload"></span> Upload</button>                    
                        </div> 
                    </form> -->

                </div> 
			</div>
            <!-- /.modal-content -->                
        </div>
        <!-- /.modal-dialog -->        
    </div> 
    <!-- /.modal-->

      <div class="modal fade" id="accountphoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel"><b>My Profile Picture</b></h4></center>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">                        
                            <span>Upload your Profile picture here:</span>
                    <div style="height: 10px;"></div>
                    <form method="POST" enctype="multipart/form-data" action="update_photo.php">
                        <div class="form-group input-group">
                            <span class="input-group-addon" style="width:150px;">Photo:</span>
                            <input type="file" style="width:420px;" class="form-control" accept="image/*" name="image">
                        </div>
                         <center><button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <button type="submit" class="btn btn-success" a><span class="glyphicon glyphicon-upload"></span> Upload</button>                    
                        </center>
                    </form>
                
            </div>
        </div>
    </div>
</div>
</div>