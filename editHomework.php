<?php
$link =  mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
$id=$_REQUEST["id"];
if(isset($_POST['submit'])){
       
	$targets=$_REQUEST['targets'];
	$description=$_REQUEST['description'];
	$files=$_POST['files'];
	$deadline=$_POST['deadline'];
	$query = "UPDATE docs SET targets='$targets',description='$description',files='$files',deadline='$deadline' WHERE id = '$id'";
	$result = mysqli_query($link,$query);
	if(!$result){
	   echo('Error updating document item: ' . $mysql_error());
	   exit();
	}else{
	   header('location: homework.php');
	}
}
$query = "SELECT * FROM projects WHERE id = '$id'";
$result = mysqli_query($link,$query);
if(!$result){
   echo('Error selecting project: ' . $mysql_error());
   exit();
}

$row = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" type="text/css" href="style.css">
<form name="form" method="post" action="editHomework.php">
<div class="container">
<h1>Επεξεργασία εργασίας</h1>
					<hr>
						Στόχοι:<br>
						<textarea rows="11" cols="160" id="targets" name="targets"><?php echo $row['targets']; ?></textarea><br><br>
						Εκφώνηση:<br>
						<input type="file" name="filename" value="<?php echo $row['description']; ?>" ><br><br>
						Παραδοτέα:<br>
						<textarea rows="11" cols="160" id="files" name="files"><?php echo $row['files']; ?></textarea><br><br>
						Ημερομηνία Παράδοσης:<br>
						<input type="date" id="deadline" name="deadline" value="<?php echo $row['deadline']; ?>"><br><br>
						<button type="submit" name="submit">Ανανέωση</button>
				</div>
				<br><br>
				</fieldset>
