<?php

include('session.php');



    // start the query
    $query = "UPDATE task SET favorite=".$_POST['favorite'] . "
WHERE id=".$_POST['id'] . ";";

mysql_query($query);
mysql_close($con);

 

?>