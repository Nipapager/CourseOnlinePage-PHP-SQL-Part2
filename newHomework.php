<?php
	if(!isset($_POST['submit'])){
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Προσθήκη νέας εργασίας</title>
		<meta charset="UTF-8">
	</head>
	<body>
		
			<form  action="newHomework.php" enctype="multipart/form-data" method="post">
				<div class="container">
					<h1>Προσθήκη νέας εργασίας</h1>
					<hr>
						Στόχοι:<br>
						<textarea rows="11" cols="160" name="targets"></textarea><br><br>
						Εκφώνηση:<br>
						<input type="file" name="filename"><br><br>
						Παραδοτέα:<br>
						<textarea rows="11" cols="160" name="files"></textarea><br><br>
						Ημερομηνία Παράδοσης:<br>
						<input type="date" name="deadline"><br><br>
						<button type="submit" name="submit">Προσθήκη νέoυ εγγράφου</button>
				</div>
				<br><br>
			</form>
		
	</body>
</html>
<?php
}else{
$description = "projects/";
$description = $description . basename( $_FILES['filename']['name']);

$targets=$_POST["targets"];
$deadline=$_POST['deadline'];
$files=$_POST['files'];

if(move_uploaded_file($_FILES['filename']['tmp_name'], $description)) {
    $link = mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
	$sql="INSERT INTO projects(id,targets,files,description,deadline) VALUES ('','$targets','$files','$description','$deadline')";
	$result = mysqli_query($link,$sql);
			if($result)
			{
				$newid=$link->insert_id;
				$sql="INSERT INTO announcement(id,date,subject,text) VALUES('',NOW(),'Υποβλήθηκε η εργασία $newid','Η ημερομηνία παράδοσης της εργασίας είναι $deadline')";
				$result = mysqli_query($link,$sql);
				header("location: homework.php");
			}
			else{
				echo "failed";
			}
}
}
?>
