<?php
	$link = mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
		if(!$link){
			echo('Error connecting to the database: ' . $mysql_error());
			exit();
	}
	$query = "SELECT * FROM docs ORDER BY id DESC";
	$result = mysqli_query($link,$query);
	if(!$result){
	   echo('Error selecting document: ' . $mysql_error());
	   exit();
	}
	$id=$_REQUEST['id'];
	$sql = "DELETE FROM docs WHERE id = '$id'";
	$result = mysqli_query($link,$sql);
	if(!$result){
			echo('Error deleteing doc item: ' . $mysql_error());
			exit();
	}
	header('location: documents.php');
?> 