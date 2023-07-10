<?php
$link =  mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
$id=$_REQUEST["id"];
if(isset($_POST['submit'])){
	$title=$_REQUEST["title"];
	$description=$_REQUEST["text"];
	$filename=$_POST['filename'];
	$query = "UPDATE docs SET title='$title', description='$description', filename = '$filename' WHERE id = '$id'";
	$result = mysqli_query($link,$query);
	if(!$result){
	   echo('Error updating document item: ' . $mysql_error());
	   exit();
	}else{
	   header('location: documents.php');
	}
}
$query = "SELECT * FROM docs WHERE id = '$id'";
$result = mysqli_query($link,$query);
if(!$result){
   echo('Error selecting news item: ' . $mysql_error());
   exit();
}

$row = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" type="text/css" href="style.css">
<form name="form" method="post" action="editDocument.php">
<div class="container">
<h1>Επεξεργασία εγγράφου</h1>
					<hr>
					<fieldset>
						Τίτλος:<br>
						<input type="text" id="text" name="title" value="<?php echo $row['title']; ?>"><br><br>
						Περιγραφή:<br>
						<textarea rows="20" cols="200" id="text" name="description"id="text" ><?php echo $row['description']; ?></textarea><br>
                        <input type="file" id="filename" name="filename"><br><br>
						<button type="submit" name="submit">Ανανέωση</button>
				</div>
				<br><br>
				</fieldset>
