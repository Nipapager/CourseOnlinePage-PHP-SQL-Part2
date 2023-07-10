<?php
	$link = mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
		if(!$link){
			echo('Error connecting to the database: ' . $mysql_error());
			exit();
	}
	$query = "SELECT * FROM projects ORDER BY id DESC";
	$result = mysqli_query($link,$query);
	if(!$result){
	   echo('Error selecting project: ' . $mysql_error());
	   exit();
	}
	$id=$_REQUEST['id'];
	$sql = "DELETE FROM projects WHERE id = '$id'";
	$result = mysqli_query($link,$sql);
	if(!$result){
			echo('Error deleting project : ' . $mysql_error());
			exit();
	}
        else{
                   header("location: homework.php");
                 }
?> 