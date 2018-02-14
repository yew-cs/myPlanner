<?php

require_once('bdd.php');
if (isset($_POST['delete']) && isset($_POST['id'])){
	
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM events WHERE id = $id";
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error prepare');
	}
	$res = $query->execute();
	if ($res == false) {
	 print_r($query->errorInfo());
	 die ('Error execute');
	}
	
}elseif (isset($_POST['title']) && isset($_POST['type']) && isset($_POST['venue']) && isset($_POST['color']) && isset($_POST['id']) && isset($_POST['end']) && isset($_POST['color'])){
	
	$id = $_POST['id'];
	$title = $_POST['title'];
	$venue = $_POST['venue'];
	$type = $_POST['type'];
	$color = $_POST['color'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	
	$sql = "UPDATE events SET  title = '$title', type = '$type' , venue = '$venue' ,  color = '$color' , start ='$start' , end = '$end' WHERE id = '$id' ";

	
	$query = $bdd->prepare( $sql );
	if ($query == false) {
	 print_r($bdd->errorInfo());
	 die ('Error prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Error execute');


	}

}
header('Location: eventCalendar.php');

	
?>
