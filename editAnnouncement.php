<?php
$link =  mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
$id=$_REQUEST["id"];
if(isset($_POST['submit'])){
	$subject=$_REQUEST['subject'];
	$text=$_REQUEST['text'];
	$query = "UPDATE announcement SET subject = '$subject', text = '$text',date = NOW() WHERE id = '$id'";
	$result = mysqli_query($link,$query);
	if(!$result){
	   echo('Error updating news item: ' . $mysql_error());
	   exit();
	}else{
	   header('location: announcement.php');
	 }
}
$query = "SELECT * FROM announcement WHERE id = '$id'";
$result = mysqli_query($link,$query);
if(!$result){
   echo('Error selecting news item: ' . $mysql_error());
   exit();
}

$row = mysqli_fetch_assoc($result);
?>
<link rel="stylesheet" type="text/css" href="style.css">
<form name="form" method="post" action="editAnnouncement.php">
<div class="container">
					<h1>Επεξεργασία Ανακοίνωσης</h1>
					<hr>
					<fieldset>
						θέμα:<br>
						<input type="text" name="subject" id="subject" value="<?php echo $row['subject']; ?>"><br><br>
						Περιεχόμενο:<br>
						<textarea rows="20" cols="200" name="text"><?php echo $row['text']; ?></textarea><br>
						<button type="submit" name="submit">Ενημέρωση</button>
				</div>
				<br><br>
				</fieldset>