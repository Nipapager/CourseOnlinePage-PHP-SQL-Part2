<?php
	$link = mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
		if(!$link){
			echo('Error connecting to the database: ' . $mysql_error());
			exit();
	}
	$query = "SELECT id FROM announcement ORDER BY date DESC";
	$result = mysqli_query($link,$query);
	if(!$result){
	   echo('Error selecting news: ' . $mysql_error());
	   exit();
	}
	$id=$_REQUEST['id'];
	$sql = "DELETE FROM announcement WHERE id = '$id'";
	$result = mysqli_query($link,$sql);
	if(!$result){
			echo('Error deleteing news item: ' . $mysql_error());
			exit();
	}
	header('location: announcement.php');
?> 