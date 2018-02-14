<?php
session_start();
  $bdd = new PDO('mysql:host=localhost;dbname=fyp;charset=utf8', 'root', '');

    if (!isset($_SESSION['uid']) ||(trim ($_SESSION['uid']) == '')) {?>
    <script>window.alert("Your session expired,click OK to login again...");window.location.href='../login.php';</script>
    <?php
    exit();
  }

  $sq="SELECT uname,umobile,upassword,uimage FROM user where uid='".$_SESSION['uid']."'";
  $req1 = $bdd->prepare($sq);
  $req1->execute();
  $users = $req1->fetchAll();

       foreach($users as $user): 
      
        $name = $user['uname'];
        $mobile = $user['umobile'];
        $password = $user['upassword'];
        $image = $user['uimage'];
        
      endforeach;

        $sql = "SELECT id, title, type, venue, start, end, color FROM events WHERE uid = :uid ";

  $req = $bdd->prepare($sql);
  $req->execute(['uid'=>$_SESSION['uid']]);

  $events = $req->fetchAll();

?>