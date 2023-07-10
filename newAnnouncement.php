<?php
	if(!isset($_POST['submit'])){
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Προσθήκη νέας ανακοίνωσης</title>
		<meta charset="UTF-8">
	</head>
	<body>
			<form  action="newAnnouncement.php" method="post">
				<div class="container">
					<h1>Προσθήκη νέας ανακοίνωσης</h1>
					<hr>
					<fieldset>
						Ημερομηνία:<br>
						<input type="date" name="date"><br><br>
						θέμα:<br>
						<input type="text" name="subject"><br><br>
						Περιεχόμενο:<br>
						<textarea rows="20" cols="200" name="text"></textarea><br>
						<button type="submit" name="submit">Προσθήκη ανακοίνωσης</button>
				</div>
				<br><br>
				</fieldset>
			</form>
	</body>
</html>
<?php
}else{
	$link = mysqli_connect('webpagesdb.it.auth.gr:3306','nipapager','nipapager11','student2918partB');
    

	if(!$link){
		echo('Error connecting to the database: ' . $mysql_error());
		exit();
	}
			
			$date=date('Y-m-d',strtotime($_POST['date']));
			$subject=$_POST['subject'];
			$text=addslashes($_POST['text']);
			$sql="INSERT INTO announcement(id,date,subject,text) VALUES('','$date','$subject','$text')";
            
			$result = mysqli_query($link,$sql);
			if($result)
			{
				header("location: announcement.php");
			}
			else{
				echo "failed";
			}
	}
?>
