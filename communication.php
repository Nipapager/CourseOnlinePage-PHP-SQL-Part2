<?php
        session_write_close();
        session_save_path('./temp');
	session_start();


	if(!isset($_SESSION['login_user'])){
		header('location: login.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Επικοινωνία</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<div class="heading">
			<h1>Επικοινωνία</h1>
		</div>
		<div class="menu">
			<a href="index.php"><img src="index.png" width=40; height=40;>Αρχική σελίδα</a>
			<a href="announcement.php"><img src="announcements.png" width=40; height=40;>Ανακοινώσεις</a>
			<a href="communication.php"><img src="communication.png" width=30; height 30;>Επικοινωνία</a>
			<a href="documents.php"><img src="documents.png" width=40; height=40;>Έγγραφα μαθήματος</a>
			<a href="homework.php"><img src="homework.png" width=40; height=40;>Εργασίες</a>
			 <a href="logout.php"><img src="logout.png" width=40; height=40;>Αποσύνδεση</a>
		</div>
		
		<div class="content">
			<h2>Αποστολή e-mail μέσω web φόρμας</h2>
			<form>
				<label>Αποστολέας:</label> 
				<br>
				<input type="text" name=" " value="">
				<br>
				<label>Θέμα:</label> 
				<br>
				<input type="text" name=" " value="">
				<br>
				<label>Κείμενο:</label>
				<br>
				<textarea rows="10" cols="60"></textarea> 
				<br>
				<input type="submit" value="Submit">
			</form> 
			<hr>
			<h2>Αποστολή e-mail με χρήση e-mail διεύθυνσης </h2>
			<p>Εναλλακτικά μπορείτε να αποστείλετε e-mail στην παρακάτω διεύθυνση ηλεκτρονικού ταχυδρομείου <a href="mailto:tutor@csd.auth.test.gr">tutor@csd.auth.test.gr</p>
		</div>
	</body>
</html>