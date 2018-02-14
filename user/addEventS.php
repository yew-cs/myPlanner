<?php
session_start();

require_once('bdd.php');
//echo $_POST['title'];
if (isset($_POST['title']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])&& isset($_POST['venue'])){
	
	$title = $_POST['title'];
	$venue = $_POST['venue'];
	$type = $_POST['type'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];
	// $uid = '".$_SESSION['uid']."';

	$sql = "INSERT INTO events(title, venue,type, start, end, color, uid) values ('$title','$venue','$type', '$start', '$end', '$color', '".$_SESSION['uid']."')";
	//$req = $bdd->prepare($sql);
	//$req->execute();
	
	echo $sql;
	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Erreur prepare');
		
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
		}

}
header('Location: '.$_SERVER['HTTP_REFERER']);

	
?>
